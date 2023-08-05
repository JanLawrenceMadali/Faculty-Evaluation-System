<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeerRaterController extends Controller
{
    public function index()
    {
        return view('livewire.form.peer-rater');
    }
}
