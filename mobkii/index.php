
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Mobkii</title>

    


    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

    <link rel="stylesheet" type="text/css" href="public/css/estilos.css">
    <link rel="stylesheet" href="public/css/layouts/side-menu.css">
    <link rel="stylesheet" type="text/css" href="public/css/estilos.css">
    <script type="text/javascript" src="public/js/cargarpaginas.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#pagwebs").click(function(){
                $("#pagwebsinfo").toggle(800);
            });
        });

        $(document).ready(function(){
            $("#desapp").click(function(){
                $("#desappinfo").toggle(800);
            });
        });

        $(document).ready(function(){
            $("#condes").click(function(){
                $("#condesinfo").toggle(800);
            });
        });
    </script>

</head>
<body>
    <div id="layout">
        <a href="#menu" id="menuLink" class="menu-link">
            <span></span>
        </a>

        <div id="menu">
            <div class="pure-menu">
                <a class="pure-menu-heading" href="index.php">Mobkii</a>

                <ul class="pure-menu-list">
                    <li class="pure-menu-item"><a href="index.php" id="loadinicio" class="pure-menu-link">Inicio</a></li>
                    <li class="pure-menu-item"><a href="productos.php" id="loadproductos" class="pure-menu-link">Productos</a></li>
                </ul>
            </div>
        </div>
        <div id="productos">
            <div id="main">
                <div class="header">

                    <h1>Mobkii</h1>

                </div>


            </div>

            <div class="div-productos">
                <h2 id="pagwebs">Desarrollo de páginas web</h2>
                <p id="pagwebsinfo" style="display: none">
                    Diseñamos y desarrollamos páginas web a la medida. Desde sitios informativos, sitios auto-administrables (CMS) hasta tiendas en línea y sistemas web.
                </p>

                <h2 id="desapp">Desarrollo de apps</h2>
                <p id="desappinfo" style="display: none">
                    Más de 100,000 usuarios mensualmente utilizan nuestras apps.  Hacemos apps que a las personas les gusta utilizar. Desarrollo para iOS y Android. 
                </p>

                <h2 id="condes">Consultoría y desarrollo</h2>
                <p id="condesinfo" style="display: none">
                    Somos una extensión de tu negocio. Es como contar con un departamento de marketing, diseño y desarrollo a un precio accesible. Excelente para corporativos.
                </p>

                
            </div>




        </div>

    </div>


    <script src="js/ui.js"></script>


</body>
</html>
