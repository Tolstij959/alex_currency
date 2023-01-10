<link rel="stylesheet" href="styles.css" type="text/css">
<link type="image/x-icon" href="/favi2.png" rel="shortcut icon">
<link type="Image/x-icon" href="/favi2.png" rel="icon">
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
<button> 
    <a href='VK_Authorisation.php'>Авторизуйся через ВК</a>
</button>
<h2>
    <ul>
    <?php 
    
    include 'currency.php'; 
    ?>
    </ul>
</h2>
</body>
<footer>
    Снова здорово !
</footer>

</html>