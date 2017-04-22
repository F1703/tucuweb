<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TucuWeb</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style media="screen">
      body{
        background-image: url("http://wallpaperlayer.com/img/2015/9/code-wallpaper-8238-8558-hd-wallpapers.jpg");
        background-attachment: fixed;
      }

      h1{
        color: rgb(241, 246, 5);
        font-size: 50px;
      }
      .objetivo h2{
        color: rgb(255, 255, 255);
        font-size: 40px;
      }
      .objetivo p{
        color:rgb(255, 255, 255) ;
        font-size: 20px;
      }
      .objetivo{
        padding: 50px;
        background-color: #337ab7;
      }
      .mision{
        padding: 50px;
        background-color: rgb(68, 224, 65);
      }
      .mision h2{
        color: rgb(0, 0, 0);
        font-size: 40px;
      }
      .mision p{
        color: rgb(0, 0, 0);
        font-size: 20px;
      }
      .vision{
        padding: 50px;
        background-color: rgba(0, 15, 2, 0.61);
      }
      .vision h2{
        color: rgb(255, 255, 255);
        font-size: 40px;
      }
      .vision p{
        color: rgb(241, 241, 246);
        font-size: 20px;
      }
      .aside{
        background-color: rgb(255,255, 255);
      }
      footer{
        background-color: rgb(0, 0, 0);
      }
      footer p{
        color: rgb(255, 255, 254);
      }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- nav -->
    <nav class="navbar navbar-inverse navbar-fixed-top" >
      <div class="container-fluid" >
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#top">Inicio</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
          <ul class="nav navbar-nav">
            <li><a href="#ob">Objetivos <span class="sr-only">(current)</span></a></li>
            <li><a href="#mi">Mision</a></li>
            <li><a href="#vi">Vision</a></li>
            <li><a href="#co">Contacto</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- end-nav -->


    <header class="header" id="top">
      <div class="container">
        <div class="col-md-6 col-sm-12 col-md-offset3 wrapper" >
            <br><br><br>
            <h1>TUCUMAN WEB</h1>
            <br>
        </div>
      </div>
    </header>


    <section class="objetivo" id="ob">
      <div class="container">
        <div class="col-lg-12 text-center">
          <h2>Objetivos</h2>
          <p>Brindar un servicio de diseño y desarrollo de páginas web y aplicaciones web</p>
          <p>Asegurar que las páginas o aplicaciones solicitadas por por nuestros clientes sean fáciles de aprender a utilizar por parte de los mismos</p>
        </div>
      </div>
    </section>

    <section class="mision" id="mi">
      <div class="container">
        <div class="col-lg-12 text-center">
          <h2>Misión</h2>
          <p>Somos una pequeña empresa que quiere dedicarse al desarrollo y diseño de páginas web y aplicaciones web altamente interactivas. Queremos brindar nuestro servicio acorde a lo que los clientes necesiten de manera que ellos vean mejoras en su organización. Utilizando las ultimas tecnologias OPEN SOURCE.</p>
        </div>
      </div>
    </section>


    <section class="vision" id="vi">
      <div class="container">
        <div class="col-lg-12 text-center">
          <h2>Visión</h2>
          <p>
            La visión de nuestra empresa es ser la mejora desarrollando páginas web en la región. Brindando un servicio de calidad, adaptándonos al impacto de las nuevas tecnologías y las necesidades cambiantes de nuestros clientes.
          </p>
        </div>
      </div>
    </section>

    <aside class="aside" id="co">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h3>Contactenos</h3>
            <ul class="list-inline">
              <li>
                <h4>
                <i class="fa fa-envelope-o fa-fw"></i>
                <a href="#">
                  <strong>info@tucuweb.com.ar</strong>
                </a>
                </h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </aside>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1 text-center">

            <p>
              <br>Tucuman Web
              <br>San Martin 169
              <br>San Miguel de Tucumán (4000), Argentina
            </p>
            <br>

            <ul class="list-inline">
              <li>
                <a href="#">
                  <i class="fa fa-facebook fa-fw fa-3x"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-instagram fa-fw fa-3x"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-twitter fa-fw fa-3x"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-97824932-1', 'auto');
      ga('send', 'pageview');

    </script>
  </body>
</html>
