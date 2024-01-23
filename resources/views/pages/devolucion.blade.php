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
    </div>
    @include('layouts.footers.auth.footer')
        
</div>
@endsection


</div>