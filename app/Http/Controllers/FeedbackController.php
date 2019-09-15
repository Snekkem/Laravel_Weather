<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;


class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function leaveFeedback() {
        return view('feedback');
    }

    public function insertData() {

        $feed = Review::create(array(
            'name'  => 'Laravel - замечателен!',
            'email' => 'Джейсон',
            'message'   => 'Laravel очень удобен - используйте его, если вы ещё этого не делаете!'
          ));
    }
}
