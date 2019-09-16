<?php

namespace App\Http\Controllers;
use App\Http\Requests\ReviewRequest;
use Illuminate\Http\Request;
use App\Review;


class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function leaveFeedback() {
        return view('/feedback');
    }

    public function insertData(ReviewRequest $request) {

        $feed = new Review;
        $feed->name = $request['name'];
        $feed->email = $request['email'];
        $feed->message = $request['message'];
        $feed->save();

        return redirect('/feedback');
    }
}
