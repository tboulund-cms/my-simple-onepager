<?php get_header() ?>

        <section>
            <?php while(have_posts()) : the_post() ?>
                
                <h2><?php the_title() ?></h2>
                <p><?php the_content() ?></p>


                <h3>Follow me on social media:</h3>
                <a href="<?php the_field("facebook_link") ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/facebook.png" alt=""></a>
                <a href="<?php the_field("linkedin_link") ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/linkedin.png" alt=""></a>
            <?php endwhile; ?>
        </section>
        <section>
            <img src="<?php the_field("profile_picture") ?>" alt="Me">
        </section>

<?php get_footer() ?>