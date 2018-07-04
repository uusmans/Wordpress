<?php get_header(); ?>

<div class="container content">
		<div class="main block">
		<?php if (have_posts()) :; ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="archive-post">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<p>Posted On: <?php the_time('F j, YG:i a'); ?></p>
				<?php
			$categories = get_the_category();
			$separator = ' ';
			$output = '';
			if ($categories) {
				foreach ($categories as $category) {
					$output .= " <a class='cat_tags' href='" . get_category_link($category->term_id) . "'>" . $category->name . "</a>" . $separator;
				}
			}
			echo trim($output, $separator);
			?>
            </div>
		<?php endwhile; ?>
		<?php else : ?> 
			<?php echo wpautop(' Sorry, no post were found'); ?>
		<?php endif; ?>
		</div>

		<div class="side">
			<div class="block">
			<h3>Sidebar Head</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus lacus sit amet orci eleifend suscipit. Quisque sit amet congue elit, sit amet dictum nisl</p>
			<a class="button">More</a>
			</div>
		</div>
	</div>

<?php get_footer(); ?>