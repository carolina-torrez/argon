@extends('layouts.app')

@section('content')

    <style>
        body {
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100vh;
          margin: 0;
        }
    
        .centrado {
          text-align: center;
          
        }
      </style>
    <main class="main-content  mt-0">
        <section>
            
            <div class="page-header min-vh-180">
                <div class="container">
                    
                    <div class="row">
                         <div>
                            <img src="{{ asset('img-hdb/hdb3.jpg') }}" width="300px" style="position: relative;">
                           
                        </div>
                        <h3>Sistema de Caja Chica</h3>

                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">

                            <div class="card card-plain">
                                
                                <div class="card-header pb-0 text-start">
                                   
                                    <h4 class="font-weight-bolder">Bienvenido!😎</h4>
                                    <p class="mb-0">Introduzca sus credenciales</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('login.perform') }}">
                                        @csrf
                                        @method('post')
                                        <div class="flex flex-col mb-3">
                                            <input type="text" name="email" class="form-control form-control-lg" value="" placeholder="Ingresar Usuario" aria-label="Email">
                                            @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        
                                        
                                        
                                        
                                        
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="password" name="password" class="form-control form-control-lg" aria-label="Password" value="" placeholder="Ingresar Contraseña" >
                                            @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>

                                        
                                        
                                        {{-- <div class="form-check form-switch">
                                            <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div> --}}
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Iniciar Sesión</button>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                        {{-- <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('img-hdb/hdb1.jpg'); height: 60%;
              background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-6"></span>
                                {{-- <h4 class="mt-1 text-white font-weight-bolder position-relative">Bienvenido al Sistema de Caja Chica</h4> --}}
                                

                                {{-- <p class="mb-8 text-white position-relative">El Sistema de Caja Chica te permite gestionar tus transacciones financieras de manera eficiente.</p>
                            </div>
                        </div> --}} 
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
