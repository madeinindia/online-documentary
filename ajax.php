<?php
define('WP_USE_THEMES', false);
require '../../../wp-blog-header.php';

$args = array(
  'orderby' => 'name',
  'parent' => 0
  );
$categories = get_categories();
foreach ( $categories as $category ) 
{	
	$cat_name = $category->name;
	?>
	<div id="documentaryListLeft">
	
	<?
		echo '<h1><a href="' . get_category_link( $category->term_id ) . '">' . $cat_name . '</a></h1>';

		$lastposts = get_posts("category_name=$cat_name");
		foreach($lastposts as $post) : setup_postdata($post); ?>
	<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
	
<?php endforeach; echo '</div>';}?>


					