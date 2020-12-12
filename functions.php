<?php
//add_action('after_setup_theme', 'basic_setup_func');//use or catch action after theme setup
add_action('basic_func', 'basic_setup_func');//use, input or catch action

function basic_setup_func(){
	echo 'amra hook banabo';
}

//do_action( $tag, $arg);//make, output or create action


//add_action('header-part', 'header_part_func');
/*function header_part_func(){*/?><!--
	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Create Hooks</title>
	</head>
--><?php
/*}*/

//add param
add_action('header-part', 'header_part_func', 10, 2);
function header_part_func($first, $second){?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create Hooks</title>
    </head>
    <body>
    <h2>Website Content</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti fuga laudantium molestias.</p>
    <?php
    echo $first .' '. $second;
    ?>
    </body>
    </html>
	<?php
}

add_action('header-part', 'dekhi_ki_hoy', 9);//priority
function dekhi_ki_hoy(){
    echo 'kisu ekta';
}

add_filter('test', 'change_korbo');//use, input or catch filter
/*function change_korbo(){
    //echo 'something';//not echo
    return 'something';
}*/

//add param
function change_korbo($dser){
	//echo 'something';//not echo
	return $dser.' '.'something';
}

//apply_filters( 'test', 'ki obostha' );////make, output or create action