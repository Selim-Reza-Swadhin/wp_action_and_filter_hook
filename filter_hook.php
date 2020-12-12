<?php
//add the code functions.php
add_filter('the_title', 'replace_korbo');//filter means modified

/*function replace_korbo(){
	return 'replace koreci';
}*/

//add param
/*function replace_korbo($default){
	return $default . 'replace koreci';
}*/

function replace_korbo($selim){
	return $selim .' '. 'replace koreci';
}


add_filter('test', 'change_korbo');//use, input or catch filter


/*function change_korbo(){
	//echo 'something';//not echo
	return 'something';
}*/


//apply index.php or other.php
//apply_filters('test', 'ki obostha');//no result because default return
//echo apply_filters( 'test', 'ki obostha' );////make, output or create action

