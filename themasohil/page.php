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
	<?php endwhile;
else:
	echo "Er zijn geen berichten gevonden...";	
endif;


?>
	</div>
	<aside>
		<?php dynamic_sidebar( 'widget_aside' ); ?>
	</aside>
</main>

</div>


<?php

get_footer();

?>