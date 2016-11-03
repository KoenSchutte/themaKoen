<!DOCTYPE html>
<html>
<head>
    <?php wp_head() ?>
    <meta charset="utf-8">
    <title><?php bloginfo('title') ?></title>
    <meta name="author" content="Koen Schutte">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
</head> 
<body>
    <div class="content1">
        <div id="header">
            <img alt="header foto" src="<?php bloginfo('template_directory') ?>/cropped-headerfoto-1.jpg">
        </div>  
    <div class="nav">    
        <ul>
        <li class="kennis"><a class="kennis" href="#"><?php bloginfo('name'); ?></a></li>

        <li class="home"><a  class="active"  href="#">Welkom</a></li>
        <li class="tutorials"><a href="#">Blog</a>
<!--
          <ul>
            <li><a href="#">Voetballen</a></li>
            <li><a href="#">Wielrennen</a></li>
            <li><a href="#">Paralympics</a></li>
          </ul>
        </li>
        <li class="about"><a href="#">Over mij</a></li>
        <li class="contact"><a href="#">Contact</a></li>    
        <li class="contact"><a href="#"><img style="width: 30px;" src="<?php bloginfo('template_directory') ?>/search.png" alt="search"></a></li>
      </ul>
-->
        <?php wp_nav_menu(); ?>
        </div>
    </div>    