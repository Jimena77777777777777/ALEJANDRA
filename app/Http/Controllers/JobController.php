<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{

    public function __construct()
    {
        $this-> middleware('auth');
        
    }

    public function index()
    {
        
        return view('jobs.index');
    }

    public function create(){
        return view('jobs.create');
    }
}
