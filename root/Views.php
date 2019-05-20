<?php

class Views{
    
    private $_route;
    protected $_content = "";
	protected $_layout = '';
	
    public function __construct($route){
        $this->_route = $route;
    }

    public function renderView(){
        ob_start();
        include($this->ReturnView());
        $this->_content = ob_get_clean();
		/*if($_SESSION['login'] == 1){
			$this->_layout = 'layoutdash';
		}
		else{
			$this->_layout = 'layout';
		}*/
		$this->_layout = 'layout';
        include(Apps_Pages . $this->_layout . ".phtml");
    }

    public function content(){
        return $this->_content;
    }

    public function ReturnView(){
      $DirPath = Apps_Pages . str_replace("Controller","",$this->_route["controller"]) . "/";
      $Page = $this->_route["page"] . '.phtml';
      $Return = $DirPath.$Page;
      return $Return;
    }
}
