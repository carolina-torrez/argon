<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FondosCustodiaController extends Controller
{
    public function index()
 {
    return view('pages.fondos-custodia');
 }
 public function store(Request $request)
 {
    $datosConcepto= request()->except('_token');
    // return view('pages.tables');
 }
}
