<?php
/*
*  Prototype du MVC pour RecruteAnim
*
* date modifier : 10 november 2013
* @since 13 october 2013
* @author Angelus76
* @copyright RecruteAnim
* @version 1.32.a
*
*/
session_start();
$_SESSION['login'] = 1;

define("ROOT", realpath(__dir__ . "/"));
define("WEB_ROOT", substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], "/index.php")));

define("Apps_Root", ROOT . "/app/");
define("Apps_Model", ROOT . "/app/models/");
define("Apps_Views", Apps_Root . "views/");
define("Apps_Pages", Apps_Views . "pages/");
define("Apps_Style", WEB_ROOT . "/app/views/resources/");
define("API","../app/views/resources/");

require_once "config/Version.php";
require_once(ROOT . "/root/Apps.php");
$StartApps = new Apps();
$StartApps->run();
?>
























<!--  Partie Utile Uniquement Pour Le Dev
      Ligne de débugage -->

<div id="myModal" class="modal fade myModal" tabindex="-1" role="dialog" aria-labelledby="Fenêtre de débug !" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  <div class="modal-content">
	  <header class="modal-header">
          <h3 class="text-danger">Fenêtre de Débug.</h3>
          <button class="close" data-dismiss="modal">&times;</button>
        </header>
    <pre style="font-size: 9px">
<?php
//Liste toutes les classes définies dans PHP
echo '<font color="#009900" face="Arial Black">Class et Fonction Associé disponible</font> :<br>############<br>';
 $ClassTotal = get_declared_classes();
 for( $i = 130; $i < count($ClassTotal); $i++){
	 echo $ClassTotal[$i]."<br>";
         print_r(get_class_methods($ClassTotal[$i]));
 }

//echo '<font color="#009900" face="Arial Black">Fonction disponible dans class</font> :<br>############<br>';
// print_r(get_class_methods(new consulterController()));
 
//Liste toutes les fonctions définies 
/*echo '<font color="#009900" face="Arial Black"><p></p>Fonction independent des class disponible :</font><br>############<br>';
 $FunctionUser = get_defined_functions();
 print_r($FunctionUser["user"]);

*/

echo '<font color="#009900" face="Arial Black"><p></p>Constantes et leurs valeurs disponible</font> :<br>############<br>';
 $ConstanteUser = get_defined_constants(true);
 print_r($ConstanteUser["user"]);

        /*
          echo '<font color="#009900" face="Arial Black"><p></p>Interfaces disponible :</font><br>############<br>';
          print_r(get_declared_interfaces());

          echo '<font color="#009900" face="Arial Black"><p></p>Variable disponible :</font><br>############<br>';
          $VarUser = get_defined_vars();
          print_r($VarUser);

          echo "</pre><br />Fin Débugage Total<br><hr>";
          /* */
        ?>
    </pre>
	  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn  btn-success">Fermer</button>
  </div>
  </div>
</div>
</div>
<!-- Modal de versioning -->
 <div class="modal" id="ModalVersion">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <header class="modal-header">
          <h3 class="text-success">Suivre le versioning</h3>
          <button class="close" data-dismiss="modal">&times;</button>
        </header>
        <div class="modal-body">
		  <p><strong><i class="fas fa-archive"></i> W20.19.5.e </strong> <br /> - Ajout lien vers API<br />- Ajout Google map Test</p>
		  <p><strong><i class="fas fa-archive"></i> W20.19.5.d </strong> <br /> - Misa a jour pour Font Awesome<br />- Supression ancien Font</p>
          <p><strong><i class="fas fa-archive"></i> W20.19.4.c </strong> <br /> - Misa a jour pour bootstrap v4</p>
         </div>
        <footer class="modal-footer">
          <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
        <footer>
      </div> 
    </div> 
  </div> 
