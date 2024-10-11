<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudage Registro</title>
    <link rel="stylesheet" href="../../Public/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
            <?php
            session_start();
            ?>
            
            <nav id="header" class="barra">
                <div class="w-full flex items-center justify-between px-6 py-4 backdrop-blur-lg">
                    <label for="menu-toggle" class="cursor-pointer md:hidden block">
                        <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                            <title>menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </label>
                    <input class="hidden" type="checkbox" id="menu-toggle">

                    <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                        <nav>
                            <ul class="md:flex items-center justify-between text-base text-black pt-4 md:pt-0">
                                <a class="inline-block no-underline hover:text-purple font-medium text-lg py-2 px-4 lg:-ml-2" href="#"></a>
                                <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../../Public/">Inicio</a></li>
                                <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="../QuieneSomos/quienessomos">Quiénes Somos</a></li>
                                <li><a class="inline-block no-underline hover:text-[#9333ea] font-medium text-lg py-2 px-4 lg:-ml-2" href="../Catalogo/catalogo">Catalogo</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
                        <div class="auth flex items-center w-full md:w-full">
                            <button class=""><a style='font-size:24px;color:black' class='fas '>&#xf07a;</a></button>

                            <?php if (isset($_SESSION['username'])): ?>
                                <span class="inline-block no-underline font-medium text-black text-lg px-4">Hola, <?php echo $_SESSION['username']; ?>!</span>
                                <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="LogoutAction">Cerrar sesión</a>
                            <?php else: ?>
                                <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF] px-4" href="inicio_sesion">Iniciar sesión</a>
                                <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF]" href="registro">Registrarse</a>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            </nav>
        <!-- Imagen angel 1 --> 
        <img src="../Img/ANGEL SIN FONDO.png" class="angel1">
        <!-- Imagen angel 2 --> 
        <img src="../Img/ANGEL SIN FONDO.png" class="angel2">
        <!-- Signup -->
        <div class="container mx-auto max-w-lg p-10 rounded-lg drop-shadow-2xl my-20 bg-[#050016]">
            <div class="text-center font-bold text-mg py-2  text-white mb-5">
                <h1 class="text-2xl font-bold">Bienvenido a Saudade</h1>
            </div>

            <form action="RegisterAction" method="post" class="flex flex-col" onsubmit="return validarFormulario()">
                <div class="mb-3">
                    <label for="nombre" class="block font-bold text-mg py-1 text-white">Nombre Completo</label>
                    <input type="text" id="nombre" name="username" class="form-input w-full rounded-md border py-1 border-gray-300 focus:border-blue-500" required>
                </div>
            
                <div class="mb-3">
                    <label for="email" class="block font-bold text-mg py-1 text-white">Correo Electrónico</label>
                    <input type="email" id="email" name="email" class="form-input w-full rounded-md border py-1 border-gray-300 focus:border-blue-500" required>
                </div>
            
                <div class="mb-3">
                    <label for="password" class="block font-bold text-mg py-1 text-white">Contraseña</label>
                    <input type="password" id="password" name="password" class="form-input w-full rounded-md py-1 border border-gray-300 focus:border-blue-500" required minlength="8">
                </div>
            
                <div class="mb-3">
                    <label for="repetirPassword" class="block font-bold text-mg py-1 text-white">Repetir Contraseña</label>
                    <input type="password" id="repetirPassword" name="repetirPassword" class="form-input w-full py-1 rounded-md border border-gray-300 focus:border-blue-500" required minlength="8">
                </div>

                <div class="flex items-center py-1 justify-between mb-5">
                    <a href="inicio_sesion" class="text-sm text-blue-500 hover:underline">¿Ya tienes una cuenta? Inicia sesión</a>
                </div>
            
                <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600">Registrarse</button>
            </form>
        </div>
        <script  src="../Public/js/validacionregistro.js"></script>
</body>
</html>
