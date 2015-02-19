<?php

/* article.twig.php */
class __TwigTemplate_73b72ad71546faa2dfbaa5c8ccb581e63f344846ebfa52f1b7fd467ac0358af9 extends Twig_Template
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

    <title>Blog post</title>

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

        <div class=\"row\">

            <!-- Blog Post Content Column -->
            <div class=\"col-lg-8\">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "</h1>

                <!-- Author -->
                <p class=\"lead\">
                    by <a href=\"#\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "author", array()), "html", null, true);
        echo "</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class=\"glyphicon glyphicon-time\"></span> Posteado : ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "created_at", array()), "html", null, true);
        echo "</p>

                <hr>


                <!-- Post Content -->
                <p class=\"lead\">";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content", array()), "html", null, true);
        echo "</p>

                <hr>

               

            

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class=\"col-md-4\">

                

                <!-- Blog Categories Well -->
                <div class=\"well\">
                    <h4>Blog Categories</h4>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <ul class=\"list-unstyled\">
                                <li><a href=\"#\">Category Name</a>
                                </li>
                                <li><a href=\"#\">Category Name</a>
                                </li>
                                <li><a href=\"#\">Category Name</a>
                                </li>
                                <li><a href=\"#\">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    <!-- /.row -->
                </div>

             

            </div>

        </div>
        <!-- /.row -->

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
        return "article.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 85,  105 => 79,  96 => 73,  89 => 69,  19 => 1,);
    }
}
