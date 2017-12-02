<?php 
$transfer_kop = get_field('transfer_kop', '48');
$transfer_vervoer = get_field('transfer_vervoer', '48');
$opstapplaatsen_kop = get_field('opstapplaatsen_kop', '48');
$opstapplaatsen_tekst = get_field('opstapplaatsen_tekst', '48');
// 48 is the id of page Reis 1

$let_op_kop = get_field('let_op_kop');
$let_op_lijst = get_field('let_op_lijst');

?>

<!-- SECTION 3
============================================================================= -->

<section id="transfer">
    <div class="container">
        <div class="row">

                <!-- TRANSFER --> 
            <div class="col-sm-auto pb-3 ml-3 tintvlakLB">
                <h2 ><?php echo $transfer_kop; ?> <span class="maki-bus LB"> </span></h2>
                <p><?php echo $transfer_vervoer; ?></p>
                <h3><?php echo $opstapplaatsen_kop; ?></h3>
                <?php echo $opstapplaatsen_tekst; ?>
                
            </div>   <!-- transfer -->

            <!--LET OP --> 
            <div class="col-sm-12 col-md-6 pl-5">
                <h3 class="condensed"><?php echo $let_op_kop; ?></h3>
                <?php echo $let_op_lijst; ?>              

                <div class="beeld"><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/Sneeuwbal.png" alt="sneeuwbal"></div>                        
            </div>   <!-- let op -->                       

        </div>
    </div>  <!-- .container -->
</section>          

<!-- MODALS SECTION 3
====================================================================== -->

<!-- Modal  -->

<?php $loop = new WP_Query( array( 'post_type' => 'modal', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while ($loop->have_posts() ) : $loop->the_post(); ?>

    <div id="<?php the_title(); ?>" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h3><?php the_field('modal_kop'); ?></h3>
                <a type="button" class="closeButton" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
                </a>
            </div> <!-- .modal-header -->

            <div class="modal-body">  
                <p><?php the_field('modal_tekst'); ?>
                </p>                                 
            </div> <!-- .modal-body -->

        </div>   <!-- .modal-content -->
    </div>
</div>

<?php 
    endwhile; 
    wp_reset_query();
?>
