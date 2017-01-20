<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>xpgellen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        #ellen{
            width: 1160px;
            margin: 0 auto;
        }
        #ellen > article{
            border: 3px solid #4800f8;
            margin-bottom: 3em;
            width: 50em;
            padding: 1em;
        }
        #ellen > article .post-meta{
            color: #4800f8;
        }
        #ellen > article img{
            max-width: 100%;
            height: auto;
        }
        #ellen > article .content{
            display: flex;
        }
    </style>
</head>
<body>
    <div id="ellen">
        
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

    </div>

    <script src="https://www.welinkcredit.com/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>
    <script>
        jQuery(document).ready(function($) {
            $('window').blur(function(event) {
                console.log('focus')
            });
        });
    </script>
</body>
</html>