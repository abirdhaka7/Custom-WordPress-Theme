<?php
//this variable for Course Features section
$course_feature_section_image = get_field('course_features_section_image');
$course_feature_section_title = get_field('course_features_section_title');
$course_feature_section_body  = get_field('course_features_section_body');


?>
<!--COURSE FEATURES
==============================================-->
<section id="course-features">
    <div class="container">

        <div class="section-header">
<?php if(!empty($course_feature_section_image)): ;?>

<img src="<?php echo $course_feature_section_image['url'];?>" alt="<?php echo $course_feature_section_image['alt'];?>">

<?php endif; ?>
    
            <h2><?php echo $course_feature_section_title;?> </h2>

            <!---if user add body text-->
<?php if(!empty($course_feature_section_image)): ;?>

<p class="lead"> <?php echo $course_feature_section_body;?> </p>
<?php endif; ?>

        </div><!--/.section Header-->
        <div class="row">

<?php $loop = new WP_query( array('post_type' => 'course_feature', 'orderby' => 'post_id', 'order' =>'ASC'));?>

<?php while ( $loop->have_posts() ) : $loop->the_post();?>

    <div class="col-sm-2">
    <i class="<?php the_field('course_features_icon');?>"></i>
    <h4><?php the_title() ;?></h4>
    </div>

<?php endwhile;wp_reset_query();?>
           
        </div><!--/.row-->
    </div><!--/.container-->
</section>
