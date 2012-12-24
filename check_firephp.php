<html >
<head>
<meta http-equiv="Content-Type"
content="text/html;charset=ISO-8859-1">
</head>

<body>
Fred
</body>
</html>


<?php

require_once('FirePHPCore/FirePHP.class.php');
$firephp = FirePHP::getInstance(true);
$firephp->log('Plain Fred Message');     // or FB::
$firephp->info('Info Message');     // or FB::
$firephp->warn('Warn Message');     // or FB::
$firephp->error('Error Message');   // or FB::
 
$firephp->log('Message','Optional Label');

$table   = array();
$table[] = array('Col 1 Heading','Col 2 Heading');
$table[] = array('Row 1 Col 1','Row 1 Col 2');
$table[] = array('Row 2 Col 1','Row 2 Col 2');
$table[] = array('Row 3 Col 1','Row 3 Col 2');
 
$firephp->table('Table Label', $table);  // or FB::
 

$firephp->trace('Trace Label');
 
 $firephp->registerErrorHandler(
            $throwErrorExceptions=false);
$firephp->registerExceptionHandler();
$firephp->registerAssertionHandler(
            $convertAssertionErrorsToExceptions=true,
            $throwAssertionExceptions=false);
 
try {
  throw new Exception('Test Exception');
} catch(Exception $e) {
  $firephp->error($e);  // or FB::
}
 

?> 