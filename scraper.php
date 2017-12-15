<?php

   $html = file_get_contents('https://www.appliancesdelivered.ie/small-appliances/audio/radios'); 
   //get the html returned from the following url

   $radio_doc = new DOMDocument();

   libxml_use_internal_errors(TRUE); //disable libxml errors

   if(!empty($html)){ //if any html is actually returned

	   $radio_doc->loadHTML($html);
	   libxml_clear_errors(); //remove errors for yucky html
	
	   $radio_xpath = new DOMXPath($radio_doc);
      
	   $radio_row = $radio_xpath->query("//div[@class='col-xs-12 col-sm-7 col-lg-8]'");

	   if($radio_row->length > 0){
		   foreach($radio_row as $row){	      
			   echo $row->nodeValue . "<br/>";
			
		   }
	   }else {
	      echo "Empty";
	   }
   }


?>
