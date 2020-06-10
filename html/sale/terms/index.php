<html>
<head>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/common-assets/html/google-analytics-stuff.php"); ?>
    <link rel="stylesheet" href="/common-assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/common-assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet"> 
    <script src="/common-assets/js/jquery-3.4.1.min.js"></script>
    <script src="/common-assets/js/bootstrap.min.js"></script>
    <title>Foundry - Sale Terms</title>
</head>
<body>
    <?php
        // ini_set('display_errors', 1);
        // ini_set('display_startup_errors', 1);
        // error_reporting(E_ALL);
        include($_SERVER['DOCUMENT_ROOT'] . "/common-assets/html/header.php");
        makeHeader("sale");
    ?>
    <div class="body rendered-md">
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/common-assets/rendered-md/terms.html"); ?>
    </div>
</body>
</html>