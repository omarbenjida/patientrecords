         


           <div class="col-sm-10">

        <?php if($this->session->flashdata('forgotpass_failed')): ?>
          
          <?php echo "<div style='margin-left: 45px;' class='alert alert-danger alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                ".$this->session->flashdata('forgotpass_failed') ."<h6><i class='con fa fa-close'></i></h6></div>" ?>
          
           <?php endif; ?>
   

      
          <h1 class="h4 text-gray-900 mb-2 text-center">Mot De Passe Oublié?</h1> 
       
               <?php
                 
                 $attributes = array('id' => 'forgotuser_form', 'class' => 'form-horizontal user'); 
             
                ?>
               <?php echo form_open('indexcontrol/forgotpassuser', $attributes); ?>

                <div style="margin-left: 45px;" class="form-group row">
                  <?php echo form_label('') ?>
                    <input type="text" class="form-control <?= (form_error('user') == "" ? '':'is-invalid') ?>"  name="user" placeholder="Entrer le nom d'utilisateur" >
                  <div class="text-danger text-center"><?php echo form_error('user'); ?></div>
                </div>
                <button style="margin-left: 9rem;" type="submit" class="btn btn-primary btn-icon-split" name="submit">
                 <span class="icon text-white-100">
                   
                    Valider
                  </span>
                </button>
               <?php echo form_close(); ?>

              </div> 

  
 <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/script.min.js"></script>
