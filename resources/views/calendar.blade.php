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

    .form-container {
        margin-bottom: 20px;
        background-color: #1f2937; /* Fondo del formulario */
        padding: 20px;
        border-radius: 10px; /* Bordes redondeados */
    }

    .form-header {
        margin-bottom: 20px;
        color: #14b8a6; /* Color del encabezado */
    }

    .btn-primary {
        background-color: #10b981; 
        border-color: #0f766e; 
        color: white; 
        border-radius: 25px; 
        padding: 15px 30px; 
        font-size: 18px;
        width: 100%; /* Botón a ancho completo */
    }

    .text-danger {
        margin-top: 10px; /* Espacio para el mensaje de error */
    }
</style>

<div class="container mt-4">
    <h1 class="text-center" style="color: #14b8a6;">Calendario de Entrevistas</h1>
    <h1 class="text-center" style="color: white;">Counting Stars</h1>
    <div class="row justify-content-center mt-4">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body form-container">

                    <!-- Formulario para agregar entrevistas -->
                    <div class="form-header">
                        <h5>Agregar Nueva Entrevista</h5>
                    </div>
                    <form action="{{ route('interviews.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="date" class="text-white">Fecha de la Entrevista</label>
                            <input type="date" id="date" name="date" class="form-control" required min="{{ date('Y-m-d') }}">
                            @error('date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description" class="text-white">Descripción de la Entrevista</label>
                            <input type="text" name="description" class="form-control" placeholder="Descripción de la entrevista" required>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar Entrevista</button>
                    </form>

                    <div class="table-responsive mt-4">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th>Domingo</th>
                                    <th>Lunes</th>
                                    <th>Martes</th>
                                    <th>Miércoles</th>
                                    <th>Jueves</th>
                                    <th>Viernes</th>
                                    <th>Sábado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    // Obtener el mes y el año actual
                                    $month = date('m');
                                    $year = date('Y');

                                    // Obtener el primer día del mes y el número de días en el mes
                                    $firstDay = strtotime("$year-$month-01");
                                    $daysInMonth = date('t', $firstDay);

                                    // Obtener el índice del primer día (0=domingo, 6=sábado)
                                    $firstDayIndex = date('w', $firstDay);

                                    // Obtener las entrevistas de la sesión
                                    $interviews = session('interviews', []);
                                @endphp

                                @for ($i = 0; $i < 6; $i++) {{-- Seis filas para el calendario --}}
                                    <tr>
                                        @for ($j = 0; $j < 7; $j++) {{-- Siete columnas para los días de la semana --}}
                                            @php
                                                $day = $i * 7 + $j - $firstDayIndex + 1; // Calcular el día actual
                                            @endphp

                                            <td>
                                                @if ($day > 0 && $day <= $daysInMonth)
                                                    <div>
                                                        <strong>{{ $day }}</strong>
                                                        {{-- Mostrar entrevistas de este día --}}
                                                        @foreach ($interviews as $interview)
                                                            @if (date('j', strtotime($interview['date'])) == $day)
                                                                <div class="event">
                                                                    <span class="text-success">{{ $interview['description'] }}</span>
                                                                    <form action="{{ route('interviews.destroy', $interview['id']) }}" method="POST" style="display:inline;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-link text-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta entrevista?')">Eliminar</button>
                                                                    </form>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </td>
                                        @endfor
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 text-center">
        <a href="{{ url('/index') }}" class="btn btn-success" style="background-color: #10b981; border-color: #0f766e; color: white; border-radius: 25px; padding: 15px 30px; font-size: 18px;">
            Regresar
        </a>
    </div>
</div>

{{ view('layouts.footer') }}
