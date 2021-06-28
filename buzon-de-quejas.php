<!DOCTYPE html>
<html lang="en">

<?php include_once 'includes/tags/google_tag_manager_head.php';?>

<link rel="icon" type="image/png" href="/img/FAVICON-SEQUOIA.webp" sizes="32x32">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="Página de contacto">
<title>Buzón de quejas</title>
<link rel="stylesheet" rel="preload" href="/css/style.css" media="all">
<link rel="stylesheet" rel="preload" href="/css/normalize.css" media="all">

</head>

<?php include_once 'includes/tags/google_tag_manager_body.php';?>
<?php include_once 'includes/templates/top-header.php';?>
<!--####HEADER####-->
<section id="site-wrapper">

    <!-- CANVAS -->
    <section id="site-canvas">

        <?php include_once 'includes/templates/header.php';?>

        <section class="contenedor-principal" id="contenedor-principal">
        <section class="contenedor-contacto">
            <div class="cuadros-crecimiento">
                <div class="titulos-grid-crecimiento-infantil">
                    <div class="flexbox padre">
                        <div class="barra-titulo"></div>
                    </div>
                    <h1 style=" font-size: calc(1.4em + 1vw); "> <span class="font-bold">Buzón de Quejas, <br> Sugerencias o Comentarios</h1>
                    <div class="flexbox padre">
                        <div class="barra-titulo"></div>
                    </div>
                </div>
            </div>
            <div class="textos-azules">
                <p>Si tienes una queja, comentario o sugerencia relacionado a la institución o sobre algún asunto en específico, por favor hazla llegar a través de este buzón.</p>
                <p>De antemano, gracias por tu queja, sugerencia o comentario, ya que nos ayuda a mejorar y poder brindarte un mejor servicio.</p>
            </div>
        </section>

        <section class="contenedor-info-contacto">
            <div class="formulario">
                <form action="/enviar-quejas.php" method="post">
                <div class="titulos-principal ">
                    <h2><span class="font-bold">Formulario de Quejas, <br> Sugerencias o Comentarios</span></h2>
                </div>
                <div class = "t-izquierda tercer-p">
                    <p>Nombre</p>
                    <input type="text" name="nombreB" placeholder="Nombre" >
                </div>
                <div class = "t-izquierda tercer-p">
                    <p>Nombre del Paciente *</p>
                    <input type="text" name="nombrePaciente" placeholder="Nombre del paciente" required>
                </div>
                <div class = "t-izquierda tercer-p">
                    <p>Correo Electrónico </p>
                    <input type="email" name="correoB" placeholder="Correo">
                </div>
                <div class = "t-izquierda tercer-p">
                    <p>Teléfono </p>
                    <input type="tel" name="telefonoB" placeholder="Teléfono" >
                </div>
                <div class = "t-izquierda tercer-p">
                    <p>ELIGE UN CENTRO *</p>
                    <select name="centroB" required>
                    <option selected disabled value="">Selecciona un centro:</option> 
                    <option value="CDMX">CDMX</option> 
                    <option value="GUADALAJARA">GUADALAJARA</option> 
                    <option value="MONTERREY">MONTERREY</option>
                    </select>
                </div>
                <div class = "t-izquierda tercer-p">
                    <p>MENSAJE *</p>
                    <textarea name="mensajeB" placeholder="Escriba aqui su mensaje" required></textarea>
                </div>
                <div class="t-izquierda tercer-p">
                    <p class="justificar-texto-90 ph-1">Envianos tus comentarios</p>
                </div>    
                    <div class="centrar-texto ph-1">
                        <input type="submit" value="ENVIAR" id="boton">
                    </div>
                </form>
            </div>
        </section>

            <div class="textos-azules">
                <p>Gracias por tu mensaje. Este es exactamente el tipo de aporte que necesitamos para servir mejor a las necesidades de nuestros pacientes.</p>
                <p>Sus comentarios serán enviados directamente al gerente del centro. Agradecemos su participación y claro que vamos a considerar sus ideas en el futuro.</p>
            </div>
            
        </div>











        <?php include_once 'includes/templates/footer.php';?>

    </section>
    <!-- END SITE CONTENT -->

</section>
<!--####HEADER####-->

<a href="/contact" class="scrollup">
    <p>CONTACTO</p>
</a><!--####FOOTER####-->
<script src="https://kit.fontawesome.com/3919625d45.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/scripts.js "></script>
</body>


</html>