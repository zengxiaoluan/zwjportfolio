<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div id="ellen">
        <header id="header">
            <div id="logo" class="pull-left">
                <?php 
                    the_custom_logo();
                ?>
            </div>
            
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'zwj',
                    'menu_class'     => 'pull-right',
                    'menu_id'        => 'zwj-menu',
                    'container'      => 'div',
                    'container_class'=> 'menu',
                    'container_id'   => 'menu',
                    'echo'           => true,
                ) );
            ?>
        </header>

        <style>
            #ellen{
                width: 1160px;
                margin: 0 auto;
            }
            #header{
                margin-top: 1em;
                height: 192px;
            }
            #menu ul{
                display: flex;
            }
            #menu ul li{
                list-style: none;
                margin: 1em;
            }
            #menu .current-menu-item{
                border-bottom: 3px solid #333;
            }
        </style>
    