<?php

/* login.twig.php */
class __TwigTemplate_0aeb7ce4eddbaa55fd45b31ac02f1a47ab915a853d1a22ca4d4383da0e72ab5b extends Twig_Template
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
    <head>
        <title>login page - php salt and hash password - www.codeofaninja.com</title>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/style.css\" />
    </head>
<body>

<div id=\"loginForm\">

    <form action=\"lib/UserLogin.php\" method=\"post\">
    
        <div id=\"formHeader\">Website Login</div>
        
        <div id=\"formBody\">
            <div class=\"formField\">
                <input type=\"email\" name=\"email\" required placeholder=\"Email\" />
            </div>
            
            <div class=\"formField\">
                <input type=\"password\" name=\"password\" required placeholder=\"Password\" />
            </div>
        
            <div>
                <input type=\"submit\" value=\"Login\" class=\"customButton\" />
            </div>
        </div>
        <div id='userNotes'>
            New here? <a href='register.php'>Register for free</a>
        </div>
    </form>
    

    
</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.twig.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
