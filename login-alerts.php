<?php
/*
Plugin Name: WP Login Alerts by DigiP
Plugin URI: http://www.ticktockcomputers.com/
Description: E-mails the site owner if anyone reaches or attempts to login to the site. Also shows the usernames they tried to brute force in with.
Version: 2013-05-30.10
Author: DigiP
Author URI: http://www.ticktockcomputers.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if (preg_match('#'.basename(__FILE__).'#', $_SERVER['PHP_SELF'])) die('Access denied - you cannot directly call this file');

/* Plug-in requres use of php mail functions! */
function my_login_alerts() { 

$ip = $_SERVER['REMOTE_ADDR'];
$hostaddress = gethostbyaddr($ip);
$browser = htmlspecialchars($_SERVER['HTTP_USER_AGENT'],ENT_QUOTES | ENT_HTML401,"UTF-8");
$referred =  htmlspecialchars($_SERVER['HTTP_REFERER'],ENT_QUOTES | ENT_HTML401,"UTF-8"); // a quirky spelling mistake that stuck in php
//$date=date("m/d/y H:i:s O"); //timestamp
$d1=date("m/d/y");
$d2=date("H");
$d3=date("i:s");
$d4=$d2;
$date =("$d1 $d4:$d3 ");

if(isset($_POST['log'])) {

$who = " By ".($_POST['log']);
} else {
$who = " Page Has Been Reached but not tried to login yet.";
}

$admin_email = get_settings('admin_email');
sleep(5);

$to = $admin_email; //E-Mails the site owner, set in the dashboard Settings panel.
if(isset($_POST['log'])) {
	$subject = "Someone using the name ".($_POST['log'])." with IP ".$ip." has tried logging into ".get_home_url( $blog_id ).". Review the info.";
} else {
	$subject = "Login page has been reached on ".get_home_url( $blog_id )."by IP ".$ip.". Review the info.";
}
$message = " Wordpress Login Attempt".htmlentities($who)."\r\n Date: ".$date." \r\n IP: ".$ip." \r\n Hostname-Resolved: ".$hostaddress." \r\n Browser: ".htmlentities($browser)." \r\n Referral: ".htmlentities($referred)." \r\n";
$from = "no-reply@ticktockcomputers.com"; //$admin_email;
$headers = "From: $from";
mail($to,$subject,$message,$headers);

}

add_action( 'login_enqueue_scripts', 'my_login_alerts' );

function my_login_alerts_url() {
    return get_bloginfo( 'url' );
}

add_filter( 'login_headerurl', 'my_login_alerts_url' );

function my_login_alerts_url_title() {
    return 'All login attempts are reported to the Administrator. You have been warned.';
}
add_filter( 'login_headertitle', 'my_login_alerts_url_title' );


if (!empty($_POST['log'])) {
my_login_alerts();
}

?>
