<?php get_header() ?>

<div class="mi-container">
<div class="main block">
		<?php if (have_posts()) :; ?>
		<?php while (have_posts()) : the_post(); ?>
			<article class="post">
				<h2><?php the_title(); ?></h2>
				<p class="meta">Posted at 
				<?php the_time(); ?>
				by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
				<?php the_author(); ?>
				</a>
				| Posted In
				<?php 
			$categories = get_the_category();
			$separator = ' ';
			$output = '';
			if ($categories) {
				foreach ($categories as $category) {
					$output .= " <a class='tags' href='" . get_category_link($category->term_id) . "'>" . $category->name . "</a>" . $separator;
				}
			}
			echo trim($output, $separator);
			?> </p>
			<?php if (has_post_thumbnail()) : ?>
			<div class="post_thumbnail">
			<?php the_post_thumbnail(); ?>
			</div>
			<?php endif; ?>
			<?php the_excerpt(); ?>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
		<?php else : ?> 
			<?php echo wpautop(' Sorry, no post were found'); ?>
		<?php endif; ?>
		<?php comments_template(); ?>
		</div>
</div>

<?php get_footer(); ?>