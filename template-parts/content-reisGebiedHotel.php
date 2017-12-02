<?php 
$skigebied_kop = get_field('skigebied_kop');
$skigebied_info_1 = get_field('skigebied_info_1');
$skigebied_info_2 = get_field('skigebied_info_2');
$skigebied_tekst = get_field('skigebied_tekst');

$accomodatie_kop = get_field('accomodatie_kop');
$accomodatie_tekst = get_field('accomodatie_tekst');
$accomodatie_foto = get_field('accomodatie_foto');

$ligging_kop = get_field('ligging_kop');
$ligging_tekst = get_field('ligging_tekst');

$faciliteiten_kop = get_field('faciliteiten_kop');
$faciliteiten_tekst = get_field('faciliteiten_tekst');

$verzorging_kop = get_field('verzorging_kop');
$verzorging_tekst = get_field('verzorging_tekst');

$kamers_kop = get_field('kamers_kop');
$kamers_tekst = get_field('kamers_tekst');

$kamerindeling_kop = get_field('kamerindeling_kop');
$kamerindeling_tekst = get_field('kamerindeling_tekst');

?>

<!-- SECTION 1
============================================================================================= -->

<section id="ski-acc">
    <div class="container">
        <div class="row">

            <!-- 1E KOLOM: SKIGEBIED -->                           
            <div class="col-sm-12 col-md-5">  <!-- 1E KOLOM: SKIGEBIED -->  
                <h2 class="MB" ><?php echo $skigebied_kop; ?></h2>
                <?php echo $skigebied_info_1; ?>
                <?php echo $skigebied_info_2; ?>
                <?php echo $skigebied_tekst; ?>            
            </div>   

                
            <div class="col-sm-12 col-md-6">    <!--  2E KOLOM-->
                <div class="row">

                    <!--  2E KOLOM: ACCOMODATIE -->                               
                    <div class="col-sm-12 pb-5 ml-3 mt-5 mb-5 tintvlakLB">   <!--  2E KOLOM: ACCOMODATIE -->
                        <h2><?php echo $accomodatie_kop; ?></h2>
                        <p><?php echo $accomodatie_tekst; ?> </p>
                    </div>   

                    <!--  2E KOLOM: ligging-->
                    <div class="col-sm-12">  
                        <div class="row">

                            <div class="col-sm-12 col-md-6">

                           <img src=" <?php echo $accomodatie_foto['url']; ?>" alt=" <?php echo $accomodatie_foto['alt']; ?>">

                            </div> <!-- image  --> 

                            <div class="ligging col-sm-12 col-md-6">
                                <h3><?php echo $ligging_kop; ?> </h3>
                                <p><span class="maki-tree-1 MB"></span><?php echo $ligging_tekst; ?></p>
                            </div>  <!--text  -->

                        </div>
                    </div>   <!--   2E KOLOM: LIGGING -->

                </div>

            </div> <!--  2E KOLOM-->

        </div>  

    </div> <!--container-->
</section>

<!-- SECTION 2
============================================================================================= -->

<section id="faciliteiten">
    <div class="container">
        <div class="row  no-gutters">

            <div class="onetwo col-md-6">
                <div class="row ">

                    <div class="col-sm-12 col-md-5 ml-lg-5">     
                        <h3><?php echo $faciliteiten_kop; ?> </h3>  
                        <p><span class="maki-bar LB"></span> <?php echo $faciliteiten_tekst; ?>
                        </p> 
                    </div>   <!-- 1E KOLOM: FACILITEITEN --> 

                    <div class="col-sm-12 col-md-5">
                        <h3><?php echo $verzorging_kop; ?></h3>
                        <p><span class="maki-restaurant LB"></span> <?php echo $verzorging_tekst; ?></p>                                   
                    </div>   <!-- 2E KOLOM: Verzorging --> 

                </div> 
            </div>   <!-- .onetwo -->


            <div class="threefour col-md-6 ">
                <div class="row">

                    <div class="col-sm-12 col-md-5">
                        <h3><?php echo $kamers_kop; ?></h3>
                        <p><span class="maki-lodging LB"></span><?php echo $kamers_tekst; ?></p>
                    </div>  <!-- 3E KOLOM: Kamers -->  

                    <div class="col-sm-12 col-md-5">
                        <h3><?php echo $kamerindeling_kop; ?></h3>
                        <p><span class="entypo-doc-text LB"></span> <?php echo $kamerindeling_tekst; ?></p> 
                    </div>   <!-- 4E KOLOM: Kamerindeling-->   

                </div>                           
            </div>   <!-- .threefour -->

        </div>   <!-- .row -->
    </div>  <!-- .container -->
</section>