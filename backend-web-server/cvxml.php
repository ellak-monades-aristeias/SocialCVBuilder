<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$file_name = time() . $_POST['cv']['surname'];
	
	$fp = fopen('./output/xml/'.$file_name . '.xml', 'w');

	$dom = new DOMDocument('1.0', 'utf-8');

	$cv = parseInput($_POST['cv'], $dom);
	
	//var_dump($cv);
	
	//main nodes
	$identification = $dom->createElement('identification');
	$work_experience_list = $dom->createElement('workexperiencelist');
	$educationlist = $dom->createElement('educationlist');
	$languagelist = $dom->createElement('languagelist');
	$skilllist = $dom->createElement('skilllist');

	// 1)identification
	$fname = $dom->createElement('firstname');
	$fname->appendChild($cv['name']);
	
	$lname = $dom->createElement('lastname');
	$lname->appendChild($cv['surname']);
	
	$contactInfo = $dom->createElement('contactinfo');
	
	$address = $dom->createElement('address');
	$address->appendChild($cv['street']);
	$address->appendChild(lineBreak());
	$address->appendChild($cv['post_code']);
	$address->appendChild(lineBreak());
	$address->appendChild($cv['city']);
	$address->appendChild(lineBreak());
	$address->appendChild($cv['country']);
	
	$telephone = $dom->createElement('telephone');
	$telephone->appendChild($cv['phone']);
	
	$fax = $dom->createElement('fax');
	$fax->appendChild($cv['fax']);
	
	$cell = $dom->createElement('mobile');
	$cell->appendChild($cv['mobile']);
	
	$email = $dom->createElement('email');
	$email->appendChild($cv['email']);
	
	$contactInfo->appendChild($address);
	$contactInfo->appendChild($telephone);
	$contactInfo->appendChild($fax);
	$contactInfo->appendChild($cell);
	$contactInfo->appendChild($email);
	
	//demographics
	$demographics = $dom->createElement('demographics');
	
	$dob = $dom->createElement('birthdate');
	$dob->appendChild($cv['dob']);
	
	$demographics->appendChild($dob);
	
	//finalize identification
	$identification->appendChild($fname);
	$identification->appendChild($lname);
	$identification->appendChild($contactInfo);
	$identification->appendChild($demographics);
	
	
	// 2) workexperiences
	$workexperiences = $dom->createElement('workexperiencelist');
	
	foreach ($_POST['cv']['pastwork'] as $wexp) {
		
		$wexp = parseInput($wexp, $dom);
	
		$workexperience = $dom->createElement('workexperience');
		
		$period = $dom->createElement('period');
		
		$from = $dom->createElement('from');
		$to = $dom->createElement('to');
		
		$from->appendChild($wexp['from']);
		$to->appendChild($wexp['to']);
		
		$period->appendChild($from);
		$period->appendChild($to);
		
		$workexperience->appendChild($period);
		
		
		$position = $dom->createElement('position');
		$activities = $dom->createElement('activities');
		$employer = $dom->createElement('employer');
		
		$position->appendChild($wexp['position']);
		$activities->appendChild($wexp['activities']);
		$employer->appendChild($wexp['employer']);
		
		$workexperience->appendChild($position);
		$workexperience->appendChild($activities);
		$workexperience->appendChild($employer);
		
		$workexperiences->appendChild($workexperience);
		
	}
	
	
	// 3) education
	foreach ($_POST['cv']['education'] as $edu) {
		
		$edu = parseInput($edu, $dom);
	
		$education = $dom->createElement('education');
		
		$period = $dom->createElement('period');
		
		$from = $dom->createElement('from');
		$to = $dom->createElement('to');
		
		$from->appendChild($edu['from']);
		$to->appendChild($edu['to']);
		
		$period->appendChild($from);
		$period->appendChild($to);
		
		$education->appendChild($period);
		
		$title = $dom->createElement('title');
		$level = $dom->createElement('level');
		$organisation = $dom->createElement('organisation');
		$skills = $dom->createElement('skills');
		
		$title->appendChild($edu['title']);
		$level->appendChild($edu['level']);
		$organisation->appendChild($edu['organisation']);
		$skills->appendChild($edu['skills']);
		
		$education->appendChild($title);
		$education->appendChild($level);
		$education->appendChild($organisation);
		$education->appendChild($skills);
		
		$educationlist->appendChild($education);
		
	}
	
	// 4) languages
	foreach ($_POST['cv']['languages'] as $lng) {
		
		$lng_type = $lng['type'];
		$levels = parseInput($lng['level'], $dom);
		$lng = parseInput($lng, $dom);
	
		$language = $dom->createElement('language');
		
		$language->setAttribute('type', $lng_type);
		
		$name = $dom->createElement('name');
		$level = $dom->createElement('level');

		$name->appendChild($lng['language']);
		
		$levelListening = $dom->createElement('listening');
		$levelReading = $dom->createElement('reading');
		$levelSpokenInteraction = $dom->createElement('spokeninteraction');
		$levelSpokenProduction = $dom->createElement('spokenproduction');
		$levelWriting = $dom->createElement('writing');
		
		$levelListening->appendChild($levels['listening']);
		$levelReading->appendChild($levels['reading']);
		$levelSpokenInteraction->appendChild($levels['spoken_interaction']);
		$levelSpokenProduction->appendChild($levels['spoken_production']);
		$levelWriting->appendChild($levels['writing']);
		
		$level->appendChild($levelListening);
		$level->appendChild($levelReading);
		$level->appendChild($levelSpokenInteraction);
		$level->appendChild($levelSpokenProduction);
		$level->appendChild($levelWriting);
		
		$language->appendChild($name);
		$language->appendChild($level);
		
		$languagelist->appendChild($language);
		
	}
	
	// 5) skills
	foreach ($_POST['cv']['skills'] as $skl) {
		
		$skill = $dom->createElement('skill');
		$skill->setAttribute('type', $skl['type']);
		
		$skl = parseInput($skl, $dom);
		
		$skill->appendChild($skl['skill']);
		
		$skilllist->appendChild($skill);
		
	}
	
	//append main nodes
	$dom->appendChild($identification);
	$dom->appendChild($workexperiences);
	$dom->appendChild($educationlist);
	$dom->appendChild($languagelist);
	$dom->appendChild($skilllist);
	
	
	//echo htmlentities($dom->saveXML());
	
	//save XML to file
	fwrite($fp, $dom->saveXML());
	fclose($fp);
	
	//upload the photo
	if ($_FILES['photo']['tmp_name']) {
		$ext = explode('.', $_FILES['photo']['name']);
		$ext = array_pop($ext);
		move_uploaded_file($_FILES['photo']['tmp_name'], './output/image/'.$file_name . ".$ext");
	}
	
	
	//start xml download
	header("Content-Type: application/xml");
	header('Content-disposition: attachment; filename="'.$file_name.'.xml"');
	
	readfile('./output/xml/'.$file_name . '.xml');


}

function lineBreak() {
	global $dom;
	return $dom->createTextNode("\n");
}

//convret string to dom text nodes
function parseInput($data, $dom, $dbg = FALSE) {
	$res = array();

	foreach ($data as $k => $val) {
		if (is_array($val)) {continue;}
		$res[$k] = $dom->createTextNode($val);
	}
	
	return $res;
	
}

?>
