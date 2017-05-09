<?php
require('../model/database_connection.php');
require('header.php');
?>

<div class="header-wrapper">
    <div class="header-overlay">
        <header class="header-content">
            <div class="header-logo-wrapper">
                <img class="header-logo" src="#">
            </div>

            <div class="header-title-wrapper">
                <h1 class="header-title">
                    TITLE EXAMPLE TITLE EXAMPLE TITLE EXAMPLE 
                    TITLE EXAMPLE TITLE EXAMPLE TITLE EXAMPLE
                </h1>

                <hr class="header-hr">

                <div class="about-me">
                    <a id="aboutMe" href="#">about me</a>
                </div>
            </div>
        </header>
        
        <img id="scrollBox" src="img/down_arrow.png">
    </div>
    
    <div id="skillContent" class="skillContent">
        <?php require('skill_content.php'); ?>
    </div> 
</div>
