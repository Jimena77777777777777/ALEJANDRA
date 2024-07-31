@extends('layouts.panel')

@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Trabajos</h3>
                </div>

                
                <div class="col text-right">
                    <a href="{{ url('trabajos/create') }}" class="btn btn-sm btn-primary">Nueva tarea o trabajo </a>
                </div>
            </div>
        </div>


        <div class="card-body">
            @if (session('notification'))
                <div class="alert alert-success" role="alert">
                    {{ session('notification') }}
                </div>


                @endif
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Tarea</th>
                            <th scope="col">Tiempo para realizar</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>


@endsection