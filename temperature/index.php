
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   echo file_get_contents(__DIR__ . '/temp.html');
   
   exit;
}




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   echo file_get_contents(__DIR__ . '/temp.html');
   include __DIR__ . '/temp.php';
   exit;
}
?>
