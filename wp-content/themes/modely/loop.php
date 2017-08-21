<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->

  <div class="col-md-4">
  	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      		<!-- post thumbnail -->
      		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
            <span class="post__thumbnail">
        			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(array(320,240)); // Declare pixel size you need inside the array ?>
        			</a>
            </span>
      		<?php else: ?>
            <span class="post__thumbnail post__thumbnail--default">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="" src="<?php echo get_template_directory_uri(); ?>/dist/images/model.svg">
              </a>
            </span>
            
          <?php endif; ?>

      		<!-- /post thumbnail -->

      		<!-- post title -->
      		<h2 class="post__name">
      			<?php the_title(); ?>
      		</h2>
      		<!-- /post title -->
  	</article>
  </div>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
