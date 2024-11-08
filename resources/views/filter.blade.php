{{ view('layouts.header') }} 

<style>
    body {
        background-color: #083344; 
        margin: 0; 
        height: 100vh; 
        display: flex;
        justify-content: center; 
        align-items: center; 
    }

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

<div class="container mt-4">
    <h2 class="text-center" style="color: #14b8a6;">Filtrar Perfiles</h2>
    <br>
    <form action="{{ route('user.profile.filter') }}" method="GET" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="profile_title" class="form-control" placeholder="Buscar por título" value="{{ request()->get('profile_title') }}">
            </div>
            <div class="col-md-4">
                <input type="text" name="first_name" class="form-control" placeholder="Buscar por nombre" value="{{ request()->get('first_name') }}">
            </div>
            <div class="col-md-4">
                <input type="text" name="id" class="form-control" placeholder="Buscar por ID" value="{{ request()->get('id') }}">
            </div>
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-success" style="background-color: #10b981; border-color: #0f766e; color: white; border-radius: 25px; padding: 15px 30px; font-size: 18px;">
                Filtrar
            </button>
        </div>
        <br>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered table-striped shadow-lg">
            <thead class="thead-light">
                <tr style="background-color: #007bff; color: white;">
                    <th>ID</th>
                    <th>Título</th>
                    <th>Nombre</th>
                   
             
             
                </tr>
            </thead>
            <tbody>
                @foreach ($users_data as $user)
                    <tr class="align-middle text-center" style="transition: background-color 0.3s;">
                        <td class="text-white">{{ $user->id }}</td>
                        <td class="text-white">{{ $user->profile_title }}</td>
                        <td class="text-white">{{ $user->first_name }} {{ $user->last_name }}</td>
                      
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="container mt-4 text-center">
        <a href="{{ url('/index') }}" class="btn btn-success" style="background-color: #10b981; border-color: #0f766e; color: white; border-radius: 25px; padding: 15px 30px; font-size: 18px;">
            Regresar
        </a>
    </div>
</div>

{{ view('layouts.footer') }}
