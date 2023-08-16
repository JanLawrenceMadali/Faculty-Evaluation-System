<?php

namespace App\Http\Controllers\Main\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentRaterFormController extends Controller
{
    public function index()
    {
        return view('main.students.student-rater-form');
    }
}
