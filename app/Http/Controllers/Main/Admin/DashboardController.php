<?php

namespace App\Http\Controllers\Main\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('main.admin.dashboard');
    }
}
