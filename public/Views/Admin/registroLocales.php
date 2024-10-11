<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- component -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../public/css/landin.css">
    <link rel="stylesheet" href="../public/css/whats.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/whats2.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!--Titulo de la empresa-->
    <title>exploreLocal</title>

</head>

<body>
    <?php
    session_start();
   ?>

     <?php if (isset($_SESSION['username'])): ?>
    <span class="inline-block no-underline font-medium text-black text-lg px-4">Hola, <?php echo $_SESSION['username']; ?>!</span>
    <?php else: ?>
    <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="../public/logout_action.php">Cerrar sesión</a>   
    <?php endif; ?>
                    
    <form action="CrearLocal" method="POST" enctype="multipart/form-data">
    <label for="name_empresa">Nombre de la Empresa:</label>
    <input type="text" name="name_empresa" required>

    <label for="nit_empre">NIT de la Empresa:</label>
    <input type="text" name="nit_empre" required>

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" required></textarea>

    <label for="servicios">Servicios:</label>
    <textarea name="servicios" required></textarea>

    <label for="horario_atencion">Horario de Atención:</label>
    <input type="text" name="horario_atencion" required>

    <label for="imagen">Subir Imagen (solo PNG):</label>
    <input type="file" name="imagen" accept=".png">

    <button type="submit">Crear Local</button>
</form>
















    
   



<script src="../Public/js/alerta.js"></script>
</html>