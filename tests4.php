<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
    <body>
<?php
echo ReadXml('<Address><to>James</to><from>Jani</from><heading>Reminder</heading><body>Please check your mail.</body></Address>');
    function ReadXml($xmlstr) {
 		$counter=0;
 		$news_start_pos=0;
 		if (strpos(strtolower($xmlstr),'<address>',$news_start_pos)!==false) {
	 		$out='Address';
	 		if (strpos(strtolower($xmlstr),'<to>',$news_start_pos)!==false) {
	 			$to_start=strpos($xmlstr,'<to>',$news_start_pos);
	 			$to_end=strpos($xmlstr,'</to>',$to_start);
	 			$to_val=substr($xmlstr,$to_start+4,$to_end-($to_start+4));
	 			if ($to_val!='') {
	 				$out.='\nto: '.$to_val;
	 			}
	 		}
	 		if (strpos(strtolower($xmlstr),'<from>',$news_start_pos)!==false) {
	 			$from_start=strpos($xmlstr,'<from>',$news_start_pos);
	 			$from_end=strpos($xmlstr,'</from>',$to_start);
	 			$from_val=substr($xmlstr,$from_start+6,$from_end-($from_start+6));
	 			if ($from_val!='') {
	 				$out.='\nfrom: '.$from_val;
	 			}
	 		}
	 		if (strpos(strtolower($xmlstr),'<heading>',$news_start_pos)!==false) {
	 			$heading_start=strpos($xmlstr,'<heading>',$news_start_pos);
	 			$heading_end=strpos($xmlstr,'</heading>',$heading_start);
	 			$heading_val=substr($xmlstr,$heading_start+9,$heading_end-($heading_start+9));
	 			if ($heading_val!='') {
	 				$out.='\nheading: '.$heading_val;
	 			}
	 		}
	 		if (strpos(strtolower($xmlstr),'<body>',$news_start_pos)!==false) {
	 			$body_start=strpos($xmlstr,'<body>',$news_start_pos);
	 			$body_end=strpos($xmlstr,'</body>',$body_start);
	 			$body_val=substr($xmlstr,$body_start+6,$body_end-($body_start+6));
	 			if ($body_val!='') {
	 				$out.='\nbody: '.$body_val;
	 			}
	 		}
	 		return $out;
 		}
    }

//$xmlstr= '<Address><to>James</to><from>Jani</from><heading>Reminder</heading><body>Please check your mail.</body></Address>' 
?>
    </body>
</html>