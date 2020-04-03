<?php
include("includes/config.php");
include("includes/classes/Artist.php");

//session_destroy();

if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
    header("Location: register.php");
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notify || Not Spotify</title>
    <link rel="icon" type="image/png" href="./assets/images/icons/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<!-- Copyright 2020 Nick Ball -->
<!-- Private project only for demonstration purposes -->
<!-- No copyright infringement intended -->
    <div id="mainContainer">
        <div id="topContainer">
            <?php include("includes/navBarContainer.php"); ?>

            <div id="mainViewContainer">
                <div id="mainContent">