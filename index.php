<?php
//do_action( 'header-part');//make, output or create action
do_action( 'header-part', 'selim', 'reza');//add param
?>
<!--<body>
<h2>Website Content</h2>
<p><?php /*do_action( 'basic_func');*/?></p>
</body>
</html>-->

<?php
//apply_filters('test', 'ki obostha');//no result because default return
echo apply_filters('test', 'ki obostha');////make, output or create action
?>
