<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
// use Illuminate\Support\Facades\Session;
use App\Models\Personas;
// use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('pages.user-profile');
        
    }

    public function update(Request $request,$id)
    {
        // dd($request);

        // $attributes = $request->validate([
        //     'username' => ['required','max:255', 'min:2'],
        //     'firstname' => ['max:100'],
        //     'lastname' => ['max:100'],
        //     'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
        //     'address' => ['max:100'],
        //     'city' => ['max:100'],
        //     'country' => ['max:100'],
        //     'postal' => ['max:100'],
        //     'about' => ['max:255']
        // ]);
// actualizar  $request en la tabla persona
        // auth()->user()->update([
        //     'username' => $request->get('username'),
        //     'firstname' => $request->get('firstname'),
        //     'lastname' => $request->get('lastname'),
        //     'email' => $request->get('email') ,
        //     'address' => $request->get('address'),
        //     'city' => $request->get('city'),
        //     'country' => $request->get('country'),
        //     'postal' => $request->get('postal'),
        //     'about' => $request->get('about')
        // ]);
        $datosUsuario = request()->except(['_token','_method']);
        Personas::where('id','=',$id)->update($datosUsuario);

        return back()->with('succes', 'Perfil actualizado exitosamente');
    }
}
