<?php 
get_header();

$title = get_field('page_title');
$description = get_field('description');
$other_description = get_field('other_description');
$age = get_field('age');
$range = get_field('range');
$email = get_field('email');
$website = get_field('website');
$password = get_field('password');
$image = get_field('image');

?>


<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; else: endif; ?>

                <?php if($title): ?>
                    <h5><?php  echo $title; ?></h5>
                <?php endif;?>

                <?php if($description): ?>
                    <h6><em><?php echo $description; ?></em></h6>
                <?php endif; ?>

                <div class="other-description">
                <?php if($other_description): ?>
                    <?php echo $other_description; ?>
                <?php endif; ?>
                </div>

                <div class="form">
                    <p>Age: <?php if($age): ?>
                        <?php echo $age; ?>
                    <?php endif; ?></p>

                    <p>Range: <?php if($range): ?>
                        <?php echo $range; ?>
                    <?php endif; ?></p>

                    <p>Email: <?php if($email): ?>
                        <?php echo $email; ?>
                    <?php endif; ?></p>

                    <p>Website: <?php if($website): ?>
	                    <?php echo $website; ?>
                    <?php endif; ?></p>

                    <p>Password: <?php if($password): ?>
	                    <?php echo $password; ?>
                    <?php endif; ?></p>
                </div>

                <div class="images">
                    <?php if($image): ?>
                        <img src="<?php echo $image['sizes']['medium']; ?>" alt="image">
                    <?php endif; ?>
                </div>
                



    </div>
</section>

<?php get_footer();?>