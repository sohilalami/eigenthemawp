<?php

get_header();
?>

<div class="container">
	<main>
		<div>
			<h2>De zoekresultaten voor: <em class="zoekterm"><?php echo get_search_query(); ?></em></h2>

<?php

if(have_posts()) :
	while(have_posts()) : the_post() ?>
			<article class="bericht">
				<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
				<?php the_content() ?>
			</article>
	<?php endwhile;
else:
	echo "Er zijn geen berichten gevonden voor de zoek term:<em class='zoekterm'>". get_search_query() . "</em>";	
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