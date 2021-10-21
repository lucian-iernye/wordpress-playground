<?php 

// Template Name: Gallery

$gallery = get_field('gallery');




get_header();

?>


<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>



                <?php if($gallery): ?>
                    <div class="gallery">
                        <div class="row">
                            <?php foreach ($gallery as $image): ?>
                                <div class="col-lg-3">
                                    <a href="<?php echo $image['sizes']['large'] ?>">
                                        <img src="<?php echo $image['sizes']['small'] ?>" alt="" class="img-fluid">
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

  

    </div>
</section>

<?php get_footer();?>