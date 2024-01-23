<?php

namespace App\Http\Controllers\billing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class billingController extends Controller
{
 public function index()
 {
    return view('pages.billing');
 }
}
