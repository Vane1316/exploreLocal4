

<!DOCTYPE html>
<html lang="es">

<head>
    <title>ExploreLocal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/LogoLocalExplore.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/LogoLocalExplore.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="vistas/css/fontawesome.min.css">

    <body>
        <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-light shadow">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="navbar-brand text-success logo h1 align-self-center d-flex align-items-center" href="index.php">
                    <img src="assets/img/LogoLocalExplore.png" alt="Logo" class="logo-img">
                    <span class="ml-2">ExploreLocal</span>
                </a>
    
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                    <div class="flex-fill">
                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../ExploreLocal/index.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../ExploreLocal/about.php">Planes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../ExploreLocal/shop.php">Locales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../ExploreLocal/contact.php">Contactos</a>
                            </li>
                            <!-- Added login and register links -->
                            <li class="nav-item">
                                <a class="nav-link" href="../ExploreLocal/logaut/login_registro.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary text-white" href="../ExploreLocal/logaut/login_registro.php">Register</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar align-self-center d-flex">
                        <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                            <div class="input-group">
                                <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                                <div class="input-group-text">
                                    <i class="fa fa-fw fa-search"></i>
                                </div>
                            </div>
                        </div>           
                    </div>
                </div>
            </div>
        </nav>
        <!-- Close Header -->
    
        <!-- Modal -->
        <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="w-100 pt-1 mb-5 text-right">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="get" class="modal-content modal-body border-0 p-0">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                        <button type="submit" class="input-group-text bg-success text-light">
                            <i class="fa fa-fw fa-search text-white"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    
        <!-- Start Banner Hero -->
        <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" src="assets/img/petronio.jpg" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left align-self-center">
                                    <h1 class="h1 text-success"><b>Petronio Cocina De Autor</b></h1>
                                    <p>
                                    En Petronio - Cocina de autor cada uno de nuestros platos están inspirados en Colombia, su historia, su gente y su cultura. La combinación de modernidad y tendencias con tradición son el punto de encuentro en Petronio. Te invitamos a vivir esta experiencia llena de sabor, historia, música, texturas y aromas. <a rel="sponsored" class="text-success" href="shop-single-petronio.php" >Mirar más sobre esto</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" src="assets/img/lancaster.jpg" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left">
                                    <h1 class="h1">Hotel Lancaster House</h1>
                                    <p>Descubre por qué tantos viajeros ven Lancaster House como el hotel ideal cuando visitan Bogotá.<a rel="sponsored" class="text-success" href="shop-single-lancaster.php" >Mirar más sobre esto</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" src="assets/img/paloquemao.jpg" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left">
                                    <h1 class="h1">Plaza de Mercado Paloquemao</h1>
                                    <p>
                                    La Plaza de Mercado de Paloquemao es un lugar emblemático para el abastecimiento de familias y negocios en Bogotá.<a rel="sponsored" class="text-success" href="shop-single-paloquemao.php" >Mirar más sobre esto</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
        <!-- End Banner Hero -->
    
        <!-- Start Categories of The Month -->
        <section class="container py-5">
            <div class="row text-center pt-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Categorias</h1>
                    <p>
                        Sugerencia de Negocios para clientes.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="restaurante.php"><img src="assets/img/restaurant.webp" class="rounded-circle img-fluid border"></a>
                    <h5 class="text-center mt-3 mb-3">Restaurantes</h5>
                    <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/restaurante.php" >Ver Mas...</a></p>
                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="hoteles.php"><img src="assets/img/hotel.webp" class="rounded-circle img-fluid border"></a>
                    <h2 class="h5 text-center mt-3 mb-3">Hoteles</h2>
                    <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/hoteles.php" >Ver Mas...</a></p>
                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="tiendas.php"><img src="assets/img/supermaket.webp" class="rounded-circle img-fluid border"></a>
                    <h2 class="h5 text-center mt-3 mb-3">Tiendas</h2>
                    <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/tiendas.php" >Ver Mas...</a></p>
                </div>
            </div>
        </section>
        <!-- End Categories of The Month -->
    
        <!-- Start Featured Product -->
        <section class="bg-light">
            <div class="container py-5">
                <div class="row text-center py-3">
                    <div class="col-lg-6 m-auto">
                        <h1 class="h1">Mejores Negocios</h1>
                        <p>
                            Emprendimientos que sobresalen en su sector debido a su alta calidad, innovación, rentabilidad y satisfacción del cliente. Estos negocios suelen tener una sólida estrategia de mercado, una gestión efectiva y una capacidad destacada para adaptarse y crecer en un entorno competitivo.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="shop-single-omm.php">
                                <img src="assets/img/omm.jpg" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                    
                                </ul>
                                <a href="shop-single-omm.php" class="h2 text-decoration-none text-dark">Omm</a>
                                <p class="card-text">
                                OMM es el lugar donde la naturaleza y la energía se confabulan para despertar un estado emocional que conduzca a la felicidad infinita.
                                </p>
                                <p class="text-muted">Reviews (24)</p>
                                <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/shop-single-omm.php" >Ver Mas...</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="shop-single-hilton.php">
                                <img src="assets/img/hilton.jpg" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                    
                                </ul>
                                <a href="shop-single-hilton.php" class="h2 text-decoration-none text-dark">Hotel Hilton Garden Inn Bogota Airport</a>
                                <p class="card-text">
                                Hilton Garden Inn Bogota Airport es una magnífica elección para los viajeros que visiten Bogotá.
                                </p>
                                <p class="text-muted">Reviews (48)</p>
                                <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/shop-single-hilton.php" >Ver Mas...</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="shop-single-merkacol.php">
                                <img src="assets/img/merkacol.jpg" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                    </li>
                                   
                                </ul>
                                <a href="shop-single-merkacol.php" class="h2 text-decoration-none text-dark">Supermercado Merkacol - AMÉRICAS</a>
                                <p class="card-text">
                                Supermercado MERKACOL Es una empresa colombiana que nace con el fin de satisfacer la demanda de productos esenciales del hogar.
                                </p>
                                <p class="text-muted">Reviews (74)</p>
                                <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/shop-single-merkacol.php" >Ver Mas...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Featured Product -->
    
        <!-- Start Footer -->
       
<footer class="bg-dark text-light py-5" id="footer">
    <div class="container">
        <div class="row mb-4">
            <!-- Company Info Section -->
            <div class="col-md-4 mb-3 mb-md-0">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">ExploreLocal</h2>
                <ul class="list-unstyled mt-4">
                    <li class="d-flex align-items-center mb-3">
                        <i class="fas fa-map-marker-alt me-2 fs-5"></i>
                        <span>Villeta</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="fa fa-phone me-2 fs-5"></i>
                        <a class="text-light text-decoration-none" href="tel:3135657271">313 565 7271</a>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="fa fa-envelope me-2 fs-5"></i>
                        <a class="text-light text-decoration-none" href="mailto:Infinity@company.com">Infinity@company.com</a>
                    </li>
                </ul>
            </div>
            <!-- Social Media Section -->
            <div class="col-md-8">
                <div class="d-flex flex-wrap justify-content-center justify-md-end mb-3">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-100 my-4 border-top border-light"></div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="w-100 bg-black py-3">
            <div class="container text-center">
                <p class="mb-2">
                    &copy; <span id="current-year"></span> <a href="#" class="text-light text-decoration-none">Company Infinity</a>. All Rights Reserved.
                </p>
                <p class="mb-0">
                    <a href="#privacy-policy" class="text-light text-decoration-none">Privacy Policy</a> | 
                    <a href="#terms-of-service" class="text-light text-decoration-none">Terms of Service</a>
                </p>
            </div>
        </div>
    </div>
</footer>


        <!-- Optional JavaScript for dynamic year -->
        <script>
            document.getElementById('current-year').textContent = new Date().getFullYear();
        </script>

        <!-- Include Font Awesome (if not included elsewhere) -->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

                <!-- Optional CSS for additional styling -->
        <style>
            #footer {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .logo {
                font-family: 'Arial', sans-serif;
            }
            .text-light a {
                color: #e0e0e0;
            }
            .text-light a:hover {
                color: #b0b0b0;
                text-decoration: underline;
            }
            .fs-5 {
                font-size: 1.25rem;
            }
        </style>

        <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>