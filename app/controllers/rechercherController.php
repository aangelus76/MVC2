<?php

class rechercherController extends Controllers{

    public function index(){

        $this->views->Msg = '<br>Affichage du menu Recherche!<br>';
        $this->views->url = $this->route;
        $this->views->renderView();
    }

//    public function tous(){
//
//        $this->views->Msg = '<br>Consultation de toute la liste';
//        $this->views->renderView();
//    }
//
//    public function de(){
//
//        $this->views->Msg = '<br>Consultation ' . $this->route['params'][0];
//        $this->views->renderView();
//    }

    

}
