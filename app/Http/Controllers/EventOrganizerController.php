<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventOrganizerController extends Controller
{
    public function index ()
    {
        return view ('eo.index');
    }
    public function create ()
    {
        return view ('eo.create');
    }
    public function show ()
    {
        return view ('eo.show');
    }
    public function login ()
    {
        return view ('login');
    }
}
