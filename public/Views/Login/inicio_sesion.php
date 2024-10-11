<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio De Sesion </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="../../Public/css/style.css">
</head>
<body>
    <?php
        session_start();
    ?>
                        <?php if (isset($_SESSION['username'])): ?>
                        <span class="inline-block no-underline font-medium text-black text-lg px-4">Hola, <?php echo $_SESSION['username']; ?>!</span>
                        <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="LogoutAction">Cerrar sesión</a>
                    <?php else: ?>
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF] px-4" href="inicio_sesion">Iniciar sesión</a>
                        <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF]" href="registro">Registrarse</a>
                    <?php endif; ?>
                    
         
    <div class="container mx-auto max-w-lg p-10 rounded-lg drop-shadow-2xl  my-20 bg-[#050016]">
        <div class="text-center py-5 mb-5">
            <h1 class="text-2xl text-white font-bold">Bienvenido a Saudade</h1>
        </div>
        
        <form action="LoginAction" method="post" class="flex flex-col" onsubmit="return validarFormulario()">
            <div class="mb-3">
                <label for="email" class="block font-bold text-mg text-white">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Email" class="form-input w-full rounded-md border border-gray-300 focus:border-blue-500 py-1" required>
            </div>
        
            <div class="mb-3">
                <label for="password" class="block font-bold text-mg text-white">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña" class="form-input w-full rounded-md border border-gray-300 py-1 focus:border-blue-500" required>
            </div>
        
            <div class="flex items-center justify-between mb-5">
                <a href="" class="text-sm text-blue-500 hover:underline">¿Olvidaste tu contraseña?</a>
            </div>
        
            <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600">Inicio de sesión</button>
        
            <div class="text-center text-white mt-5">
                <p>¿Aún no estás en ExploreLocal? <a href="{{ url_for('registro') }}" class="text-blue-500 hover:underline">Regístrate</a></p>
            </div>
        </form>

        
        <script>
            function validarFormulario() {
                var email = document.getElementById("email").value;
                var password = document.getElementById("password").value;
        
                // Validación adicional
                if (email === "" || password === "") {
                    alert("Por favor completa todos los campos.");
                    return false;
                }
        
                return true;
            }
        </script>
        <div class="text-center text-sm opacity-40 text-white  mt-2">
            <p>Si continúas, aceptas los Términos del servicio Abre una nueva pestaña de Saudade y confirmas que has leído nuestra política de privacidad Aviso de recopilación de datos </p>
        </div>
    </div>

    <script src="../Public/js/validacioninicio.js"></script>
    
</body>
</html>