<?php 

// Template Name: Options

// select
$color = get_field('choose_your_color');
// checkboxes
$flavour = get_field('choose_a_flavour');
// radio
$consent = get_field('do_you_consent');
// button group
$location = get_field('where_do_you_want_to_go');
// true or false
$boolean = get_field('are_you_learning_wp');

get_header();

?>


<section class="page">
    <div class="container">

                <h1><?php the_title();?></h1>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>


                <?php var_dump($color) ?>
                <?php var_dump($flavour) ?>
                <?php echo implode($flavour, ', '); ?>

                <?php var_dump($consent) ?>

                <?php var_dump($location) ?>

                <?php var_dump($boolean) ?>
               

    </div>
</section>

<?php get_footer();?>