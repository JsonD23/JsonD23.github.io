@extends('layouts.app')
@section('content')

<h1 class="mb-5 text-center" style="font-size: 3rem; color: white;">Vacantes - Counting Stars - 2024</h1>

<div class="row justify-content-center">
    
    <div class="col-md-8">
        <form action="{{ route('vacancies.store') }}" method="POST" class="p-4 border rounded shadow-lg">
            @csrf
            <h2 class="mb-4 text-center" style="font-size: 2.5rem; color: #14b8a6;">Agregar Vacante</h2>
            
        

            <div class="form-group">
                <label for="title" class="font-weight-bold" style="color: #14b8a6;">Título</label>
                <input type="text" name="title" id="title" class="form-control text-center" required
                    style="border: 2px solid #14b8a6; border-radius: 10px; padding: 15px;">
            </div>

            <!-- Descripción -->
            <div class="form-group mt-4">
                <label for="description" class="font-weight-bold" style="color: #14b8a6;">Descripción</label>
                <textarea name="description" id="description" class="form-control text-center" rows="4" required
                    style="border: 2px solid #14b8a6; border-radius: 10px; padding: 15px;"></textarea>
            </div>

            <!-- Fecha de Publicación -->
            <div class="form-group mt-4">
                <label for="date" class="font-weight-bold" style="color: #14b8a6;">Fecha de Publicación</label>
                <input type="date" name="date" id="date" class="form-control text-center" required
                    style="border: 2px solid #14b8a6; border-radius: 10px; padding: 15px;">
            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn btn-lg" 
                    style="background-color:#14b8a6; border-radius: 30px; padding: 10px 40px; font-size: 1.2rem; transition: all 0.3s ease;">
                    Agregar Vacante
                </button>
            </div>
                
            <div class="text-center mt-5">
                <a href="{{ url('/index') }}" class="btn btn-success" style="background-color: #10b981; border-color: #0f766e; color: white; border-radius: 25px; padding: 15px 30px; font-size: 18px;">
                    Regresar
                </a>
            </div>
        </form>
    </div>

    <br><br>

    <!-- Formulario de búsqueda alineado a la derecha dentro del mismo contenedor -->
    <div class="col-md-4 d-flex justify-content-center align-items-center">
        <form action="{{ route('vacancies.index') }}" method="GET" class="d-flex justify-content-center w-100">
            <div class="input-group" style="width: 100%;">
                <input type="text" name="search" class="form-control rounded-pill text-center" placeholder="Buscar por título" value="{{ request('search') }}"
                    style="border: 2px solid #14b8a6; padding: 10px; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);">
                <div class="input-group-append">
                    <button class="btn shadow" style="background-color: #14b8a6; border-radius: 30px; padding: 10px 25px; font-size: 1rem; transition: all 0.3s ease;" type="submit">
                        Buscar
                    </button>
                </div>
            </div>
        </form>
    </div>

    <br><br>

    <div class="row justify-content-center">
        <div class="col-md-10">
            @if($vacancies->isNotEmpty())
                <div class="table-responsive">
                    <table class="table table-hover table-bordered shadow-lg mx-auto" style="width: 100%; background-color: #f8f9fa;">
                        <thead class="thead-dark text-center">
                            <tr style="background-color: #14b8a6; color: white;">
                                <th>ID</th>
                                <th>Título</th>
                                <th>Descripción</th>
                                <th>Fecha de Publicación</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vacancies as $vacancy)
                                <tr class="align-middle text-center">
                                    <td>{{ $vacancy->id }}</td>
                                    <td>{{ $vacancy->title }}</td>
                                    <td>{{ $vacancy->description }}</td>
                                    <td>{{ $vacancy->date }}</td>
                                    <td>
                                        <form action="{{ route('vacancies.destroy', $vacancy->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm rounded-pill" style="background-color: #14b8a6; color: white; border: none;">
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-warning text-center" role="alert">
                    No hay vacantes disponibles.
                </div>
            @endif
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
