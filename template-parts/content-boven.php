<?php 
$boven_kop          = get_field('boven_kop');
$boven_tekst        = get_field('boven_tekst');
$boven_tekst_alert  = get_field('boven_tekst_alert');
?>

<!-- BOVEN     
======================================================================= -->

<section id="boven" class="boom">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-8">
                <h1><?php  echo $boven_kop; ?></h1>
                <?php echo $boven_tekst; ?>

                <!-- if user put in an alert text -->            
                <?php if(  !empty($boven_tekst_alert) ) : ?>

                <p><span class="alert"><?php echo $boven_tekst_alert; ?></span></p>

                <?php endif ?>
             
               
            </div>

        </div>
    </div> <!-- container -->
</section> <!--#boven-home -->
