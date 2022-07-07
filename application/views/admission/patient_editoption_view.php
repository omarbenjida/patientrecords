
  <div class="align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-center">Patient Record</h1>
          </div>
          
	<div class="row"> <!-- Begin of Row -->

	    <div class="col-xl-8 col-md-8 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  	<div class="col-auto">
    			 	 <div class="text-xs font-weight-bold text-success text-uppercase mb-1">PATIENT NAME</div>
    			 	 </div>
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      	&nbsp&nbsp&nbsp&nbsp&nbsp
                      	<?php echo $get_data->pr_lname ?>&nbsp&nbsp
                      	<?php echo $get_data->pr_fname ?>&nbsp&nbsp
                      	<?php echo $get_data->pr_mname ?>
                         
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xl-4 col-md-6 mb-4 ml-auto">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  	<div class="col-auto">
        			 <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Patient N°</div>
    			 	 </div>
                       <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      	<?php echo "P-0".$get_data->pr_id ?>
                        
                      </div>
                    </div>   
                  </div>
                </div>
              </div>
            </div>


    </div><!-- End of Row -->


<div class="row"><!-- Begin Row -->
 
  <!-- First Column -->
            <div class="col-lg-4">

              <!-- Details -->
              <div id="edit_option" class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success">Details <?php echo "<a style='margin-left: 225px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/patientdataview/". $get_data->pr_id ."#edit_option'>" ?>
                    <i class='fas fa-arrow-left'></i></a> </h6>        
                </div>
               <div class="card-body"> <!--Card Body begin tag  -->

               
               <?php $this->load->view($edit_option_view); ?>

                 
                </div><!--Card body end tag -->
              </div>
              
			
		   </div>



		          <!-- Findings Box -->
            <div id="findings" class="col-xl-8 col-lg-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                   <h6 class="m-0 font-weight-bold text-success">Analyses Medicales<?php echo "<a style='margin-left: 450px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/add_findings/". $get_data->pr_id ."#findings'>" ?> </a></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  Hello
                  <?php $attributes = array('id' => 'edit_option_form', 'class' => 'form-horizontal user'); ?>
               <?php echo form_open('admissioncontrol/edit_option_process/'.$this->uri->segment(3).'#edit_option', $attributes); ?>
              
               

               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                <div class="col-sm-6">
    	      
            <div style="margin-bottom:17px;">
           <div class="row no-gutters">
          <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Vital Signs</div>
           </div>
             <div class="row"><!--Begin First Column -->
              <div class="col-sm-4">
              <?php echo form_label('Blood Pressure'); ?>
             <input class="form-control" type="text" name="a_bp" value="<?php echo set_value('a_bp'); ?>" placeholder="BP">            
              </div>
              <div class="col-sm-4">
             <?php echo form_label('Respiratory Rate'); ?>
             <input class="form-control" type="text" name="a_rr" value="<?php echo set_value('a_rr'); ?>"  placeholder="RR">  
              </div>
              <div class="col-sm-4">
                <?php echo form_label('Capillary Refill'); ?>
             <input class="form-control" type="text" name="a_cr" value="<?php echo set_value('a_cr'); ?>"  placeholder="CR">   
              </div>
             </div><!--End First Column --><br>
              <div class="row"><!--Begin Second Column -->
             <div class="col-sm-4">
             <?php echo form_label('Temperature'); ?>
             <input class="form-control" type="text" name="a_temp" value="<?php echo set_value('a_temp'); ?>" placeholder="TEMP">
              </div>
             <div class="col-sm-4">
                 <?php echo form_label('Weight'); ?>
             <input class="form-control" type="text" name="a_wt" value="<?php echo set_value('a_wt'); ?>" placeholder="WT">     
              </div>
             <div class="col-sm-4">
                 <?php echo form_label('Pulse Rate'); ?>
             <input class="form-control" type="text" name="a_pr" value="<?php echo set_value('a_pr'); ?>" placeholder="PR">  
              </div>
              
   
             </div>
         
    
              
               
           
          
  
  <?php echo form_close(); ?>
                    </div>
                    

                  </div>
                 
           
         



 
  


            


</div><!-- End of Row -->
    

