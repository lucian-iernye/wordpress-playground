<?php 

$locations = get_field('locations');
$related_post = get_field('related_post');

get_header();

?>


<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>

                <!-- <?php var_dump($locations) ?> -->


                <!-- <?php foreach($locations as $location): ?>

                    <p><?php echo $location -> post_title ?></p>
                    <p><?php echo $location -> post_content ?></p>
                    <p><?php echo $location -> post_date ?></p>

                    <a href="<?php echo get_page_link($location -> ID);?>"><?php echo get_page_link($location -> ID);?></a>

                    <img src="<?php echo get_the_post_thumbnail_url($location -> ID) ?>" alt="" width=50>

                    

                <?php endforeach; ?> -->

                <!-- to get the other field (address) -->

                <!-- we override the location data variable with the post data which comes from the loop -->

                <?php foreach($locations as $post): ?>

                <?php setup_postdata($post) 
                // this will make it possible to grab the data out of each loop therefore of that post 
                ?>

                <?php echo the_title(); ?>
                <p><?php echo the_field('address') ?></p>




                <!-- we reset the post data so after the loop we can access again the data which comes from the relational field -->
                <?php wp_reset_postdata(); endforeach; ?> 


                <!-- we add the individual post created into the template -->

                <!-- <?php var_dump($related_post) ?>  -->
                <!-- or -->
                <!-- <?php print_r($related_post) ?> -->
                <?php if($related_post): ?>

                    <?php echo $related_post -> post_title ?>

                <?php endif; ?>



    </div>
</section>

<?php get_footer();?>