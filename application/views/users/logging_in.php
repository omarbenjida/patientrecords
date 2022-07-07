  

      
            <?php if($this->session->flashdata('user_registered')): ?>
          
          <?php echo "<div class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                ".$this->session->flashdata('user_registered') ."<h6><i class='con fa fa-check'></i></h6></div>" ?>
          
           <?php endif; ?>



      

               <?php 
                 
                 $attributes = array('id' => 'login_new_form', 'class' => 'form-horizontal user'); 
             
                ?>
               <?php echo form_open('usercontrol/accountlogin', $attributes); ?>

                <div class="form-group row">
                </div>
                <div class="form-group ">
                  <?php echo form_label("Nom d'utilisateur") ?>
                  <input type="text" class="form-control <?= (form_error('user1') == "" ? '':'is-invalid') ?> "  name="userlogin" placeholder="Nom d'utilisateur" value="<?php echo set_value('user1') ?>">
                  <div class="text-danger text-center"><?php echo form_error('user1'); ?></div>
                </div>
                <div class="form-group">
                   <?php echo form_label("Mot De Passe") ?>
                    <input type="password" class="form-control <?= (form_error('pass1') == "" ? '':'is-invalid') ?>" name="passlogin" placeholder="Mot de passe" value="<?php echo set_value('pass1') ?>">
                    <div class="text-danger text-center"><?php echo form_error('pass1'); ?></div>
                </div>
                <button style="margin-left: 172px;" type="submit" class="btn btn-primary btn-icon-split" name="submit">
                 <span class="icon text-white-100">
                   
                    Login
                  </span>
                </button>
               <?php echo form_close(); ?>

  
 <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/js/script.min.js"></script>
