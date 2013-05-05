<?php  

/**********************************************************************
* @author     Bryan Chapman <chapware@gmail.com> 
* @company    Chapware Technologies <http://bryan.pcsclassifieds.com/>
* @version    1.1.3  (c)2006-2013 Chapware Technologies
**********************************************************************/
  
  session_start();
  
 // if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 if ( $bryan != '666') { exit('What are you doing in my shit? Get out of here!'); }

$referscript = $_SERVER['HTTP_REFERER'];

/******************** Copyright Info ********************/
define(" "," ");
define("COMPANY","Chapware Technologies");
define("AUTHOR","Bryan Chapman");
define("EMAIL","chapware@gmail.com");
define("WEB_SITE","http://bryan.pcsclassifieds.com/");
define("PCS_SITE","http://pcsclassifieds.com/");
define("VERSION","v1.46");
define("APP_NAME","auth.php");
define("COPYRIGHT",DATE('Y'));
define(" "," ");
/******************End Copyright Info ********************/

	// error_reporting(E_ERROR | E_PARSE);	

 ?>
 