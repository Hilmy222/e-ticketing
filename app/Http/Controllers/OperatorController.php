<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index ()
    {
        return view ('operator.index');
    }
    public function create ()
    {
        return view ('operator.create');
    }
    public function show ()
    {
        return view ('operator.show');
    }
}
