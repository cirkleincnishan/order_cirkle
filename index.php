<?php

$url ="https://6fe45304a17ff28a9b23c49cff74ff08:1c699abbd938747b6a1329de18ed6465@cirkle-1.myshopify.com/admin/orders.json";
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_VERBOSE, 0);
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
		// curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($orders1));
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$response = curl_exec ($curl);
		curl_close ($curl);
		$data = json_decode($response,true);
		echo'<pre>';
		print_r(($data['orders']));
		echo'</pre>';
		sleep(0.5);
?>
