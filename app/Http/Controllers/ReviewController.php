<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function printReviews() {

        $task = \App\Review::SimplePaginate(10);
        return view('review', compact('task'));
    }
}
