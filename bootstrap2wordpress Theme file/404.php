<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootstrap_2_WordPress
 */

get_header();
?>

<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
<h1 class="page-title">Thant page can't be found</h1>
</section>

<div class="container">

<div id="primary" class='row'>

<main id='content' class='col-sm-8'>

<div class="error-404 no-found">

<div class="page-content">

<h2>Don't fret, lets get you back.</h2>

<h3>Resources</h3>
<h3>Perhaps you are looking for a specific resources</h3>


<?php $loop = new WP_query( array( 'post_type' => 'resource', 'orderby' => 'post_id', 'order' => 'ASC'));?>


<div class="resource-row clearfix">

<?php while( $loop->have_posts()) : $loop->the_post(); ?>
<?php

$resource_image = get_field('resources_image');
$resource_url = get_field('resources_url');
$button_text = get_field('button_text');

?>


		<div class="resource">
				<img src="<?php echo $resource_image[url] ;?>" alt="<?php echo $resource_image[alt] ;?>">



				<h3><a href="  <?php echo $resource_url ;?>"><?php the_title();?></a></h3>

				<?php the_excerpt();?>

				<?php if(!empty($button_text) ): ?>

				<a href="<?php echo $resource_url ;?>" class="btn btn-success"><?php echo $button_text ;?></a>

				<?php endif;?>

		</div>
<?php endwhile;?>
</div><!--resource-row--->

<!--========CATEGORIES============-->

<h3>Categories</h3>
<p>...or may be a popular category</p>

<div class="widget widget_categories">

<h4 class="widget-tittle">Most used categories</h4>
<ul>
<?php
	wp_list_categories( array(

		'orderby'		 => 'count',
		'order' 		 => 'DESC',
		'show_count' 	 => 1,
		'title li' 	  	 => '',
		'number' 		 => 10

	) );

?>

</ul>

<!--========ARCHIVES============-->

</div><!--/.widget--->

<h3>Archives</h3>
<p>You can always sort through our archives.....</p>
<?php the_widget( 'WP_Widget_Archives' , 'title=Our Archives',
'before_title=<h4 class="widgettitle">&after_title=</h4>'
)?>

<p>....or, just get back to the <a href="<?php echo esc_url(home_url('/'));?>">home page </a></p>


		</div><!-----/.page-content--->
	</div><!---/.error-404-->
</main>

<!--========SIDEBAR============-->

<aside class="col-sm-4">

<?php get_sidebar();?>

</aside>


</div><!----/.primary--->
</div><!----/.container-->



<?php
get_footer();
?>