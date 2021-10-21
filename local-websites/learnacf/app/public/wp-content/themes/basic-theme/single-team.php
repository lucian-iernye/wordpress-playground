<?php 

$locations = get_field('locations');

get_header();

?>


<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>

                <!-- <?php var_dump($locations) ?> -->


                <?php foreach($locations as $location): ?>

                    <p><?php echo $location -> post_title ?></p>
                    <p><?php echo $location -> post_content ?></p>
                    <p><?php echo $location -> post_date ?></p>

                <?php endforeach; ?>



    </div>
</section>

<?php get_footer();?>