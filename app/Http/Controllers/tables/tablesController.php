<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tablesController extends Controller
{
    public function index()
 {
    return view('pages.tables');
 }
 public function store(Request $request)
 {
    $datosConcepto= request()->except('_token');
    // return view('pages.tables');
 }
}
