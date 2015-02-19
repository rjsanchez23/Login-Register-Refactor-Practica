<?php

/* list.twig.php */
class __TwigTemplate_a1501930525fa232dddfc4164bdfb4136816683f7a8e6cd230177f860cf1246b extends Twig_Template
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
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"assets/css/blog-post.css\" rel=\"stylesheet\">

   
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

    <!-- Page Content -->
    <div class=\"container\">

    <table id=\"table-transform\" data-toolbar=\"#transform-buttons\">
    <thead>
    <tr>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Contenido</th>
        <th>Tags</th>
        <th>Creado</th>
        <th>Editar</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 73
            echo "    <tr>
        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "tags", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "created_at", array()), "html", null, true);
            echo "</td>
        <td><a href=\"update.php?article=";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">Editar</a></td>
    </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "    </tbody>
</table>
 
       


        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                 
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=\"assets/js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"assets/js/bootstrap.min.js\"></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "list.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 82,  119 => 79,  115 => 78,  111 => 77,  107 => 76,  103 => 75,  99 => 74,  96 => 73,  92 => 72,  19 => 1,);
    }
}
