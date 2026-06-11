<?php

namespace App\Http\Controllers;

use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with('cafeteria')->get();

        return view('schedules', compact('schedules'));
    }
}