<?php
require_once( 'facebook.php' );
$facebook = new \Facebook(array(
 
                'appId'  => '302598076841406',
 
                'secret' => 'e2db62320fb2540967c4e3258d6c2490',
 
                'cookie' => true,
 
            ));
 
		$fbUser = $facebook->api('/197875396963676');
		print_r($fbUser);
		$fbUser = $facebook->api('197875396963676?fields=events.limit(5){name,cover,start_time}');
		print_r($fbUser);
      
?>
