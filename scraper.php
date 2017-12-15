<?php
function getQuery () {
   $parameters=$_POST['parameters'];
   $html = file_get_contents('https://www.appliancesdelivered.ie/small-appliances/audio/radios'); 
   //get the html returned from the following url

   $radio_doc = new DOMDocument();

   libxml_use_internal_errors(TRUE); //disable libxml errors

   if(!empty($html)){ //if any html is actually returned

	   $radio_doc->loadHTML($html);
	   libxml_clear_errors(); //remove errors for yucky html
	
	   $radio_xpath = new DOMXPath($radio_doc);
      
	   //get all the h2's with an id
	   $radio_row = $radio_xpath->query("//div[@class='search-results-product row']");

	   if($radio_row->length > 0){
		   foreach($radio_row as $row){	      
			   echo $row->nodeValue . "<br/>";
			
		   }
	   }
   }
}

?>
