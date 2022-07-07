
           <?php if($this->session->userdata('logged_in')): ?>
        
          <?php else: ?>


  
       <div class="alert-success text-center">
        <?php if($this->session->flashdata('user_registered')): ?>
        
         <?php echo $this->session->flashdata('user_registered');  ?>

        <?php endif; ?>
        </div>
   
     
      <?php if($this->session->flashdata('login_failed')): ?>
          
          <?php echo "<div class='alert alert-danger alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                ".$this->session->flashdata('login_failed') ."<h6><i></i></h6></div>" ?>
          
           <?php endif; ?>


               <?php 
                 
                 $attributes = array('id' => 'login_form', 'class' => 'form-horizontal user'); 
             
                ?>
               <?php echo form_open('standardusercontrol/login', $attributes); ?>

                <div class="form-group row">
                </div>
                <div class="form-group ">
                <?php echo form_label("Nom D'utilisateur"); ?>
                  <input type="text" class="form-control  <?= (form_error('user1') == "" ? '':'is-invalid') ?> "  name="user1" placeholder="Nom D'utilisateur" value="<?php echo set_value('user1') ?>">
                  <div class="text-danger text-center"><?php echo form_error('user1'); ?></div>
                </div>
                <div class="form-group">
                 <?php echo form_label("Mot De Passe"); ?>
                    <input type="password" class="form-control  <?= (form_error('pass1') == "" ? '':'is-invalid') ?>" name="pass1" placeholder="Mot De Passe" value="<?php echo set_value('pass1') ?>">
                    <div class="text-danger text-center"><?php echo form_error('pass1'); ?></div>
                </div>
                <button style="margin-left: 9rem;" type="submit" class="btn btn-primary btn-icon-split" name="submit">
                 <span class="icon text-white-100">
                   
                    S'authentifier
                  </span>
                </button>
               <?php echo form_close(); ?>
          
     <?php endif; ?>

      <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/js/script.min.js"></script>
