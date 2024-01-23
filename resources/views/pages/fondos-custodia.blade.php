@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('page-script')
    <script src="{{ asset('assets/js/ui-modals.js') }}"></script>
@endsection

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tablas'])
    <style>
        .button-container {
            margin-right: 10px;
        }
    </style>
    <div class="container-fluid py-4">
        
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <form role="form" method="POST" action={{ route('profile.update',$persona->id) }} enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card-header pb-0">
                                <div style="text-align: center;">
                                    <p class="mb-2">FORMULARIO FONDOS EN CUSTODIA</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-1">REGISTRO DE DATOS FAMILIAR DEL PACIENTE</p>
                                </div>
                            </div>
                            
                            <div class="card-body">
                               
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">CI</label>
                                            <input class="form-control" type="text" name="ci">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Extensión</label>
                                            <input class="form-control" type="text" name="extension">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nombres</label>                                     
                                            <input class="form-control" type="text" name="nombres">
                                        </div>
    
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Apellidos</label>
                                            <input class="form-control" type="text" name="apellidos">
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Parentesco</label>
                                            <input class="form-control" type="text" name="parentesco">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Celular</label>
                                            <input class="form-control" type="text" name="celular">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Direccion</label>
                                            <input class="form-control" type="text" name="direccion">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Importe de Garantia</label>
                                            <input class="form-control" type="text" name="direccion">
                                        </div>
                                    </div>
                                
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button type="submit" class="btn btn-primary btn-md button-container">Guardar</button>
                                        <button type="submit" class="btn btn-danger btn-md">Cancelar</button>
                                    </div>  
                                
                                </div>
                                
                              
                                <hr class="horizontal dark">
                                    
                                        <p class="text-uppercase text-sm">INFORMACION DEL PACIENTE</p>
                                            
                                            <hr class="horizontal dark">

                                            <div class="container">
                                            
                                
                                            
                                                <div class="row">
                                            
                                                <div class="col-md-12">
                                            
                                                    <form action="" method="GET">

                                                        <div class="form-group">
                                                            <label for="tipo_busqueda" class="form-control-label">Selecciona el tipo de búsqueda:</label>
                                                            <select class="form-control-sm" name="tipo_busqueda" id="tipo_busqueda">
                                                                <option value="ficha_internacion">Ficha de Internación</option>
                                                                <option value="consulta_externa">Consulta Externa</option>
                                                            </select>
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="texto_busqueda" class="form-control-label">Texto de Búsqueda:</label>
                                                            <input class="form-control-sm" type="text" name="texto_busqueda" value="{{ old('texto_busqueda') }}">
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary">Buscar</button>
                                                            <button type="submit" class="btn btn-secondary">Cancelar</button>
                                                        </div>
                                                    
                                                    </form>
                                                    

                                                </div>
                                            
                                                </div>
                                            
                                            </div>
                                            
                                            
 
                                    </div>
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        
                    </div>    
            </div>
            @include('layouts.footers.auth.footer')
        
        </div>
    @endsection

     
    </div>