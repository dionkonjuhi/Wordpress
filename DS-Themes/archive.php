<?php get_header(); ?>

<div id="content" class="site-content">
   <div id="primary" class="content-area" >
    <main id="main" class="site-main">

    <?php
    the_archive_title('<h1 class="archive-title">', '</h1>');
    ?>
    <?php the_archive_description('<div class="archive_descrription">', '</div>'); ?>
    <div class="container">
        <div class="archive-items">
            <?php
            if(have_post() ):
                while(have_post() ): the_post():
                    get_template_part('parts/content');
                endwhile;
            ?>
            <div class="wpdedevs-pagination">
                <div class="pages new">
                    <?php previous_posts_link(" << Newer post")?>

                </div>
                 <?php previous_posts_link(" << Newer post")?>

            </div>

        </div>
           <?php
           else:
           ?>
           <p>Nothing yet to be displayed!</p>
           <?php endif;?>
    </div>
    <?php get_sidebar();?>

    </main>

   </div>
</div>

<?php get_footer();  ?>