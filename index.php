<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php require('./layout/links.php') ?>
    <link rel="stylesheet" href="css/estilos.css">
	<title>CEESP</title>
</head>
<body>
    <!--HEADER-->
    <?php require('./layout/header.php') ?>

    <div class="container">
        <!--=====================================
        CARROUSEL
        ======================================-->
        <section class="carousel row">
            <div class=" col">
                <div class="carousel_contenedor">
                    <button aria-label="Anterior" class="carousel_anterior"><i class="fas fa-chevron-left fa-5x"></i></button>
                    <div class="carousel_lista">
                        <div class="carousel_elemento">
                            <img src="img/slideshow/curso_1.jpg"  alt="the outsider " class="fondo_libro">
                        </div>
                        <div class="carousel_elemento  ">
                            <img src="img/slideshow/curso_2.jpg"  alt="the outsider " class="fondo_libro">
                        </div>
                        <div class="carousel_elemento  ">
                            <img src="img/slideshow/curso_3.jpg"  alt="the outsider " class="fondo_libro">
                        </div>
                    </div>	
                    <button aria-label="Siguiente" class="carousel_siguiente"><i class="fas fa-chevron-right fa-5x"></i></i></button>
                </div>
                <div role="tablist" class="carousel_indicadores"></div>
            </div>
        </section>

        <!--=====================================
        PRESENTACION
        ======================================-->
        <section class="presentacion">
            <div class="row">
                <div class="col-12">
                    <h5>Bienvenido a nuestro sitio web</h5>
                    <p>Gracias por visitar nuestro nuevo sitio web de CEESP.</p>
                    <p>Nuestro objetivo es ofrecer un sitio web a nuestros visitantes que represente una experiencia útil de aprendizaje autodidacta.</p>
                    <p>Aquí podrás obtener una gran conocimiento gracias a nuestros cursos online.</p>
                    <p>Contamos con cursos divertidos e interactivos especialmente para ti.</p>
                    <p>¡Tu puedes aprender lo que sea!</p>
                </div>
            </div>
        </section>

        <!--=====================================
        TITULO Y CONTENIDO
        ======================================-->
        <section class="contenido">
            <div class="titulo row">
                <div class=" col-sm-12 col-xs-10 ">
                    <h5>Aprendizaje de primera clase para todos en cualquier lugar</h5>
                </div>
            </div>
            <div class="articulo row d-flex align-items-center">
                <div class="col-lg-6 col-md-12 col-xs-10">
                    <img src="img/contenido/img1.png" alt="imagen">
                </div>
                <div class="col-lg-6 col-md-12 col-xs-10">
                    <h3>Aprendizaje personalizado</h3>
                    <p>Los estudiantes practican a su propio ritmo; primero para llenar las lagunas en su comprensión y luego acelerar su aprendizaje.</p>
                </div>
            </div>
            <div class="articulo row d-flex align-items-center">
                <div class="col-lg-6 col-md-12 col-xs-10">
                    <h3>Contenido de confianza</h3>
                    <p>Creado por expertos, la biblioteca de ejercicios siempre es gratis para estudiantes y maestros.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-10">
                    <img src="img/contenido/img2.png" alt="imagen">
                </div>
            </div>
            <div class="articulo row d-flex align-items-center">
                <div class="col-lg-6 col-md-12 col-xs-10">
                    <img src="img/contenido/img1.png" alt="imagen">
                </div>
                <div class="col-lg-6 col-md-12 col-xs-10">
                    <h3>Herramientas para empoderar a los maestros</h3>
                    <p>Con CEESP los maestros pueden identificar las lagunas en comprensión de sus estudiantes, crear una clase a la medida y satisfacer las necesidades de cada alumno.</p>
                </div>
            </div>
        </section>
    </div>

    <!--FOOTER-->
    <?php require('./layout/footer.php') ?>

    <!--=====================================
    SCRIPTS
    ======================================-->
    <?php require('./layout/scripts.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="js/carousel.js"></script>

</body>
</html>
