<?php 
$arrangement_kop = get_field('arrangement_kop');
$arr_1e_regel_kop = get_field('arr_1e_regel_kop');
$arr_1e_regel_prijs = get_field('arr_1e_regel_prijs');
$arr_2e_regel_kop = get_field('arr_2e_regel_kop');
$arr_2e_regel_prijs = get_field('arr_2e_regel_prijs');

$inclusief_kop = get_field('inclusief_kop');
$inclusief_lijst = get_field('inclusief_lijst');
$opstap_toeslag_kop = get_field('opstap_toeslag_kop');

$reductie_kop = get_field('reductie_kop');
$reductie_1e_regel_kop = get_field('reductie_1e_regel_kop');
$reductie_1e_regel_prijs = get_field('reductie_1e_regel_prijs');

$extra_kosten_kop = get_field('extra_kosten_kop');
$extra_1e_regel_kop = get_field('extra_1e_regel_kop');
$extra_1e_regel_prijs = get_field('extra_1e_regel_prijs');
$extra_2e_regel_kop = get_field('extra_2e_regel_kop');
$extra_2e_regel_prijs = get_field('extra_2e_regel_prijs');
?>

<!-- SECTION 4
============================================================================================= -->

<section id="arrangement">
    <div class="container">

        <div class="row">

            <!--ARRANGEMENT -->  
            <div class="tintvlakLB col-sm-12 col-md-auto offset-md-1 pb-3">
                <h2><?php echo $arrangement_kop; ?></h2>

                    <!-- https://html-cleaner.com/features/replace-html-div-tags-with-divs/ -->
                    <div class="kosten">                          

                        <div >
                            <div class="kenmerk">
                                <span class="DB">❄ </span><?php echo $arr_1e_regel_kop; ?>
                            </div>
                            <div class="kenmerk">                            
                                <?php echo $arr_1e_regel_prijs;?>
                            </div>
                        </div>
                        
                        <div >
                            <div class="kenmerk">
                                <span class="DB">❄ </span><?php echo $arr_2e_regel_kop; ?>
                            </div>
                            <div class="kenmerk">                            
                                <?php echo $arr_2e_regel_prijs;?>
                            </div>
                        </div>

                    </div>    <!-- .kosten -->  

            </div>   <!-- .tintvlakLB -->
        </div>   <!-- .row -->

        <div class="row">

            <!--INCLUSIEF-->
            <div class="col-sm-12 col-md-5 offset-md-1">
                <h3><?php echo $inclusief_kop; ?></h3>

                <?php echo $inclusief_lijst; ?>
              
            </div>

            <div class="beeld col-md-auto">
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/kerstboomklein.png" alt="kerstboom">
            </div>
            
        </div>  <!-- .row -->

    </div>  <!-- .container -->
</section>


<!-- SECTION 5
============================================================================================= -->
<section id="kosten">
        <div class="container">
            <div class="row">

                <!-- 1E KOLOM: op/uitstap -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h3><?php echo $opstap_toeslag_kop; ?></h3>  

                    <div class="kosten">

                    <?php $loop = new WP_Query( array(  'post_type' => 'kostenregel', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>   
                        
                        <?php while ($loop->have_posts() ) : $loop->the_post(); ?>
                        <?php
                        $category = get_field('hoort_bij');

                        if( $category === "opstap-toeslag") {
                       
                            $field = get_field_object('prijs');                            
                            $value = get_field('prijs');
                            $label = $field[ 'choices' ][ $value ];   
                            ?>

                            <div>
                                <div class="kenmerk">
                                    <span class="maki-bus MB"> </span><?php the_title(); ?>
                                </div>
                            
                                <div class="kenmerk">
                                    <?php echo $label; ?>
                                </div>
                            </div>

                          
                        <?php    } ?>

                        <?php endwhile;
                        wp_reset_query(); ?>
                    
                    </div>   <!-- kosten -->
                
                </div>   <!-- col-sm-12 -->

                <!-- 2E KOLOM: reductie -->
                <div class="col-sm-12 col-md-6 col-lg-2">
                    <h3><?php echo $reductie_kop; ?></h3>

                    <div class="kosten">

                            <div>
                                <div class="kenmerk">
                                    <span class="iconicfill-minus MB"> </span><?php echo $reductie_1e_regel_kop; ?>
                                </div>
                            
                                <div class="kenmerk">
                                    <?php echo $reductie_1e_regel_prijs; ?>
                                </div>
                            </div>
                 
                    </div>  <!--kosten-->

                </div>   <!-- col-sm-12 -->

                <!-- 3E KOLOM: extra kosten -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h3><?php echo $extra_kosten_kop; ?></h3>

                    <div class="kosten">                         
                   
                        <div>
                            <div class="kenmerk">
                                <span class="iconicfill-plus"> </span><?php echo $extra_1e_regel_kop; ?>
                            </div>
                    
                            <div class="kenmerk">
                                <?php echo $extra_1e_regel_prijs; ?>
                            </div>
                        </div>  

                        <?php if(get_field('extra_2e_regel_kop') && get_field('extra_2e_regel_prijs') ) : ?>

                        <div>
                            <div class="kenmerk">
                                <span class="iconicfill-plus"> </span><?php echo $extra_2e_regel_kop; ?>
                            </div>
                    
                            <div class="kenmerk">
                                <?php echo $extra_2e_regel_prijs; ?>
                            </div>
                        </div>    

                        <?php endif; ?>        
                      
                    </div>  <!--kosten-->

                </div>   <!-- col-sm-12 -->

                <!-- 4E KOLOM: beeld -->
                <div class="beeld1 col-sm-12 col-md-2 col-lg-2">
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/kerstboomklein2.png" alt="kerstboom">    
                </div>   <!--  -->
                
            </div>
        </div>  <!-- .container -->
    </section>
    
