<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>David's List</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    

    <script src="http://sfsuswe.com/~stnguyen/DavidsList/js/jquery-3.1.1.min.js"></script>
    <script src="http://sfsuswe.com/~liux1731/DavidsList/public/js/bootstrap.min.js"></script>

    <link href="//sfsuswe.com/~liux1731/DavidsList/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="//sfsuswe.com/~liux1731/DavidsList/public/css/style.css" rel="stylesheet">
</head>
<body>



    <div class="user">
        <a href="<?php echo URL."userProfile/index"; ?>">login</a> <!-- fake fake fake -->
        <a href="<?php echo URL ; ?>">register</a>
    </div>

    <!-- logo -->

    <div class="search-header" id="search-container">

        <div class="logo">
            <img src="<?php echo URL; ?>img/logo.png" height="100">
        </div>

        <div class="container">
            <input id="search-input" type="text" placeholder="City, street, zipcode..." required autofocus/>
            <button id="search-get" type="submit" onclick='onSearchClick()'>Browse</button>
        </div>

    </div>

    <!-- navigation -->
    <div class="navigation">
        <a href="<?php echo URL; ?>">home</a>
        <a href="<?php echo URL. "home/rentout" ; ?>">rent out</a>
        <a href="<?php echo URL. "info/about" ; ?>">about</a>
        <a href="<?php echo URL. "home/search" ?>"> Search</a> <!-- remove after fixing backend -->
    </div>
