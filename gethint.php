<?php
        $ch = curl_init();
		$a = $_GET["q"];
		$a;
		$data = array('article' => $a);
		curl_setopt($ch, CURLOPT_URL, 'http://api.lymbix.com/tonalize'); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('AUTHENTICATION: ae4114857cada2f13949b445044a2dd94f4151e2','ACCEPT: application/json','VERSION: 2.2'));
        curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);      
        curl_close($ch);
		$sentiment = json_decode($output,true);
		$dome = $sentiment['dominant_emotion'];
		if($dome=="fear_uneasiness")
			$dome="Fear and uneasiness";
		if($dome=="affection_friendliness")
			$dome="Affection and friendliness";
		if($dome=="enjoyment_elation")
			$dome="Enjoyment and elation";
		if($dome=="contentment_gratitude")
			$dome="Contentment and gratitude";
		if($dome=="sadness_grief")
			$dome="Sadness and grief";
		if($dome=="anger_loathing")
			$dome="Anger and loathing";
		if($dome=="humiliation_shame")
			$dome="Humliation and shame";							
		echo $dome;	
		
?>