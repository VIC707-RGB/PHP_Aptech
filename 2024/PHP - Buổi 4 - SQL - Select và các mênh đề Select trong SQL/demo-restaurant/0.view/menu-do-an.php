<?php 
    require_once('header.php');
    require_once('../1.controller/controller-menu-do-an.php');
    
?>

<div id="wrap-content" class="page-content custom-page-template">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="page-holder custom-page-template">
                     <div class="row">
                        <?php echo getDanhSachDanhMucController() ?>
                     </div>
                     <!-- /row -->
                     
                     <!-- /row -->
                  </div>
                  <!-- /custom-page-template --> 
               </div>
               <!-- /col-md-12 --> 
            </div>
            <!-- /row --> 
         </div>
         <!-- /container --> 
      </div>

<?php require_once('footer.php')?>