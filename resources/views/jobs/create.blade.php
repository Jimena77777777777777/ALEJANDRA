@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Nueva tarea</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('/trabajos') }}" class="btn btn-sm btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                    </svg>
                    Regresar
                </a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form action="{{ url('/trabajos') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre de la tarea</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <input type="text" name="description" class="form-control" value="{{ old('description') }}">
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
        </form>
    </div>
</div>

<div class="card-body">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <strong>Por favor!</strong> {{ $error }}
            </div>
        @endforeach
    @endif
</div>
@endsection
