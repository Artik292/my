<!DOCTYPE html>
<html>
<title>HTML with PHP</title>
<body>
<h1>My Example</h1>
<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('artik292');
$app->initLayout('Centered');
?>
<b>Here is some more HTML</b>
<?php
//more PHP code
?>
</body>
</html>
