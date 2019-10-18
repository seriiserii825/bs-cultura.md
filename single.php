<?php get_header(); ?>

<div class="container">
    <div class="page-single">
        <h1><?php the_title(); ?></h1>

        <?php if(have_posts()): ?>
			<?php the_post(); ?>
				<div class="page-index__image">
					<?php
						$img =  kama_thumb_img( array('w' => 650,) );
						$img_url = get_the_post_thumbnail_url($post->ID, 'full');
					?>
                    <a href="<?php echo $img_url; ?>">
                        <?php echo $img; ?>
                    </a>

				</div>

                <?php the_content(); ?>

        <?php else: ?>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>

