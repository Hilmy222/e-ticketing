<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventOrganizerController extends Controller
{
    public function index ()
    {
        return view ('event-organizer.eo.index');
    }
    public function create ()
    {
        return view ('event-organizer.eo.create');
    }
    public function show ()
    {
        return view ('event-organizer.eo.show');
    }
    public function login ()
    {
        return view ('event-organizer.login');
    }
}
