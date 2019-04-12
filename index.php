<?PHP
/*            AUTHOR|EMAIL: Christopher "Nam2long" Sparrowgrove | 089235.githubcontact@sparrowgrove.com
 *                 WEBSITE: https://christopher.sparrowgrove.com
 *  NAME | FILE | PROGLANG: Sparrow-WMS | INDEX | PHP & HTML 
 *             DESCRIPTION: a php script written for the purpose of allowing webmasters & website owners to put their website into maintenance mode with ease.
 *                    DATE: Re-Written for public Release April 12, 2019
 *                 LICENSE: GNU GPLv3
*/

require_once ('config/Sparrow-WMS/config.php'); //Configuration File Required

$server_status = $_SESSION['status']; //Set Mode via a php session
switch($server_status)
 {
   case 0: //Normal Mode
     include ('home.php'); //home Page
     break; 
     
   case 1||2|3: //Mode: Else
     include ('maint.php'); //Maint page
     break;
     
   default: //invalid or no status set
     include ('404.php'); //Error Page
     break; 
?>
