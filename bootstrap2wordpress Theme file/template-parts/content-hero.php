<?php 
//this variable for Hero Section
$hero_feature_image          = get_field('hero_feature_image');
$hero_price_1_section_title  = get_field('price_1_section_title');
$hero_price_1_section_price  = get_field('price_1_section_price');
$hero_price_2_section_title  = get_field('price_2_section_title');
$hero_price_2_section_price  = get_field('price_2_section_price');
$hero_price_3_section_title  = get_field('price_3_section_title');
$hero_price_3_section_price  = get_field('price_3_section_price');
$hero_section_button         = get_field('button_name');
$hero_section_button_url     = get_field('button_url');

?>

<!--HERO
==============================================-->
<section id="hero" data-type="background" data-speed="5">
    <article>
        <div class="container clearfix">
            <div class="row">
                <div class="col-sm-5">
<?php if(!empty($hero_feature_image)) : ?>

<img src="<?php echo $hero_feature_image['url']?>" alt="<?php echo $hero_feature_image['alt']?>" class="logo">

<?php endif;?>
                </div><!--/.col-->
                <div class="col-sm-7 hero-text">
                    <h1><?php bloginfo('name');?></h1>

                    <p class="lead"><?php bloginfo('description');?></p>

                    <div id ="price-timeline">
                        <div class="price active">
                            <h4><?php echo $hero_price_1_section_title?></h4>
                            <span><?php echo $hero_price_1_section_price?></span>
                        </div>
                        <div class="price">
                            <h4><?php echo $hero_price_2_section_title?></h4>
                            <span><?php echo $hero_price_2_section_price?></span>
                        </div>
                        <div class="price">
                            <h4><?php echo $hero_price_3_section_title?></h4>
                            <span><?php echo $hero_price_3_section_price?></span>
                        </div>
                    </div>
                    <p><a href="<?php echo $hero_section_button_url;?>" class="btn btn-lg btn-danger" role="button"><?php echo $hero_section_button;?></a></p>


                </div><!---/.col-->
            </div>            
        </div><!--/.container-->
    </article>
</section>