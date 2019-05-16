<?php
class parametrerController extends Controllers{
	
	
    
    function gomme(){
        $this->views->Msg = '<br>Affichage de gomme!';
         $this->views->renderView();

    }

    public function index(){

        $this->views->Msg = '<br>Affichage du menu Parametre!';
        $this->views->url = $this->route;
        $this->views->renderView();
    }
    
    //public function index(){
	//	$CheckModel = $this->chargeModel('Statistique');
    //    $this->views->Msg = $this->UseModel->GetData();
	//	$this->views->MsgStat = $this->UseModel->ViewStat();
	//	$this->views->MsgStatMulti = $this->UseModel->ViewStatMulti();
    //    $this->views->renderView();
    //}
    
    
}
