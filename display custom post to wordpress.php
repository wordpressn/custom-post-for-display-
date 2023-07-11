<?php $query = new WP_Query( [
    'post_type'      => 'slider',
    'nopaging'       => true,
    'posts_per_page' => '2',
] ); ?>

<?php if ( $query->have_posts() ) : ?>
    <div class="roundedframe ">
        <div class="container-fluid">
            <div class="row">

                <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                   <div st yle="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                                        <div class="project-name">
                                            <h2><?php the_title(); ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <img style="width:265px; height:295px;" src=" <?php the_post_thumbnail_url(); ?>  " alt="">
                <?php endwhile; ?>

            </div>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
     ?>