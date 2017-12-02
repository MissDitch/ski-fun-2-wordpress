<?php 
$skihuur_kop = get_field('skihuur_kop', '48');
$skihuur_tekst = get_field('skihuur_tekst', '48');
$skipassen_kop = get_field('skipassen_kop', '48');
$skipassen_tekst = get_field('skipassen_tekst', '48');

$verzekering_kop = get_field('verzekering_kop', '48');
$verzekering_tekst = get_field('verzekering_tekst', '48');
$nu_boeken = get_field('nu_boeken', '48'
);
?>

<!-- SECTION 6
============================================================================================= -->

<section id="ski">
        <div class="container">
            <div class="row">

                <!-- 1E KOLOM: SKIHUUR -->                           
                <div class="tintvlakLB col-sm-12 col-md-5 ml-5 pb-3">
                    <h3><?php echo $skihuur_kop; ?></h3>
                    <?php echo $skihuur_tekst; ?>
                </div>   <!-- .tintvlakLB -->

                <!--  2E KOLOM: SKIPASSEN-->
                <div class="col-sm-12 col-md-4 ml-3">
                    <h3><?php echo $skipassen_kop; ?></h3>
                    <?php echo $skipassen_tekst; ?>
                </div>
            
            </div>
        </div>  <!-- .container -->
    </section>


    <!-- SECTION 7
============================================================================================= -->

<section id="verzekering">
        <div class="container">
            <div class="row">
                <div class="tintvlakLB col-sm-12 col-md-7 offset-md-2 pb-3">
                    <h2><?php echo $verzekering_kop; ?></h2>
                    <?php echo $verzekering_tekst; ?>  
                </div>   <!--.tintvlakLB  -->
            </div>
        </div>  <!-- .container -->
    </section>



    <!-- SECTION 8
============================================================================================= -->

<section id="boeken">
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
            <?php echo $nu_boeken; ?>
            </div>   <!--  -->

        </div>
    </div>  <!-- .container -->
</section>
