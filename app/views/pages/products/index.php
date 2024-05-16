<?php
$title = 'Products';
ob_start();
?>

<h1>products</h1>

<?php
$content = ob_get_clean();
include __DIR__ . '/../../layouts/authenticated.php';
?>