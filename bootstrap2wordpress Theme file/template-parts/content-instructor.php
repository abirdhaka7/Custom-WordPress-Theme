<?php

//this variable for Course Instructor section
$instructor_section_title   = get_field('instructor_section_title');
$instructor_name            = get_field('instructor_name');
$bio_excerpt                = get_field('bio_excerpt');
$full_bio                   = get_field('full_bio');
$twitter_username           = get_field('twitter_username');
$facebook_username          = get_field('facebook_username');
$googleplus_username        = get_field('google_plus_username');
$number_of_student          = get_field('number_of_student');
$number_of_reviews          = get_field('number_of_reviews');
$number_of_courses          = get_field('number_of_courses');

?>
<!--INSTRUCTOR
==============================================-->
<section id="instructor">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h2><?php echo $instructor_section_title;?> <small><?php echo $instructor_name;?> </small>
                    </div>

<div class="col-lg-4">
<?php if(!empty($twitter_username)) :?>

<a href="http://twitter.com/<?php echo $twitter_username?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>

<?php endif; ?>
<?php if(!empty($facebook_username)) :?>

<a href="http://facebook.com/<?php echo $facebook_username?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>

<?php endif; ?>

<?php if(!empty($googleplus_username)) :?>

<a href="http://google.com/<?php echo $googleplus_username?>" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>

<?php endif; ?>
</div><!---/.col-->
                
                
</div>

<p class="lead"><?php echo $bio_excerpt;?></p>

<p> <?php echo $full_bio;?> </p>
                    <hr>
                    <h3>The Numbers <small>Tey Don't lie</small></h3>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    <?php echo $number_of_student; ?><span>Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                <?php echo $number_of_reviews; ?> <span>Reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                <?php echo $number_of_courses; ?> <span>Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</section>