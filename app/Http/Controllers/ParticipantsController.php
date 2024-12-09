<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipantsController extends Controller
{
    public function index ()
    {
        return view ('event-organizer.participants.index');
    }
    public function create ()
    {
        return view ('event-organizer.participants.create');
    }
    public function show ()
    {
        return view ('event-organizer.participants.show');
    }
}
