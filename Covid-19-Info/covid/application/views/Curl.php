<?php
//1 create curl resource
$curl=curl_init();

//2 set curl option
curl_setopt($curl, CURLOPT_URL,'http://www.google.com/');
//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  //use when https instead of http

//3  run curl
curl_exec($curl);
//4 close curl
curl_close($curl);


//apikey=f187f9430eb3edd2c9b6fe8ca04ad8af


?>  

