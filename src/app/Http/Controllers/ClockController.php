<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clocks;

class ClockController extends Controller
{
    public function store(Request $request)
    {
        $clock = $request->only('clock_in', 'clock_out');
            Clocks::create($clock);
            return view('stamp');
    }
}
