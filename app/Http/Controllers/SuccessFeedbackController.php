<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessFeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function printThanks() {
        return view('success-feedback');
    }
}
