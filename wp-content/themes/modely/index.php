<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="main__inner">
			<section>

        <div class="container">
          <div class="row">
    				<?php get_template_part('loop'); ?>
          </div>
        </div>

				<?php get_template_part('pagination'); ?>

			</section>

		</div>


		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
