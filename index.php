
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="index.js"></script>
Lien de la page: <input type="text" name="fname"><br>


<script type="text/javascript">
      
    var element = document.getElementById('input');
    console.log(element);
  
    </script>
<?php 




	

session_start();
require_once __DIR__ . '/Facebook/autoload.php';
$fb = new \Facebook\Facebook([
  'app_id' => '302598076841406',
  'app_secret' => 'e2db62320fb2540967c4e3258d6c2490',
  'default_graph_version' => 'v2.8',
]);
   $permissions = ['']; // optional
   $helper = $fb->getRedirectLoginHelper();
   $accessToken = $helper->getAccessToken();
   

	
 		$url = "https://graph.facebook.com/v2.8/197875396963676?fields=name,id,about,description,link&access_token=181182242224859|6b420d60a65a990be00082571c32b382";
		$headers = array("Content-type: application/json");
		
			 
		 $ch = curl_init();
		 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		 curl_setopt($ch, CURLOPT_URL, $url);
	         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
		 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
		 curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');  
		 curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');  
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
		 curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/20070309 Firefox/2.0.0.3"); 
		 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
		   
		 $st=curl_exec($ch); 
		 $result=json_decode($st,TRUE);
		  echo "<pre>";
		  var_dump($result);
		//$fbUser = $facebook->api('/197875396963676');
	 	//var_dump($fbUser);
	        //print_r($fbUser);
 	        //$events = $facebook->api('197875396963676?fields=events.limit(5){name,cover,start_time}');
		//echo $event['name'];   
	    	//print_r($events);


		foreach($result as $data){
  	 		 echo'- '.$data.'<br/>';
		}
		// echo "Evenements :".$result['events']['data'][1]."<br>";
		 echo "</center>";
		 
		

	
?>
