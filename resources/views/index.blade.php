{{ view('layouts.header') }}

<div class="content-wrapper mt-4">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <h1 class="m-0" style="color: #607D8B;">Manejo de Cv´s - Counting Stars</h1>
                </div>
                <div class="col-4 text-right d-flex justify-content-end align-items-center">
                    <a href="{{ route('vacancies.index') }}"  onclick="promptVacante()"  class="add-btn mx-2 d-flex flex-column align-items-center">
                        <i class="fa fa-briefcase" style="color: #14b8a6;"></i>
                        <span style="color: #083344;">Agregar Vacantes</span>
                    </a>
                    <a href="{{ route('vacancies.show') }}" class="add-btn mx-2 d-flex flex-column align-items-center">
                        <i class="fa fa-briefcase" style="color: #14b8a6;"></i>
                        <span style="color: #083344;">Consultar Vacantes</span>
                    </a>
                    <a href="{{ route('user.profile.create') }}" class="add-btn mx-2 d-flex flex-column align-items-center">
                        <i class="fa fa-user-plus" style="color: #14b8a6;"></i>
                        <span style="color: #083344;">Agregar nuevo</span>
                    </a>
                    <a href="#" onclick="promptPassword()" class="add-btn mx-2 d-flex flex-column align-items-center">
                        <i class="fa fa-calendar" style="color: #14b8a6;"></i>
                        <span style="color: #083344;">Calendario de Entrevistas</span>
                    </a>
                    <script>
                        function promptPassword() {
                            var password = prompt("Por favor, ingrese la contraseña:");
                            var correctPassword = "enterprisecalendar";

                            if (password === correctPassword) {
                                window.location.href = "{{ route('user.profile.calendar') }}";
                            } else {
                                alert("Contraseña incorrecta");
                            }
                        }
                    </script>

                    <a href="#" onclick="promptFilterPassword()" class="add-btn mx-2 d-flex flex-column align-items-center">
                        <i class="fa fa-filter" style="color: #14b8a6;"></i>
                        <span style="color: #083344;">Filtrar</span>
                    </a>
                    <script>
                        function promptFilterPassword() {
                            var password = prompt("Por favor, ingrese la contraseña para acceder ");
                            var correctPassword = "enterprisefilter"; 

                            if (password === correctPassword) {
                                window.location.href = "{{ route('user.profile.filter') }}";
                            } else {
                                alert("Contraseña incorrecta");
                            }
                        }
                    </script>

<script>
                        function promptVacante() {
                            var password = prompt("Por favor, ingrese la contraseña para acceder ");
                            var correctPassword = "enterprisevacante"; 

                            if (password === correctPassword) {
                                window.location.href = "{{ route('vacancies.index') }}";
                            } else {
                                alert("Contraseña incorrecta");
                            }
                        }
                    </script>

                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ul class="page-breadcrumb breadcrumb">
                        <li class="breadcrumb-item"><i class="fas fa-angle-right" style="color: #14b8a6;"></i></li>
                        <li class="breadcrumb-item" style="color: #14b8a6;">Home</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title" style="color: #14b8a6;">Perfiles de Usuario</h3>
                    </div>
                    <div class="card-body">
                        <table id="user_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Foto de perfil</th>
                                    <th>Título</th>
                                    <th>Nombre(s)</th>
                                    <th>Apellidos</th>
                                    <th>Email</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($users_data as $user)
                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td>
                                            <img class="profile box-image-preview img-fluid img-circle elevation-2" src="{{ isset($user['personal_info']['image_path']) && !empty($user['personal_info']['image_path']) ? asset('assets/images/'. $user['personal_info']['image_path'])  : asset('assets/images/user-thumb.jpg') }}"
                                            alt="" style="height:40px; width:40px;" />
                                        </td>
                                        <td>{{ $user['personal_info']['profile_title'] }}</td>
                                        <td>{{ $user['personal_info']['first_name'] }}</td>
                                        <td>{{ $user['personal_info']['last_name'] }}</td>
                                        <td>{{ $user['contact_info']['email'] }}</td>
                                        <td align="center">
                                            <div class="d-flex flex-row justify-content-around">
                                                <a class="view_btn" href="{{ route('user.profile.view', $user['personal_info']['id']) }}" title="Plantilla 1">
                                                    <i class="fas fa-eye" style="color: #14b8a6;"></i>
                                                </a>
                                                <a class="view_btn" href="{{ route('user.profile.viewdos', $user['personal_info']['id']) }}" title="Plantilla 2">
                                                    <i class="fas fa-eye" style="color: #14b8a6;"></i>
                                                </a>
                                                <a class="view_btn" href="{{ route('user.profile.viewset', $user['personal_info']['id']) }}" title="Plantilla 3">
                                                    <i class="fas fa-eye" style="color: #14b8a6;"></i>
                                                </a>
                                                <a class="edit_btn" href="{{ route('edit', $user['personal_info']['id']) }}" title="Edit Profile">
                                                    <i class="fas fa-edit" style="color: #14b8a6;"></i>
                                                </a>
                                                <form action="{{ route('destroy', $user['personal_info']['id']) }}" method="post" class="d-inline" id="delete-form-{{ $user['personal_info']['id'] }}">
                                                    @csrf
                                                    <a href="javascript:void(0)" onclick="promptDeletePassword({{ $user['personal_info']['id'] }})" class="del_btn" title="Borrar perfil">
                                                        <i class="fas fa-user-minus text-danger"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" onclick="promptEmailPassword('{{ $user['contact_info']['email'] }}', '{{ $user['personal_info']['profile_title'] }}', '{{ $user['personal_info']['first_name'] }}', '{{ $user['personal_info']['last_name'] }}')" 
   class="hire_btn" 
   title="Contratar">
    <i class="fas fa-user-check" style="color: #14b8a6;"></i>
</a>


                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @php
                                        $count++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 text-center">
    <a href="http://127.0.0.1:8000/" class="btn btn-primary" style="background-color: #14b8a6; border-color: #083344;">Ir a la página principal</a>
</div>

<script>
    function promptDeletePassword(userId) {
        var password = prompt("Por favor, ingrese la contraseña para eliminar el perfil:");

        var correctPassword = "enterprisedelete";

        if (password === correctPassword) {
            document.getElementById("delete-form-" + userId).submit(); 
        } else {
            alert("Contraseña incorrecta");
        }
    }
</script>




<script>

    function promptEmailPassword(email, title, firstName, lastName) {
        var password = prompt("Por favor, ingrese la contraseña para enviar el correo:");
        var correctPassword = "enterprisemail"; // Define aquí la contraseña correcta

        if (password === correctPassword) {
            // Construir el enlace mailto
            var mailtoLink = `mailto:${email}?subject=Oferta%20de%20Contratación%20para%20${encodeURIComponent(title)}%20de%20COUNTING_STARS&body=Estimado%20${encodeURIComponent(firstName)}%20${encodeURIComponent(lastName)},%0A%0A
            Nos%20complace%20informarle%20que%20ha%20sido%20seleccionado%20para%20el%20puesto%20de%20${encodeURIComponent(title)}.%0A
            Por%20favor,%20contáctenos%20para%20los%20siguientes%20pasos.`;

            // Redirigir al enlace mailto
            window.location.href = mailtoLink;
        } else {
            alert("Contraseña incorrecta");
        }
    }
</script>

</body>
</html>

{{ view('layouts.footer') }}
