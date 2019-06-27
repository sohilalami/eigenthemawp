<?php

get_header();
?>

<div class="container">
	<main>
		<div> 

<?php

if(have_posts()) :
	while(have_posts()) : the_post() ?>
			<article class="bericht">
				<h2><?php the_title(); ?></h2>
				<?php the_content() ?>
			</article>
			<div class="postMetaData">
				<?php the_author(); ?>
				heeft dit bericht geplaats<br>op:
				<?php the_date(); ?>
				<br>in de categorie:
				<?php the_category(); 
					echo get_the_tag_list('<br>Tags: ',' | ','<hr>');
				?>

			</div>
	<?php endwhile;
else:
	echo "Er zijn geen berichten gevonden...";	
endif;

comments_template("", true);


?>
	</div>

	<aside>
		<?php dynamic_sidebar( 'widget_aside' ); ?>
		<h4>Vorige artiekel</h4>
		<?php
			$vorige_post = get_previous_post();
			if (!empty( $vorige_post )): ?>
			  <a href="<?php echo esc_url( get_permalink( $vorige_post->ID ) ); ?>"><?php echo esc_attr( $vorige_post->post_title ); ?></a>
		<?php endif; ?>
		<h4>Volgende artiekel</h4>
		<?php
			$next_post = get_next_post();
			if (!empty( $next_post )): ?>
			  <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo esc_attr( $next_post->post_title ); ?></a>
		<?php endif; ?>

	</aside>
</main>

</div>


<?php

get_footer();

?>