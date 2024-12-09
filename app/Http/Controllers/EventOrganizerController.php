<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventOrganizerController extends Controller
{
    public function index ()
    {
        return view ('admin.event-organizer.index');
    }
    public function create ()
    {
        return view ('admin.event-organizer.create');
    }
    public function show ()
    {
        return view ('admin.event-organizer.show');
    }
    public function login ()
    {
        return view ('admin.event-organizergin');
    }
}
