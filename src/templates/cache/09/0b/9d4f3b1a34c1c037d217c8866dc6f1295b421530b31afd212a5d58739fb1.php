<?php

/* create.twig.php */
class __TwigTemplate_090b9d4f3b1a34c1c037d217c8866dc6f1295b421530b31afd212a5d58739fb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  </head>

  <body>
  <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Navegación</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Navegación</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"index.php\">Home</a>
                    </li>
                    <li>
                        <a href=\"create.php\">Nuevo</a>
                    </li>
                     <li>
                        <a href=\"list.php\">Lista Editar</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class=\"container\">
    </br>
    </br>
    </br>
      <h2>Crear nuevo articulo</h2>
      <form role=\"form\" method=\"post\" action=\"create.php\">
        <div class=\"form-group\">
          <label for=\"Autor\">Autor:</label> 
          <input type=\"text\" class=\"form-control\" id=\"Autor\" name=\"author\">
        </div>
        <div class=\"form-group\">
          <label for=\"titulo\">Titulo:</label>
          <input type=\"text\" class=\"form-control\" id=\"titulo\" name=\"title\">
        </div>
        <div class=\"form-group\">
          <label for=\"contenido\">Contenido:</label>
          <input type=\"text\" class=\"form-control\" id=\"contenido\" name=\"content\" >
        </div>
        <div class=\"form-group\">
          <label for=\"contenido\">Tags:</label>
          <input type=\"text\" class=\"form-control\" id=\"tags\" name=\"tags\" >
        </div>
       
        <button type=\"submit\" class=\"btn btn-default\" name=\"guardar\">Guardar</button>
      </form>
    </div>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "create.twig.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
