<?php
/**
 * Template part for displaying posts with quote format.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Floral
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_content(); ?>

	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>

</article><!-- #post-## -->
