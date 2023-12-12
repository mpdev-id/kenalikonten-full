<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    function index() {
        return view("FE.index");
    }
    function valid() {
        return view("FE.valid");
    }
    function donatur() {
        return view("FE.donatur");
    }
    function team() {
        return view("FE.team");
    }
}
