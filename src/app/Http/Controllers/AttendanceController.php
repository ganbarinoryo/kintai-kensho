<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AttendanceController extends Controller
{
    public function attendance()
    {
        return view('attendance') ;
    }
}
