<?php 
$voor_wie_kop         = get_field('voor_wie_kop');
$voor_wie_tekst         = get_field('voor_wie_tekst');
$reiservaringen_kop         = get_field('reiservaringen_kop');
$reiservaringen_tekst         = get_field('reiservaringen_tekst');
?>

<!-- ONDER     
======================================================================= -->

<section id="onder">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-7">
                <h2 class="text-center"><?php echo $voor_wie_kop; ?></h2>
                <?php echo $voor_wie_tekst; ?> 
                                    
            </div>

            <div class="col-sm-12 col-md-3 ml-5"> 

                <h2><?php echo $reiservaringen_kop; ?></h2>    
                <?php echo $reiservaringen_tekst; ?>

                <div class="row">
                    <div class="col-sm-6"><a href="<?php echo get_permalink(30); ?>"><p>Lees meer</p></a></div>

                    <div class="col-sm-6"><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/Sneeuwbal.png" alt="sneeuwbal"></div>
                </div>    
            </div>

        </div>
    </div>  <!-- container -->
</section>   <!--#onder -->
