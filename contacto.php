<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('./layout/links.php') ?>
    <link rel="stylesheet" href="css/contacto.css">
	<title>CEESP</title>
</head>

    <!--HEADER-->
    <?php require('./layout/header.php') ?>

<body>
    <div class="container">
        <section class="personas">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 col-sm-6 col-xs-12 ">
                    <a class="d-flex justify-content-center"><img src="img/personas/Alejandro.jpeg" width="300" height="380"></a>
                    <p class="d-flex justify-content-center">Alejandro<br>Editor Front-End<br>Mexico</p>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <a class="d-flex justify-content-center"><img src="img/personas/Antonio.jpeg" width="300" height="380"></a>
                    <p class="d-flex justify-content-center">Antonio<br>Programador Back-End<br>Mexico</p>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <a class="d-flex justify-content-center"><img src="img/personas/viridiana.jpeg" width="300" height="380"></a>
                    <p class="d-flex justify-content-center">Viridiana<br>Maquetador Web<br>Mexico</p>
                </div>
            </div><hr color="52575d">
        </section>
        <section class="ayuda">
            <div class="row">
                <div class="col">
                    <h2>¿Necesitas ayuda?</h2>
                    <p>
                        Si eres un estudiante que usa la plataforma de CEESP y deseas hacer alguna pregunta o necesitas ayuda técnica,  mandanos un correo a <a href= #> CEESP_OFICIAL@hotmail.com</a>  "o" marca al numero  <a href="#">7471057822</a>  y nos pondremos al contacto contigo. servicio a cliente 10:00 a.m. a 6:00 p.m.
                    </p>
                </div>
            </div>
        </section>

    <!--=====================================
    SCRIPTS
    ======================================-->
    <?php require('./layout/scripts.php') ?>
    </div>

    <!--Footer-->
    <?php require('./layout/footer.php') ?>

</body>
</html>