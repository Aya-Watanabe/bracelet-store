<!DOCTYPE html>
<html lang="en">
<head>

    <?php wp_head();?>
   
</head>

<body <?php body_class();?>>


        <overlay class="overlay">

            <div class="container">
                <div class="low">
                    <div class="col">

                        <div class="close res-operator" id="close"><img src="<?php bloginfo('template_directory'); ?>/images/close.png"></div>

                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'top-menu',
                                'menu_class' =>'overlay-navigation',
                            )
                        );?>
                        
                    </div>
                </div>
            </div>

        </overlay>

        <header class="sticky-top header">

        <div class="container">

            <div class="row">
                <div class="col res-header">

                    <!-- logo -->
                    <a href="<?php bloginfo('url');?>">
                        <img src="<?php bloginfo('template_directory'); ?>/images/Hanelogo-black.png" class=" logo img-fluid">
                    </a>

                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'menu_class' =>'navigation',
                        )
                    );?>

                    <div class="hamburger res-operator" id="hamburger"><img src="<?php bloginfo('template_directory'); ?>/images/menu.png"></div>
                        
                </div>
            </div>

        </div>

    </header>
