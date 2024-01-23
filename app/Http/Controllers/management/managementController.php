<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class managementController extends Controller
{
    public function index()
    {
       return view('pages.user-management');
    }
}
