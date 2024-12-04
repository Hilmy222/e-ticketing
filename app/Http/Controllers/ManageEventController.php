<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageEventController extends Controller
{
    public function index ()
    {
        return view ('event-organizer.manage-events.index');
    }
    public function createStep1 ()
    {
        return view ('event-organizer.manage-events.create.step1');
    }
    public function createStep2 ()
    {
        return view ('event-organizer.manage-events.create.step2');
    }
    public function createStep3 ()
    {
        return view ('event-organizer.manage-events.create.step3');
    }
    public function show ()
    {
        return view ('event-organizer.manage-events.show');
    }
}
