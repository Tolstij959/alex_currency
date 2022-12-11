<?php
require_once 'config.php';
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
$page = (isset($_GET['page']) ? $_GET['page'] : 'main');
?>
<html>
<head>
<title>Currency_Alex</title>
</head>
<body>
<header>
    <nav>
        <a href="index.php?page=main">Главная </a> | 
        
    </nav>

</header>

<?php include basename($page).'.php'; ?>
<?php include 'currency.php'; ?>

<footer>
    Снова здорово !
</footer>
</body>
</html>