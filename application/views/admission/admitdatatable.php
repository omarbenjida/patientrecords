<!-- DataTales Example -->
<div class="card shadow mb-4">

  <div class="card-header py-3">

    <!-- Page Heading -->
    <h5 class="mb-2 text-gray-800">Patients
    </h5>

  </div>
  <div class="card-body">

    <?php if ($this->session->flashdata('import_record')) : ?>
      <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                " . $this->session->flashdata('import_record') . "<h6><i class='con fa fa-check'></i></h6></div>" ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('patientrecord_updated')) : ?>

      <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                " . $this->session->flashdata('patientrecord_updated') . "<h6><i class='con fa fa-check'></i></h6></div>" ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('import_record_failed')) : ?>

      <?php echo "<div style='#1cc88a' class='alert alert-danger alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                " . $this->session->flashdata('import_record_failed') . "<h6><i class='con fa fa-check'></i></h6></div>" ?>
    <?php endif; ?>

    <div class="table">
      <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0" data-page-length='250'>

        <thead>
          <tr>
            
            <th class="text-center">Nom</th>
            <th class="text-center">Prénom</th>
            <th class="text-center">Surnom</th>
            <th class="text-center">Sexe</th>
            <th class="text-center">Age</th>
            <th class="text-center">Numéro de téléphone</th>
            <th class="text-center">Date D'inscription</th>
        
            <th class="text-center">Action</th>
          </tr>
        </thead>

        <tbody>

          <?php foreach ($get_data as $patient) : ?>
            
            <tr>

              
              <?php echo "<td class='text-center'>" . $patient->pr_lname . "</td>" ?>
              <?php echo "<td class='text-center'>" . $patient->pr_fname . "</td>" ?>
              <?php echo "<td class='text-center'>" . $patient->pr_mname . "</td>" ?>
              <?php echo "<td class='text-center'>" . $patient->pr_gen . "</td>" ?>
              <?php echo "<td class='text-center'>" . $patient->pr_age . "</td>" ?>
              <?php echo "<td class='text-center'>" . $patient->pr_number . "</td>" ?>
              <?php echo "<td class='text-center'>" . $patient->pr_date . "</td>" ?>
              

              <?php echo "<td class='text-center'><a class='btn btn-warning' href='" . base_url() . "admissioncontrol/edit_form/" . $patient->pr_id . "'>Editer
                  </a><a style='margin-left:5px;' class='btn btn-primary' href='" . base_url() . "admissioncontrol/patientdataview/" . $patient->pr_id . "'>Voir
                  </a></td>" ?>


            </tr>
          
          <?php endforeach; ?>

        </tbody>

      </table>
    </div>
  </div>
</div>




<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>




<script>
  $(document).ready(function() {
    $('#import_form').on('submit', function(event) {
      event.preventDefault();

      $.ajax({
        beforeSend: function() {
          $('#btn-upload').html('Importing...');
        },
        success: function() {
          $('#import_form')[0].reset();
          $('#btn-upload').attr('disabled', false);
          $('#btn-upload').html('Import Done');
        }
      });
    })
  });
</script>