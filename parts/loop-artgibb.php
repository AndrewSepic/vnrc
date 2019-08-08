<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
	<div class="grid-x grid-padding-x">
		<div class="cell small-12 medium-6 large-4">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('artgibb'); ?></a>
		</div>

		<div class="cell small-12 medium-6 large-7">
			<header class="article-header">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			</header> <!-- end article header -->

			<section class="entry-content" itemprop="text">
				<?php echo excerpt(30);?>
			</section> <!-- end article section -->

			<footer class="article-footer">
				<a class="excerpt-read-more" href="<?php the_permalink() ?>">Read more <span class="greenarrow"></span></a>
			</footer> <!-- end article footer -->
		</div>
	</div>

</article> <!-- end article -->
