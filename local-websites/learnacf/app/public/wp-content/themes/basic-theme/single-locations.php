<?php get_header();?>


<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>

                <?php
                $args = [
                    'post_type' => 'team',
                    'meta_query' => [
                        'key' => 'locations',
                        'value' => '"' . get_the_ID() . '"',
                        'compare' => 'LIKE',
                    ]
                ];

                $team_members = get_posts($args);
                ?>

                <!-- <?php echo print_r($team_members); ?> -->

                <? foreach($team_members as $member): ?>

                <!-- <?php var_dump($member) ?> -->
                

                <a href="<?php echo get_permalink($member -> ID)?>"><?php echo $member -> post_title; ?></a>

                <?php endforeach; ?>



    </div>
</section>

<?php get_footer();?>