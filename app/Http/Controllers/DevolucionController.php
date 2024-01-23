<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevolucionController extends Controller
{
    public function index()
 {
    return view('pages.devolucion');
 }
 public function store(Request $request)
 {
    $datosConcepto= request()->except('_token');

 }
}
