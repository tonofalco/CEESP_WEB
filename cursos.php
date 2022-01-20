<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('./layout/links.php') ?>
    <link rel="stylesheet" href="css/cursos.css">
    <title>CEESP</title>
</head>
<body>
    <!--HEADER-->
    <?php require('./layout/header.php') ?>

    <div class="container ">
        <div class="row ">
            <div class="col d-flex justify-content-center texto">
                <h1>Curso<br><br> Español Basico I</h1>
            </div>
        </div>
        <!--=====================================
        TABLA DE CURSO
        ======================================-->
        <section class=" curso  ">
            <div class="row ">
                <article class="col-12 ">
                    <div class="contenido" id="cursoUno">
                        <img src="img/iconos/txt.png" width="25" height="25">
                        <a  class="cursouno">Indice</a>
                    </div><hr>
                </article>
                <article class="col-12 ">
                    <div class="contenido" id="cursoDos">
                        <img src="img/iconos/txt.png" width="25" height="25">
                        <a  class="cursouno">Presentacion</a>
                    </div><hr>
                </article>
                <article class="col-12 ">
                    <div class="contenido" id="cursoTres">
                        <img src="img/iconos/txt.png" width="25" height="25">
                        <a  class="cursouno">1.-Elaborar guias de autoestudio para la resolucion de examenes</a>
                    </div><hr>
                </article>
                <article class="col-12 ">
                    <div class="contenido" id="cursoCuatro">
                        <img src="img/iconos/txt.png" width="25" height="25">
                        <a  class="cursouno">2.-Escribir biografias y autobiografias para compartir</a>
                    </div><hr>
                </article>
                <article class="col-12 ">
                    <div class="contenido" id="cursoCinco">
                        <img src="img/iconos/txt.png" width="25" height="25">
                        <a  class="cursouno">3.-Elaborar un programa de radio</a>
                    </div><hr>
                </article>
                <article class="col-12 ">
                    <div class="contenido" id="cursoSeis">
                        <img src="img/iconos/txt.png" width="25" height="25">
                        <a  class="cursouno">4.-Evaluacion</a>
                    </div><hr>
                </article>
                
            </div>
        </section>
    </div>

    <!--FOOTER-->
    <?php require('./layout/footer.php') ?>

    <!--=====================================
    MODAL
    ======================================-->
    <section>
        <div class="modal-container" id="modal_container">
            <div class="modal_uno">
                <h1>Ventana Modal</h1>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque assumenda dignissimos illo explicabo natus quia repellat, praesentium voluptatibus harum ipsam dolorem cumque labore sunt dicta consectetur, nesciunt maiores delectus maxime?
                </p>
                <button id="close">Cerrar</button>
            </div>
        </div>
        <div class="modal-container-dos" id="modal_container_dos">
            <div class="modal_dos">
                <h1>Ventana Modal 2</h1>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque assumenda dignissimos illo explicabo natus quia repellat, praesentium voluptatibus harum ipsam dolorem cumque labore sunt dicta consectetur, nesciunt maiores delectus maxime?
                </p>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/5c8NLiKW5aI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <button id="close_dos">Cerrar</button>
            </div>
        </div>
    </section>

    <!--=====================================
    SCRIPTS
    ======================================-->
    <?php require('./layout/scripts.php') ?>
    <script src="js/popup.js"></script>

</body>
</html>