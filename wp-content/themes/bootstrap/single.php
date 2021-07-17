<?php get_header(); ?>

<?php if( have_posts() ) {
			while( have_posts() ) {
				the_post(); ?>

<section class="container-fluid">
	<article class="row">
		<div class="col-5 img-post">
			<?php the_post_thumbnail(); ?>	
		</div>
	</article>
	<article class="row">
		
		<div class="col-8 offset-2">
			<h1>
				<?php the_title(); ?>
			</h1>
			<span>
				<?php the_date(); ?>
			</span>
			<?php the_content(); ?>
		</div>
	</article>

		<?php }
		} ?>

</section>


<?php get_footer(); ?>