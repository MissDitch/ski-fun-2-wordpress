<?php 
$reis_1_kop         = get_field('reis_1_kop');
$reis_1_datum        = get_field('reis_1_datum');
$reis_1_alert        = get_field('reis_1_alert');
$reis_1_beschrijving = get_field('reis_1_beschrijving');
$reis_2_kop         = get_field('reis_2_kop');
$reis_2_datum        = get_field('reis_2_datum');
$reis_2_alert        = get_field('reis_2_alert');
$reis_2_beschrijving = get_field('reis_2_beschrijving');
?>

<!-- REIZEN     
======================================================================= -->

<section id="reizen">
    <div class="container">
        <div class="row">
            <!-- reis 1
            ================================================================= -->
            <div class="col-sm-10 col-md-6">
                <h2><?php echo $reis_1_kop; ?></h2>
                
                <h4><?php echo $reis_1_datum; ?></h4>

                <?php  if( !empty($reis_1_alert) ) : ?>

                    <p><span class="alert"><?php echo $reis_1_alert; ?></span></p>

                <?php endif; ?>

                <p><?php echo $reis_1_beschrijving; ?> </p>

                <div class="row">
                    <div class="col-sm-4"><a href="<?php echo get_permalink(21); ?>"><p>Lees meer</p></a></div>

                    <div class="col-sm-4"><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/heuvel01.png" alt="rotsblok"></div>
                </div>                             
                
                    
            </div>

                <!-- reis 2
            ===================================================================== -->
            <div class="col-sm-10 ml-5 col-md-5 ">
                <h2><?php echo $reis_2_kop; ?></h2>
                
                <h4><?php echo $reis_2_datum; ?></h4>

                <?php  if( !empty($reis_2_alert) ) : ?>

                    <p><span class="alert"><?php echo $reis_2_alert; ?></span></p>

                <?php endif; ?>

                <p><?php echo $reis_2_beschrijving; ?> </p>

                <div class="row">
                    <div class="col-sm-4"><a href="<?php echo get_permalink(24); ?>"><p>Lees meer</p></a></div>

                    <div class="col-sm-4"><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/heuvel02.png" alt="rotsblok"></div>
                </div>    
            </div>
        </div>
    </div>  <!-- container -->
</section>   <!--#reizen -->

