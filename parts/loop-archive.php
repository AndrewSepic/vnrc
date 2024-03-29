<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
	<div class="grid-x grid-padding-x">
		<div class="cell small-12 medium-6 large-6">

			<?php // if this is the Awards or small grants page
				if ((is_page(213)) || (is_page(217))) { ?>
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('awards'); ?><?php get_template_part( 'parts/content', 'byline' ); ?></a>
			<?php
				} else { ?>
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('news'); ?><?php get_template_part( 'parts/content', 'byline' ); ?></a>
				<?php
				} ?>
			
		</div>

		<div class="cell small-12 medium-6 large-6">
			<header class="article-header">
				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
			</header> <!-- end article header -->

			<section class="entry-content" itemprop="text">
				<?php if(get_field('article_author')) : ?>
				<p>By <?php echo get_field('article_author'); ?></p>
				<?php endif; ?>
				<p><?php echo excerpt(15);?></p>
			</section> <!-- end article section -->

			<footer class="article-footer">
				<a class="excerpt-read-more" href="<?php the_permalink(); ?>">Read more <span class="greenarrow"></span></a>
			</footer> <!-- end article footer -->
		</div>
	</div>

</article> <!-- end article -->
