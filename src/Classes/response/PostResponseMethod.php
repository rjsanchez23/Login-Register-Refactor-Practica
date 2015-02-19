<?php


namespace src\classes\response;



class PostResponseMethod implements ResponseMethodInterface{

    private $twig;
    const TEMPLATES_PATH = '/../../templates' ;


    public function __construct(){

        $loader           = new \Twig_Loader_Filesystem(__DIR__.self::TEMPLATES_PATH );
        $this->twig       = new \Twig_Environment( $loader, $this->getTwigOptions() );
        $this->twig->addExtension(new \Twig_Extension_Debug());
    }
    public function response($message, $template = null)
    {
        $response = array('message' => $message);
         echo $this->twig->render($template, $response );

    }

    private function getTwigOptions()
    {
        $cache =  __DIR__.'/../../templates/cache';
        return $options = array(
            'cache'  => $cache,
            'debug'  => true,
            'autoscape' => true,
        );

    }

}