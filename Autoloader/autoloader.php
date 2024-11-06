<?php 
define("ROOT_DIR", $_SERVER['DOCUMENT_ROOT']);
define("CURRENT_DIR", dirname(__FILE__));
define("MODEL_BASE_DIR", dirname(__FILE__).'/../Models/Base');
define("MODEL_DIR", dirname(__FILE__).'/../Models');
define("CONTROLLERS_DIR", dirname(__FILE__).'/../controllers');
define("DB_DIR", dirname(__FILE__).'/../DB');
define("ROUTE_DIR", dirname(__FILE__).'/../routing');

$dirListWithClasses = array(
  MODEL_BASE_DIR,
  MODEL_DIR,
  CONTROLLERS_DIR,
);

function load_classes($listDirWithClasses): Void {
  $classPattern = '/^[A-Z].*((Class\.php)|(Controller\.php))/i';
  foreach($listDirWithClasses as $dir){
    $fileList = scandir($dir);
    foreach ($fileList as $fileName) {
      if (preg_match($classPattern, $fileName)){
        try {
          require_once $dir.DIRECTORY_SEPARATOR.$fileName; 
        }
        catch(Exception $exp){
          var_dump($exp);
        }
      }
    }
  }
}

function load_routes($)

load_classes($dirListWithClasses);



