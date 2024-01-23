<?php

namespace App\Http\Controllers\profileStatic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profileStaticController extends Controller
{
    public function index()
 {
    return view('pages.profile-static');
 }
}
