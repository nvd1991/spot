<!--header.php-->
<?php
include 'includes/config.php';
include 'includes/classes/Artist.php';
include 'includes/classes/Album.php';
include 'includes/classes/Song.php';

if(isset($_SESSION['userLoggedIn'])){
    $userLoggedIn = $_SESSION['userLoggedIn'];
} else {
    header('Location: register.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/script.js"></script>
</head>
<body>
<div id="mainContainer">
    <div id="topContainer">
        <!--navigation container -->
        <?php include 'includes/navBarContainer.php'?>
        <!--main content container -->
        <div id="mainViewContainer">
            <div id="mainContent">
                <!--content here-->