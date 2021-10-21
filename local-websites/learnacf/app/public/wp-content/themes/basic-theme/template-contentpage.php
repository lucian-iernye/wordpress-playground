<?php 

// Template Name: Content page

$images = get_field('images');
$file = get_field('file');
$filename = $file['filename'];
$fileurl = $file['url'];

$embeded = get_field('embed_a_video');

get_header();

?>


<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>



                <?php if($images): ?>
                    <div class="images">
                        <img src="<?php echo $images['sizes']['large'] ?>" alt="<?php $images['alt'] ?>" class="img-fluid"/>
                    </div>
                <?php endif; ?>

                <?php if($file): ?>
                    <a href="<?php echo $fileurl ?>"><?php echo $filename ?></a>
                <?php endif; ?>

                <?php if($embeded): ?>
                    <?php echo $embeded ?>
                <?php endif; ?>

    </div>
</section>

<?php get_footer();?>