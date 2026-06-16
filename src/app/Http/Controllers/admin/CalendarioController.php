<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    public function indexCalendario()
    {
        return view('admin.calendario.index');
    }
}
