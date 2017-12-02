<?php 
$reis_bestemming = get_field('reis_bestemming');
$reis_datum = get_field('reis_datum');
$reis_boeken_alert = get_field('reis_boeken_alert');
$reis_boeken_tekst = get_field('reis_boeken_tekst');
$reis_boeken_na_sluiting = get_field('reis_boeken_na_sluiting');

$boeking_status_kop = get_field('boeking_status_kop');

$date = time();
$boekingEind = strtotime('2017-10-30 00:00:00');
?>

<!-- BOVEN     
======================================================================= -->

<section id="boven-reis1" class="berg">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-8">
                <h1><?php echo $reis_bestemming; ?> </h1>
                <h4><?php echo $reis_datum; ?></h4>
                <!-- <?php echo $date; ?> -->
                <!-- <?php echo $boekingEind; ?> -->

                <?php  if($date < $boekingEind) :  ?>

                <p><span class="alert"><?php echo $reis_boeken_alert; ?></span></p>
                <p><?php echo $reis_boeken_tekst; ?></p>
                                
                <?php endif; ?>

                <?php if($date > $boekingEind) : ?>

                <p><?php echo $reis_boeken_na_sluiting; ?></p>

                <?php endif; ?>       
                
            
            </div>

        </div>
    </div> <!-- container -->
</section> <!--#boven-home -->

 <!-- SECTION 0
            ============================================================================== -->
<section id="boekingen">
    <h3><?php echo $boeking_status_kop; ?><span> (per <?php 
    setlocale(LC_ALL, array('Dutch_Netherlands', 'Dutch', 'nl_NL', 'nl', 'nl_NL.ISO8859-1', 'nld_NLD'));

    //  http://php.net/manual/en/function.strftime.php
    $format = '%e';
    // Check for Windows to find and replace the %e modifier correctly 
    //(Windows: modifier is %#d)
    if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
        $format = preg_replace('#(?<!%)((?:%%)*)%e#', '\1%#d', $format);
    }

    echo strftime("%A $format %B %Y"); ?> )</span></h3>
    
<?php

// Jan 1: results in: '%e%1%' (%%, e, %%, %e, %%)
$format = '%%e%%%e%%';

// Check for Windows to find and replace the %e 
// modifier correctly
if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
    $format = preg_replace('#(?<!%)((?:%%)*)%e#', '\1%#d', $format);
}

// echo strftime($format);
// prints %e%1%
?>


    <div class="container">
        <div class="row">

        <?php $loop = new WP_Query( array( 'post_type' => 'status_box', 'orderby' => 'post_id', 'order' => 'ASC' ));  ?>
        
        <?php  while ($loop->have_posts() ) : $loop->the_post(); ?> 
            
            <div class="col-sm-6 col-md-3">
                <!-- if there are more than 4 status boxes use flexbox rather than bootstrap column -->
                <div class="callout">

                    <span><?php the_field('aantal_bovenin'); ?></span>
                    <h4><?php the_title(); ?></h4>                    

                    <?php if ( get_field('aantal_onder') && get_field('tekst_onder') ) :  ?>        
                        <span> <?php the_field('aantal_onder'); ?></span>
                        <p><?php the_field('tekst_onder'); ?></p> 

                    <?php endif; ?>                

                    <?php if ( get_field('alert_onder') ) : ?>
                        <p class="alert"> <?php the_field('alert_onder'); ?></p>

                    <?php endif; ?>

                </div>
            </div>                                  
            
        <?php endwhile; 
        wp_reset_query();   ?> 
        <!-- https://codex.wordpress.org/Function_Reference/wp_reset_query -->

        </div>
    </div>
</section>
