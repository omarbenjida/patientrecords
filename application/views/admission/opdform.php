    
   
            <?php if($this->session->flashdata('patientrecord_success')): ?>
          
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('patientrecord_success') ."</div>" ?>
          
           <?php endif; ?>

       <?php if($this->session->flashdata('patientrecord_failed')): ?>
          
          <?php echo "<div style='bg-color:#e74a3b;' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                ".$this->session->flashdata('patientrecord_failed') ."<h6><i class='con fa fa-check'></i></h6></div>" ?>
          
           <?php endif; ?>
  

     <div class="container-fluid">

         <h1 class="h3 mb-2 text-gray-800 text-center">Ajouter Patient </h1>

              <hr>
                 
              <?php $attributes = array('id' => 'opd_form', 'class' => 'form-horizontal user'); ?>
               <?php echo form_open('admissioncontrol/opd_process', $attributes); ?>
              
                   <div class="row"> <!-- ROW 2 -->
                
                 <div class="col-sm-12 "><!-- first column -->
                  <div class="row">
                
                  
                  
                  </div><!--  ROW -->   
               
                   <div class="row">
                     <div style="margin-left: 4px;" class="col-sm-4">
                          <?php echo form_label('Nom'); ?>
                   <input type="text"  class="form-control  <?= (form_error('lname') == "" ? '':'is-invalid') ?>"  name="lname" placeholder="Nom" value="<?php echo set_value('lname') ?>">
                  <div class="text-danger text-center"><?php echo form_error('lname'); ?></div>
                     </div>
                     <div class="col-sm-4">
                       <?php echo form_label('Prénom'); ?>
                           <input type="text" style="margin-left: 4px;"  class="form-control  <?= (form_error('fname') == "" ? '':'is-invalid') ?>"  name="fname" placeholder="Prénom" value="<?php echo set_value('fname') ?>">
                  <div class="text-danger text-center"><?php echo form_error('fname'); ?></div>
                     </div>
                     <div class="col-sm-3">
                      <?php echo form_label('Surnom'); ?>
                       <input type="text" style="margin-left: 2px;" class="form-control  <?= (form_error('middlen') == "" ? '':'is-invalid') ?>"  name="middlen" placeholder="Surnom" value="<?php echo set_value('middlen') ?>">
                  <div class="text-danger text-center"><?php echo form_error('middlen'); ?></div>
                     </div>

                   </div>
                  <div class="row">
                    <div style="margin-left: 4px;" class="col-sm-11">
                      <?php echo form_label('Address'); ?>
                                <input type="text" style="margin-left: 7px;" class="form-control  <?= (form_error('address') == "" ? '':'is-invalid') ?>"  name="address" placeholder="adresse" value="<?php echo set_value('address') ?>">
                  <div class="text-danger text-center"><?php echo form_error('address'); ?></div>
                    </div>          
                  </div>
                   <div class="row">
                     <div style="margin-left: 4px;" class="col-sm-2">
                       <?php echo form_label('Age'); ?>
                                <input type="text" class="form-control  <?= (form_error('age') == "" ? '':'is-invalid') ?>"  name="age" placeholder="Age" value="<?php echo set_value('age') ?>">
                  <div class="text-danger text-center"><?php echo form_error('age'); ?></div>  
                     </div>
                    <div style="margin-left: 4px;" class="col-xs-3">
                       <?php echo form_label('Anniverssaire'); ?>
                                <input type="date" class="form-control  <?= (form_error('datebirth') == "" ? '':'is-invalid') ?>"  name="datebirth" value="<?php echo set_value('datebirth') ?>">
                     <div class="text-danger text-center"><?php echo form_error('datebirth'); ?></div> 
                     </div>
                     <div style="margin-left: 4px;" class="col-sm-3">
                       <?php echo form_label('Ville De Naissance'); ?>
                                <input type="text" class="form-control  <?= (form_error('br_place') == "" ? '':'is-invalid') ?>" placeholder="Place de naissance"  name="br_place" value="<?php echo set_value('br_place') ?>">
                     <div class="text-danger text-center"><?php echo form_error('br_place'); ?></div> 
                     </div>
                     <div style="margin-left: 4px;" class="col-sm-3">
                     <?php echo form_label('Statut'); ?>
                       <select  class="form-control" name="civilstat" >
                         <option value="">Select</option>
                        <?php if(count($get_civilstat)): ?>
                        <?php foreach($get_civilstat as $civilstat): ?>
                        <option value=<?php echo $civilstat->c_name; ?><?php echo set_select('civilstat', $civilstat->c_name); ?>><?php echo $civilstat->c_name; ?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                      </select> 
                     <div class="text-danger text-center"><?php echo form_error('civilstat'); ?></div>   
                     </div>
                    </div>

                  </div>
                <div class="row">
                 <div style="margin-left: 30px;" class="col-xs-3">
                        <?php echo form_label('gender'); ?>
                      <select name="gen" class="form-control " name="gen">
                        <option value="">Sexe</option>
                        <?php if(count($get_gender)): ?>
                        <?php foreach($get_gender as $gender): ?>
                        <option value=<?php echo $gender->g_name; ?><?php echo set_select('gen', $gender->g_name); ?>><?php echo $gender->g_name; ?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                      </select>  
                   <div class="text-danger text-center"><?php echo form_error('gen'); ?></div>
                    </div>

                     <div style="margin-left: 30px;" class="col-xs-3">
                        <?php echo form_label('Mobile.'); ?>
                                <input type="number" class="form-control  <?= (form_error('number') == "" ? '':'is-invalid') ?>" placeholder="Mobile."  name="number" value="<?php echo set_value('number') ?>">
                     <div class="text-danger text-center"><?php echo form_error('number'); ?></div>

                    </div>

                    <div style="margin-left: 20px;" class="col-xs-3">
                        <?php echo form_label('Religion'); ?>
                                <input type="text" class="form-control  <?= (form_error('religion') == "" ? '':'is-invalid') ?>" placeholder="Religion"  name="religion" value="<?php echo set_value('religion') ?>">
                     <div class="text-danger text-center"><?php echo form_error('religion'); ?></div> 
                   </div>

                    <div style="margin-left: 20px;" class="col-xs-3">
                      <?php echo form_label('Occupation'); ?>
                                <input type="text" class="form-control <?= (form_error('occup') == "" ? '':'is-invalid') ?>" placeholder="Occupation"  name="occup" value="<?php echo set_value('occup') ?>">
                     <div class="text-danger text-center"><?php echo form_error('occup'); ?></div>
                     </div>                   
                   </div>

                  </div>
                  <br><br>
            
                   <button style="margin-left:430px;" id="submitbtn" type="submit" class="btn btn-primary" name="submit">
                 <span class="icon text-white-100"> 
                    Ajouter Patient
                  </span>
                </button>
                      
               <?php echo form_close(); ?>
                
             </div>

 <!-- Bootstrap core JavaScript-->
  <script src="../../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../../assets/script.min.js"></script>
