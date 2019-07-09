<?php
//this variable for Optin section
$optin_section_title         = get_field('optin_title');
$optin_section_button_name   = get_field('optin_button_name');

?>

<!-- OPT IN SECTION
================================================== -->
<section id="optin">
    <div class="container">
        <div class="row">
        
            <div class="col-sm-8">
                <p class="lead"><?php echo $optin_section_title;?></p>
            </div><!-- end col -->
            
            <div class="col-sm-4">
                <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">                <?php echo $optin_section_button_name;?>
                </button>
            </div><!-- end col -->
            
        </div><!-- row -->
    </div><!-- container -->
</section><!-- optin -->
