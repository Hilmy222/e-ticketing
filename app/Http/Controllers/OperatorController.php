<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index ()
    {
        return view ('event-organizer.operator.index');
    }
    public function create ()
    {
        return view ('event-organizer.operator.create');
    }
    public function show ()
    {
        return view ('event-organizer.operator.show');
    }
}
