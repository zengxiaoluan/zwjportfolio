<?php 
/*
Template Name: work
 */
?>

<?php 
get_header( null );
?>

    <div class="h5">
        <?php 
           bloginfo( 'description' ); 
        ?>
    </div>
    
    <div class="h1">
        <?php 
           bloginfo( 'title' ); 
        ?>
    </div>

    <div id="content">
        <?php
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => 20
            );
            $query = new WP_Query( $query_args );
            
            while ( $query->have_posts() ) : $query->the_post();
        ?>
            
            <article class="single-post">
                <div class="single-title">
                    <a href="<?php the_permalink(  ); ?>">
                        <?php the_title(); ?>
                    </a>
                </div>
                <div class="thumbnail-img">
                    <?php the_post_thumbnail( 'post-thumbnail', '' ); ?>
                </div>
            </article>

        <?php 
            endwhile;
        ?>
    </div>

    <style>
        #content{
            margin-top: 2em;
        }
        #content .single-post{
            position: relative;
            display: inline-block;
        }
        #content .single-title, #content .thumbnail-img{
            position: absolute;
        }
        #content .thumbnail-img{
            z-index: 1;
        }
        #content .single-title{
            z-index: 2;
            visibility: hidden;
            top: 0;
            left: 0;
            background-color: #333;
            opacity: 0.8;
            width: 100%;
            height: 100%;
            font-size: 24px;
            text-align: center;
        }
        #content .single-title a{
            color: white !important;
        }
        #content .single-post:hover .single-title{
            visibility: visible;
        }
    </style>
    
    <script>
        jQuery(document).ready(function($) {
            $('.thumbnail-img').each(function(index, el) {
                $(this).parent('.single-post').width( $(this).width() ).height( $(this).height() )
                $(this).siblings('.single-title').css('line-height', $(this).height() + 'px' );
            });
            
        });
    </script>

<?php 
get_footer( null );
?>