<?php

/* home.twig.php */
class __TwigTemplate_9469cab65ab30c82a864f5d4077d021f1d2378cda1e470cd4720689b3e068c97 extends Twig_Template
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
        echo "<html>
\t<head>
\t\t<title>Login correct</title>
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"../../assets/css/style.css\" />
\t</head>
<body>

<div id=\"loginForm\">

\t<div>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</div>
\t\t
</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "home.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
