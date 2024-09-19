<!DOCTYPE html>
<html lang="es" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Farmatodo – Inventario</title>
    <meta name="Description" content="Formulario de Registro e Inicio de Sesión">

    <!-- Google Fonts and Boxicons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="{{ asset('assets/css/styles.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Video de fondo -->
    <video autoplay muted loop id="bg-video">
    <source src="{{ asset('assets/video/farmacia.mp4') }}" type="video/mp4"> <!-- Cambia 'video.mp4' por la ruta de tu video -->
    </video>

    <!-- Loader -->
    <div id="loader">
        <img src="../assets/images/media/loader.svg" alt="Cargando...">
    </div>

    <!-- Contenedor del formulario -->
    <div class="container-form register">
        <!-- Information Section -->
        <div class="information">
            <div class="info-childs text-center">
                <h2 class="fw-bold">FARMACIA</h2>
                <img src="{{ asset('assets/images/farma.png') }}" alt="Logo 1" width="350">
                <p>Para gestionar el sistema de inventario de la farmacia, por favor inicia sesión con tus credenciales de administrador.</p>
            </div>
        </div>

        <!-- Login Form -->
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar Sesión</h2>
                <img src="{{ asset('assets/images/doctor.jpg') }}" alt="Logo 1" width="350" class="logo-redondo">

                <form method="POST" action="{{ route('login') }}" class="form form-login" novalidate>
                    @csrf
                    <div class="mb-3 input-group">
                        <span class="input-group-text">
                            <i class='bx bx-envelope'></i>
                        </span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" required>
                    </div>

                    <div class="mb-3 input-group">
                        <span class="input-group-text">
                            <i class='bx bx-lock-alt'></i>
                        </span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                        <button class="btn btn-light" type="button" onclick="togglePassword()">
                            <i id="togglePasswordIcon" class="bx bx-hide"></i>
                        </button>
                    </div>

                    <div class="d-grid mt-3">
                        <button type="submit" class="btn btn-custom">Iniciar Sesión</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Loader Hider Script -->
    <script>
        window.addEventListener('load', function () {
            var loader = document.getElementById('loader');
            if (loader) {
                loader.style.display = 'none';
            }
        });

        // Function to toggle password visibility
        function togglePassword() {
            var passwordInput = document.getElementById('password');
            var toggleIcon = document.getElementById('togglePasswordIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('bx-hide');
                toggleIcon.classList.add('bx-show');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('bx-show');
                toggleIcon.classList.add('bx-hide');
            }
        }
    </script>

    <!-- Custom CSS -->
    <style>
/* General Styles */
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}

/* Estilos para el video de fondo */
#bg-video {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
    z-index: -1; /* Asegura que esté detrás del contenido */
    object-fit: cover; /* Hace que el video cubra toda la pantalla */
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.container-form {
  display: flex;
  border-radius: 20px;
  box-shadow: 0 5px 7px rgba(0, 0, 0, .1);
  height: 650px; /* Ajustado a un tamaño más grande */
  max-width: 1200px; /* Ajustado a un tamaño más ancho */
  transition: all 1s ease;
  margin: 10px;
  z-index: 1; /* Asegura que el formulario esté por encima del video */
}

.information {
    width: 40%;
    display: flex;
    align-items: center;
    text-align: center;
    background-color: #4CAF50; /* Verde sólido sin transparencia */
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}

.info-childs {
  width: 100%;
  padding: 0 50px; /* Aumentado para hacer más espacioso */
}

.info-childs h2 {
  font-size: 3rem; /* Aumentado para que sea más grande */
  color: #fff;
}

.info-childs p {
  margin: 20px 0;
  font-size: 1.2rem; /* Aumentado para mejorar la legibilidad */
  color: #fff;
}

.form-information {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 60%;
  text-align: center;
  background-color: #f8f8f8; /* Blanco sólido sin transparencia */
  border-top-right-radius: 20px;
  border-bottom-right-radius: 20px;
}

.form-information-childs {
  padding: 0 50px; /* Aumentado para más espacio interno */
}

.form-information-childs h2 {
  color: #333;
  font-size: 3rem; /* Aumentado para mayor visibilidad */
  font-weight: bold;
}

.form-information-childs p {
  color: #555;
}

.form {
  margin: 30px 0 0 0;
}

/* Estilos para las entradas y botones del formulario */
.input-group {
  margin-bottom: 20px;
}

.input-group-text {
  font-size: 1.5rem; /* Aumentar tamaño de los íconos */
  padding: 10px;
}

.form-control {
  font-size: 1.5rem; /* Aumentado para que coincida con el tamaño del formulario */
  padding: 15px; /* Aumentado para más espacio en la entrada */
}

/* Aumentar tamaño del placeholder (Correo Electrónico, Contraseña) */
::placeholder {
  font-size: 1.5rem; /* Aumentar el tamaño del texto del placeholder */
  color: #aaa; /* Cambiar el color si es necesario */
}

.btn-custom {
  background-color: #4CAF50; /* Verde */
  color: #fff;
  border-radius: 20px;
  border: none;
  padding: 15px 20px; /* Aumentado para hacer el botón más grande */
  font-size: 1.5rem; /* Aumentar el tamaño del texto del botón */
  cursor: pointer;
  margin-top: 20px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, .1);
}

.btn-custom:hover {
  background-color: #45a049; /* Hover verde más oscuro */
}

/* Responsive adjustments */
@media screen and (max-width:750px) {
  html {
    font-size: 12px;
  }

  .container-form {
    height: auto;
    flex-direction: column;
  }

  .information {
    width: 100%;
    padding: 20px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0;
  }

  .form-information {
    width: 100%;
    padding: 20px;
    border-bottom-left-radius: 20px;
    border-top-right-radius: 0;
  }
}

@media screen and (max-width:580px) {
  html {
    font-size: 15px;
  }
}
/* Estilos para el logo redondo */
.logo-redondo {
  width: 200px; /* Ajusta el tamaño según prefieras */
  height: 200px; /* Mantén la altura y el ancho iguales para hacer un círculo */
  object-fit: cover; /* Asegura que la imagen se ajuste al contenedor sin distorsión */
  border-radius: 50%; /* Hace que la imagen sea redonda */
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Añade un leve sombreado */
}

    </style>

</body>


</html>
