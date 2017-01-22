<?php 
get_header( null );
 ?>
        
    <?php 
        while (have_posts()) : the_post();
    ?>
        
        <article>
            <h3>
                <?php the_title(); ?>
            </h3>
            <p class="post-meta">
                <?php 
                    the_date( '', '', '', true );
                    echo " | ";
                    the_author(); 
                ?>
            </p>
            <div class="content">
                <?php the_post_thumbnail( 'post-thumbnail', '' ); ?>
                <div>
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </article>

    <?php 
        endwhile;
    ?>


<?php 
get_footer( null );
 ?>