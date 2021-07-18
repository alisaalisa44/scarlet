<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package scarlet
 */

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Scarlett Johansson actris</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/acterport.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/portfolomedia.css">
		<link href="<?php echo get_template_directory_uri();?>/dist/lity.css" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico" type="image/ico">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    </head>
    <body>

        <!-- START BLOK MAIN MENU !-->
        <div class="container-fluid cont ">
            <div class="header3 container ">
                <div class="header"> 
                    <div class="social-logo">
                        <a href="index.html"><?php the_field('logo');?></a>
                    </div>
                    <div class="menu">
                        <div class="about-container">
                            <a href="#aboutme" class="social"><?php the_field('about_me');?></a>
                            <a href="#video" class="social"><?php the_field('video');?></a>
                            <a href="#photos" class="social"><?php the_field('photos');?></a>
                            <a href="#contact" class="social"><?php the_field('сontact');?></a> 
                        </div>
                    </div>
                </div>
                <div class="header-2">        
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                        <a href="#scrollspyHeading1" class="social"><?php the_field('about_me');?></a>
                        <a href="#video" class="social"><?php the_field('video');?></a>
                        <a href="#photos" class="social"><?php the_field('photos');?></a>
                        <a href="#contact" class="social"><?php the_field('сontact');?></a> 
                    </div>
                    <span style="font-size:30px;cursor:pointer; color:#000;" onclick="openNav()">☰</span>
                </div> 
            </div>
        </div>
        <!-- END BLOK MAIN MENU !-->