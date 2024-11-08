@extends('layouts.app')

@section('content')

<br>

<div class="container mt-4 text-center">
    <a href="{{ url('/index') }}" class="btn btn-success" style="background-color: #10b981; border-color: #0f766e; color: white; border-radius: 25px; padding: 15px 30px; font-size: 18px;">
       Regresar
    </a>
</div>
<br>


<div class="container mt-4 text-center">
    <form onsubmit="event.preventDefault();" class="form-inline justify-content-center">
        <input type="text" id="search" class="form-control" placeholder="Buscar vacante por título..." onkeyup="filterTable()">
        <button type="button" onclick="filterTable()" class="btn" style="background-color: #2ecc71; border-color: #27ae60; color: white; border-radius: 200px; padding: 12px 24px; font-size: 16px;">Buscar</button>
        <button type="button" onclick="showAll()" class="btn" style="background-color: #2ecc71; border-color: #f39c12; color: white; border-radius: 200px; padding: 12px 24px; font-size: 16px;">Mostrar Todos</button>
    </form>
</div>


<div class="row justify-content-center mt-3">
    <div class="col-md-12">
        @if($vacancies->isNotEmpty())
            <div class="table-responsive">
                <table id="vacancyTable" class="table table-hover table-bordered shadow-lg mx-auto" style="width: 100%;">
                    <thead class="thead-light text-center">
                        <tr style="background-color: #007bff; color: white;">
                            <th>ID</th>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Fecha de Publicación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vacancies as $vacancy)
                            <tr class="align-middle text-center" style="transition: background-color 0.3s;">
                                <td>{{ $vacancy->id }}</td>
                                <td>{{ $vacancy->title }}</td>
                                <td>{{ $vacancy->description }}</td>
                                <td>{{ \Carbon\Carbon::parse($vacancy->date)->format('d-m-Y') }}</td>
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

<style>

    .table {
        border-collapse: separate;
        border-spacing: 0 15px;
    }

    .table th, .table td {
        padding: 15px;
        vertical-align: middle;
        border: none;
        color: white;
    }

    .table th {
        background-color: #10b981;
        color: white;
    }

    .table tbody tr:hover {
        background-color: #2dd4bf;
        color: #164e63;
    }
</style>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function filterTable() {
        const searchInput = document.getElementById("search").value.toLowerCase();
        const rows = document.querySelectorAll("#vacancyTable tbody tr");

        rows.forEach(row => {
            const titleCell = row.cells[1]; 
            if (titleCell.textContent.toLowerCase().includes(searchInput) && searchInput) {
                row.style.display = ""; 
            } else {
                row.style.display = "none"; 
            }
        });
    }

    function showAll() {

        const rows = document.querySelectorAll("#vacancyTable tbody tr");
        rows.forEach(row => {
            row.style.display = ""; 
        });
        
       
        document.getElementById("search").value = "";
    }
</script>

@endsection
