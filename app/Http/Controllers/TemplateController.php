<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\homepage;

class TemplateController extends Controller
{
    public function index(){
        
        return view('Frontend.homepage');
    }
}
