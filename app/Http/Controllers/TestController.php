<?php

namespace EddiesBlog\Http\Controllers;
use Illuminate\Http\Request;
use EddiesBlog\Http\Requests;
use EddiesBlog\Http\Controllers\Controller;

class TestController extends Controller
{
    //
    public function index()
    {
	    echo "<br />Test Controller.";
    }
}
