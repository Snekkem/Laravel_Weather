<?php

namespace App\Http\Controllers;

use DomDocument;
use DOMXPath;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * 
     */
    public function index() {
        $ch = curl_init('https://www.gismeteo.ua/weather-zaporizhia-5093/');
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $html = curl_exec($ch);
        $dom = new DOMDocument();

        $res = @$dom->loadHTML($html);
        $xpath = new DOMXPath($dom);

        $time = ['<span>0<sup>00</sup></span>', '<span>3<sup>00</sup></span>', 
        '<span>6<sup>00</sup></span>', '<span>9<sup>00</sup></span>',
            '<span>12<sup>00</sup></span>', '<span>15<sup>00</sup></span>',
                '<span>18<sup>00</sup></span>', '<span>21<sup>00</sup></span>'];
    
        $classTooltip = 'tooltip';
        $pictures =  $xpath->query("//*[contains(concat(' ', normalize-space(@class), ' '), '$classTooltip')]");
        $arrpic = [];
        for($i = 3; $i < 11;$i++) {
            $arrpic[] = $dom->saveXML($pictures[$i]).' ';
        }

        $temperature = [];
        $classTemp = 'unit unit_temperature_c';
        $temp =  $xpath->query("//*[contains(concat(' ', normalize-space(@class), ' '), '$classTemp')]");

        for ($i = 6; $i < $temp->length; $i++) {
            $temperature[] = $temp[$i]->nodeValue;
        }

        $tabl = '';
        $tabl .= '<table>';
            $tabl .= '<tr>';  
            foreach($time as $t)
                $tabl .= "<td>$t</td>";
            $tabl .= '</tr>';

            $tabl .= '<tr>';  
            foreach($arrpic as $pic)
                $tabl .= "<td>$pic</td>";     
            $tabl .= '</tr>';

            $tabl .= '<tr>'; 
            foreach($temperature as $temp)
                $tabl .= "<td>$temp</td>"; 
            $tabl .= '</tr>';
        $tabl .= '</table>';

        return view('home',compact('tabl'));
    }
}
