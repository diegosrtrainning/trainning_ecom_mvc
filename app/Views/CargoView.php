<?php

namespace Views{    

    require __DIR__ . '/../../vendor/autoload.php';
    
    class CargoView {

        private $loader;
        private $twig;

        public function __construct()
        {
            $this->loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
            $this->twig   = new \Twig\Environment($this->loader);
        }

        public function index($cargos){            
            return $this->twig->render('cargos.html', ["cargos" => $cargos]);
        }
    }
}

?>