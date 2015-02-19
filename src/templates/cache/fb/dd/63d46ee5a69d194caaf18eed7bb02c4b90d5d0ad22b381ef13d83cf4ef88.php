<?php

/* index.twig.php */
class __TwigTemplate_fbdd63d46ee5a69d194caaf18eed7bb02c4b90d5d0ad22b381ef13d83cf4ef88 extends Twig_Template
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
 ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 60
            echo "      
   
        <div class=\"row\">

            <!-- Blog Post Content Column -->
            <div class=\"col-lg-8\">

                <!-- Blog Post -->

                <!-- Title -->
                <h1><a href=\"article.php?article=";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></h1>

                <!-- Author -->
                <p class=\"lead\">
                    by <a href=\"#\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class=\"glyphicon glyphicon-time\"></span> Posteado : ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "created_at", array()), "html", null, true);
            echo "</p>

                <hr>

                <!-- Post Content -->
                <p class=\"lead\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "</p>
                <span>Tags: ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "tags", array()), "html", null, true);
            echo "</span>
                <hr>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class=\"col-md-4\">

                


             

            </div>

        </div>
        <!-- /.row -->
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
        <hr>

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
        return "index.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 104,  125 => 86,  121 => 85,  113 => 80,  104 => 74,  95 => 70,  83 => 60,  79 => 59,  19 => 1,);
    }
}
