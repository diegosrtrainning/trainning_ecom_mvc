<?php

namespace Controllers{

    require '../../vendor/autoload.php';    
        
    use \Symfony\Component\Routing\Annotation\Route;

    class CargoController
    {
        /**
        * @Route("/cargo")
        */
        public function index(){
            $cargoView = new \Views\CargoView();

            $cargoModel = new \Models\Cargo();
            $cargos = $cargoModel->findAll();    

            $resultado = $cargoView->index($cargos);
            return $resultado;
        }
    }
}

?>