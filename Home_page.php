<?php get_header() ?>

<?php 
/*
Template name: MyHomePage	
*/
?>


<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
					<?php 
						$query = new WP_Query( 
							array(
								'post_type' => 'sliders',
								//  'posts_per_page' => 3
								)
						 );

						 while($query->have_posts()) {
							$query->the_post();
					?>
					<li><?php the_post_thumbnail() ?></li>
					<?php } ?>	
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>The White Night</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>Tons of Fans</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>Best DJ's Ever</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest News</h2></div>
					<?php 
						$query = new WP_Query( 
							array(
								'post_type' => 'post',
								 'posts_per_page' => 3
								)
						 );

						 if($query->have_posts()){
							while($query->have_posts()){
								$query->the_post();
					?>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
							<?php the_post_thumbnail() ?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
								<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
								<?php the_excerpt() ?>
							</div>
						</div>
					</article>
					<?php 
						} 
						
						} else {
							echo "No post";
						 }
					?>
				</div>
			</div>
			<?php get_sidebar();?>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php 
	get_footer();
?>