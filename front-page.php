<?php get_header(); ?>

<div id="main-content" class="container-fluid">
	<?php if(have_posts()) :
		while (have_posts()) : the_post(); ?>
			<div class="row">		
				<div class="featured-article <?php echo $article_side; ?>-article col-sm-12">
					<a href="<?php the_permalink() ?>">
						<div class="f-article-text-frame col-sm-8">
							<div class="f-article-text-content">
								<h2><?php the_title() ?></h2>
								
								<!-- <?php the_content(); ?> -->
							</div>
						</div>
					</a>
					<div class="featured-image-frame">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
			</div>
			<?php $count++;
			(($count % 2) == 0) ? $article_side="right" : $article_side="left"; ?>
		<?php endwhile;
		else :
			echo '<p>There are no posts!</p>';
	endif; ?>
</div>

<?php get_footer(); ?>