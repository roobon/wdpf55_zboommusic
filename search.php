<?php get_header(); ?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-3-3">
				<div class="wrap-col">
					This is search Page

                    <?php
                        $s = $_GET['s'];
                        global $wp_query;
                        $total_results = $wp_query->found_posts;

                        echo "<h1>Total {$total_results} (s) found with <b>$s</b> keyword </h1>";
?>
                    <?php if(have_posts()):
                      while(have_posts()): 
                        the_post();      
                    ?>
                    <article>
						<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
						<?php 
                            //the_content();
                            the_excerpt();
                        ?>
					</article>
					<?php 
                    endwhile;
                    endif;?>
					
				</div>
			</div>
			
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>