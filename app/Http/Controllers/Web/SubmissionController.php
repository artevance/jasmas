<?php

namespace App\Http\Controllers\Web;

use App\Foundation\Http\Controller;

class SubmissionController extends Controller
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.submission');
    }
}
