<?php 
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo',  array(
    'height'      => 54,
    'width'       => 25,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' )
) );
register_nav_menus( array(
    'zwj'           =>  __( 'zwj主菜单', 'zwj' ),
    'zwj_footer'    =>  __( 'zwj页脚菜单', 'default' )
) );