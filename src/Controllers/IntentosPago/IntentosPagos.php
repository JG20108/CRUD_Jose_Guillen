<?php

namespace Controllers\IntentosPago;

use Controllers\PublicController;
use Views\Renderer;

class IntentosPagos extends PublicController{

    public function run(): void{
        $viewData = arraY();
        $viewData["IntentosPagos"] = \Dao\IntentosPagos\IntentosPagos::obtenerTodos();
        Renderer::render('IntentosPago/IntentosPagos',$viewData);
    } 

}

?>