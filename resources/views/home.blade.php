@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5">
    <h1 class="text-5xl pt-24 font-bold text-center" style="color: #14b8a6;">COUNTING STARS</h1>
    <p class="mt-4 pt-24 font-bold text-white text-3xl leading-relaxed">
        ¡Bienvenido a COUNTING STARS!<br><br>

        Nos complace que hayas llegado a nuestro sitio, donde facilitamos la gestión de currículums y el proceso de contratación. 
        En COUNTING STARS, nuestro objetivo es ofrecerte las mejores herramientas para optimizar tu búsqueda de talento o tu propio camino profesional. 
        Ya sea que busques crear un currículum impactante o encontrar la oportunidad laboral que siempre has deseado, ¡estamos aquí para ayudarte a brillar!<br><br>

        Explora nuestros servicios y descubre cómo podemos acompañarte en cada paso del proceso. 
    </p>
    <p class="mt-4 pt-24 font-bold text-white text-3xl text-center leading-relaxed">
        ¡Tu futuro empieza ahora, con COUNTING STARS!
    </p>
    <br><br>


    <!-- Carrusel de imágenes -->
    <div id="carouselExample" class="relative">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!-- Item 1 -->
            <div class="carousel-item active relative float-left w-full">
                <img src="{{ asset('images/curri3.jpeg') }}" class="w-full max-w-[1847px] max-h-[95px] h-auto object-cover mx-auto" alt="Vista general">
            </div>
            <!-- Item 2 -->
            <div class="carousel-item relative float-left w-full">
                <img src="{{ asset('images/curri2.jpeg') }}" class="w-full max-w-[1847px] max-h-[95px] h-auto object-cover mx-auto" alt="Curriculum tipo 2">
            </div>
            <!-- Item 3 -->
            <div class="carousel-item relative float-left w-full">
                <img src="{{ asset('images/curri.jpeg') }}" class="w-full max-w-[1847px] max-h-[95px] h-auto object-cover mx-auto" alt="Curriculum tipo 3">
            </div>
        </div>

        <button class="absolute top-0 bottom-0 left-0 flex items-center justify-center px-4 text-white bg-black bg-opacity-50 hover:bg-opacity-75 w-16 h-full" id="prevBtn" style="z-index: 10;">
            <span class="text-2xl">&lt;</span>
        </button>
        <button class="absolute top-0 bottom-0 right-0 flex items-center justify-center px-4 text-white bg-black bg-opacity-50 hover:bg-opacity-75 w-16 h-full" id="nextBtn" style="z-index: 10;">
            <span class="text-2xl">&gt;</span>
        </button>
    </div>
</div>

<br><br>

<div class="container mx-auto mt-5">
    <h2 class="text-4xl font-bold text-center text-white" style="color: #14b8a6;">¿Por qué elegir COUNTING STARS?</h2>
    <ul class="mt-4 pt-24 font-bold text-white text-3xl leading-relaxed">
        <li>✅ Fácil de usar: Crear tu currículum nunca fue tan sencillo con nuestras plantillas personalizables.</li>
        <li>✅ Acceso a oportunidades laborales: Al crear tu curriculum con nosotros la empresa a la que postules podrá tener acceso a tu curriculum de manera instantánea.</li>
        <li>✅ Protección de datos personales: Tu información está segura con nosotros.</li>
        
    </ul>
</div>
<br>
<br>

<div class="container mx-auto mt-10 px-4">
    <h2 class="text-4xl font-bold text-center text-white" style="color: #14b8a6;">Lo que dicen nuestros usuarios</h2>
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Testimonio 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:scale-105 transform transition-all duration-300 ease-in-out">
            <img src="{{ asset('images/ivan.png') }}" alt="Juan Pérez" class="w-24 h-24 mx-auto rounded-full border-4 border-[#14b8a6] mb-4 transition-all duration-300 ease-in-out hover:border-[#14b8a6]">
            <p class="text-xl font-semibold text-gray-800 mb-4"><i>"Gracias a COUNTING STARS, pude crear un currículum impresionante que me ayudó a conseguir mi trabajo soñado. ¡Altamente recomendado!"</i></p>
            <p class="text-lg font-medium text-gray-600">- <strong>Juan Pérez</strong></p>
        </div>
        <!-- Testimonio 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:scale-105 transform transition-all duration-300 ease-in-out">
            <img src="{{ asset('images/ana.jpg') }}" alt="Ana Gómez" class="w-24 h-24 mx-auto rounded-full border-4 border-[#14b8a6] mb-4 transition-all duration-300 ease-in-out hover:border-[#14b8a6]">
            <p class="text-xl font-semibold text-gray-800 mb-4"><i>"Una plataforma fácil de usar y con una gran variedad de plantillas. ¡Mi CV nunca había lucido tan profesional!"</i></p>
            <p class="text-lg font-medium text-gray-600">- <strong>Ana Gómez</strong></p>
        </div>
        <!-- Testimonio 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:scale-105 transform transition-all duration-300 ease-in-out">
            <img src="{{ asset('images/alex.jpeg') }}" alt="Alexa Morgan" class="w-24 h-24 mx-auto rounded-full border-4 border-[#14b8a6] mb-4 transition-all duration-300 ease-in-out hover:border-[#14b8a6]">
            <p class="text-xl font-semibold text-gray-800 mb-4"><i>"Recomiendo COUNTING STARS a todos los que buscan mejorar su currículum de forma profesional y efectiva."</i></p>
            <p class="text-lg font-medium text-gray-600">- <strong>Carlos Ramírez</strong></p>
        </div>
    </div>
</div>


<br>
<br>
<br>
<br>
<!-- Sección de Términos y Condiciones -->
<img src="{{ asset('images/logoC.jpeg') }}" style="display: block; margin: 0 auto; width: 500px; height: 500px;">
<br>
<div class="container mx-auto mt-5">
    <h2 class="text-5xl  font-bold text-center text-white " style="color: #14b8a6;">Términos y Condiciones</h2>
    <br>
    <p class="mt-4 font-bold text-white text-2xl leading-relaxed">
        Al utilizar nuestros servicios en COUNTING STARS, aceptas los siguientes términos y condiciones. Te recomendamos leerlos detenidamente.
        <br><br>
        1. **Uso de la plataforma**: La plataforma está destinada a la creación y gestión de currículums. No debe ser utilizada para actividades ilegales o que infrinjan derechos de propiedad intelectual.
        <br><br>
        2. **Responsabilidad**: No nos hacemos responsables por la exactitud, completitud o fiabilidad de la información proporcionada por los usuarios.
        <br><br>
        3. **Datos personales**: Nos comprometemos a proteger tu privacidad y tus datos personales. Solo serán utilizados para los fines establecidos en nuestra política de privacidad.
        <br><br>
        4. **Modificaciones**: Nos reservamos el derecho de modificar estos términos y condiciones en cualquier momento. Cualquier cambio será notificado en el sitio web.
        <br><br>
        5. **Aceptación**: Al continuar utilizando nuestros servicios, aceptas estos términos y condiciones en su totalidad.
    </p>
</div>

<br><br>


<!-- Botón para abrir el chat -->
<button id="chat-toggle-button" class="btn btn-primary" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
    Chat
</button>

<!-- Chat Container (Oculto por defecto) -->
<div class="chat-container mt-5" id="chat-section" style="display: none; z-index: 999;">
    <div class="chat-box border rounded p-3 shadow-lg mx-auto" style="max-width: 400px;"> 
        <div class="chat-messages" id="chat-messages" style="height: 300px; overflow-y: auto;">
            <div class="message bot-message">Hola, aquí tienes algunas preguntas comunes:</div>
            <div class="message bot-message">1. ¿Cómo puedo empezar a crear un CV?</div>
            <div class="message bot-message">2. ¿Qué información debo incluir en mi CV?</div>
            <div class="message bot-message">3. ¿Tienes ejemplos de CV's?</div>
            <div class="message bot-message">4. ¿Cómo puedo mejorar mi CV?</div>
            <div class="message bot-message">5. ¿Qué formato es mejor para un CV?</div>
        </div>
        <div class="input-group mt-3">
            <select id="question-select" class="form-control">
                <option value="">Selecciona una pregunta...</option>
                <option value="¿Cómo puedo empezar a crear un CV?">¿Cómo puedo empezar a crear un CV?</option>
                <option value="¿Qué información debo incluir en mi CV?">¿Qué información debo incluir en mi CV?</option>
                <option value="¿Tienes ejemplos de CV's?">¿Tienes ejemplos de CV's?</option>
                <option value="¿Cómo puedo mejorar mi CV?">¿Cómo puedo mejorar mi CV?</option>
                <option value="¿Qué formato es mejor para un CV?">¿Qué formato es mejor para un CV?</option>
            </select>
            <div class="input-group-append">
                <button class="btn btn-primary" id="send-button">Enviar</button>
            </div>
        </div>
    </div>
</div>


<script>
    const answers = {
        "¿Cómo puedo empezar a crear un CV?": "Para empezar a crear un CV, primero debes definir tu objetivo profesional y recopilar toda la información relevante sobre tu experiencia laboral y educación.",
        "¿Qué información debo incluir en mi CV?": "Debes incluir tu información de contacto, un resumen profesional, tu experiencia laboral, educación y habilidades relevantes.",
        "¿Tienes ejemplos de CV's?": "Sí, puedes encontrar ejemplos de CV's en nuestro sitio web en el apartado HOME. El perfil de ejemplo es de Jeon .",
        "¿Cómo puedo mejorar mi CV?": "Puedes mejorar tu CV revisando la gramática, utilizando palabras clave relevantes y personalizándolo para cada solicitud de trabajo.",
        "¿Qué formato es mejor para un CV?": "El formato más común es el cronológico, pero también puedes considerar un formato funcional o combinado dependiendo de tu experiencia."
    };

    // Función para cambiar las imágenes del carrusel
    let currentIndex = 0;
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;

    function changeCarouselItem() {
        items.forEach((item, index) => {
            item.classList.remove('active');
            if (index === currentIndex) {
                item.classList.add('active');
            }
        });
    }

    document.getElementById('nextBtn').addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % totalItems;
        changeCarouselItem();
    });

    document.getElementById('prevBtn').addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        changeCarouselItem();
    });

    // Mostrar/Ocultar el chat
    document.getElementById('chat-toggle-button').addEventListener('click', function() {
        const chatSection = document.getElementById('chat-section');
        if (chatSection.style.display === 'none' || chatSection.style.display === '') {
            chatSection.style.display = 'block';
        } else {
            chatSection.style.display = 'none';
        }
    });

    document.getElementById('send-button').addEventListener('click', function() {
        const selectedQuestion = document.getElementById('question-select').value;
        
        if (selectedQuestion) {
            addMessage('user-message', selectedQuestion);
            const answer = answers[selectedQuestion];
            setTimeout(() => {
                addMessage('bot-message', answer);
            }, 1000);
        }
    });

    function addMessage(type, message) {
        const chatMessages = document.getElementById('chat-messages');
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${type}-message`;
        messageDiv.textContent = message;
        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight; // Desplazar hacia abajo
    }
</script>

<style>
    .carousel-inner {
        margin-bottom: 20px; /* Separar el carrusel del resto del contenido */
    }
    .carousel-item {
        display: none;
    }
    .carousel-item.active {
        display: block;
    }
    .chat-container {
        max-width: 400px;
        margin: 0 auto;
        position: fixed;
        bottom: 70px; /* Espacio para el botón */
        right: 20px;
        z-index: 999; /* Asegura que el chat esté encima de otros elementos */
    }
    .chat-box {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }
    .message {
        margin: 5px 0;
        font-weight: bold; 
        font-size: 1.1rem; 
    }
    .user-message {
        text-align: right;
        color: #fff; /* Color de texto */
        background-color: #007bff; /* Fondo claro */
        padding: 10px;
        border-radius: 5px;
    }
    .bot-message {
        text-align: left;
        color: #333; /* Color de texto */
        background-color: #e3f2fd; /* Fondo claro */
        padding: 10px;
        border-radius: 5px;
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 10px 20px;
        color: white;
        font-size: 1rem;
        border-radius: 5px;
        text-decoration: none;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        cursor: pointer;
    }
</style>
@endsection
