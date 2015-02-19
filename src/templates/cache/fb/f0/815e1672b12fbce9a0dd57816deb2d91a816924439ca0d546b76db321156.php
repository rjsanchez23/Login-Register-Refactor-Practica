<?php

/* update.twig.php */
class __TwigTemplate_fbf0815e1672b12fbce9a0dd57816deb2d91a816924439ca0d546b76db321156 extends Twig_Template
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
        echo "

<!DOCTYPE html>
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
    </br>
      <h2>Editar articulo</h2>
      <form role=\"form\" method=\"post\" action=\"update.php\">
      <input type=\"hidden\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
        echo "\" name=\"id\">
        <div class=\"form-group\">
          <label for=\"Autor\">Autor:</label>
          <input type=\"text\" class=\"form-control\" id=\"Autor\" name=\"author\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "author", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
          <label for=\"titulo\">Titulo:</label>
          <input type=\"text\" class=\"form-control\" id=\"titulo\" name=\"title\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
          <label for=\"contenido\">Contenido:</label>
          <input type=\"text\" class=\"form-control\" id=\"contenido\" name=\"content\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
          <label for=\"contenido\">Tags:</label>
          <input type=\"text\" class=\"form-control\" id=\"tags\" name=\"tags\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "tags", array()), "html", null, true);
        echo "\">
        </div>
       
        <button type=\"submit\" class=\"btn btn-default\" name=\"guardar\">Guardar</button>
      </form>
    </div>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "update.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 66,  91 => 62,  84 => 58,  77 => 54,  71 => 51,  19 => 1,);
    }
}
