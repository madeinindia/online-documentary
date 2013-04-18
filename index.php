<?php get_header(); ?>


	
		<?php
	if (!$_GET['p']) {
		?>

		<div id="tabs">
			<div id="content">
				    <ul>
						<li><a href="#1"><span>Home</span></a></li>
						<li><a href="#2"><span>Browse Documentaries</span></a></li>
						<li><a href="<?php echo get_template_directory_uri().'/ajax.php' ;?>"><span>Documentary Lists</span></a></li>
						<li><a href="#4"><span>Subscribe</span></a></li>
						<li><a href="#5"><span>FAQ</span></a></li>
						<li><a href="#6"><span>Contact</span></a></li>
						<li><a href="#7"><span>About</span></a></li>
					</ul>
			  		<div id="content_left">
						<div  id="1">
							<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts(array("category_name"=>"India", "paged" => "$paged" , "posts_per_page"=>2)); 
							while ( have_posts() ) : the_post();?>
							<div id="left_box">
								<div class="content_left_head">
									<h1><a href="<?php the_permalink();?>"><?php the_title();?></h1>
								</div>
								<div>
									<?php the_content();?>
								</div>
							</div>
							<?php endwhile;  posts_nav_link(); wp_reset_query(); ?>

						</div>
						<div  id="2" >
							
						</div>
						
						<div  id="4">
						Four
						</div>
						<div  id="5">
						Five
						</div>
						<div  id="6">
						SIX
						</div>
						<div  id="7">
						SEVEN
						</div>
					</div>
					<div id="content_right">
						<div class="content_right_head">
							<h1>Content Right Heading</h1>
						</div>
						<div class="content_right_data">
							Content Right Data
						</div>
					</div>
			</div>
		</div>
		<?php }
		else{
			?>
		<div id="contentPost">
			<div id="content_left">
				<?php 
				the_post();?>
				<div class="content_left_head">
					<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
				</div>
				<div id="content_left_data_post" >
					<?php  the_content();?>
				</div>
			
			</div>
			<div id="content_right">
				<div class="content_right_head">
					<h1>Content Right Heading</h1>
				</div>
				<div class="content_right_data">
					Content Right Data
				</div>
			</div>
		</div>
		<?php }	?>
		<?php get_footer(); ?>
	</div>
	
	
