<?php $this->view('inc/header'); ?> 
<main id="content" role="main">
    <!-- Form -->
    <div class="container content-space-3 content-space-lg-4">
      <div class="w-lg-75 mx-lg-auto">
        <!-- Heading -->
        <div class="text-center mb-2">
          <h1 class="h2">Login</h1> 
        </div>
        <!-- End Heading -->
        <?php
            error()
        ?>
        <form method='post' action='<?php echo base_url('login/store'); ?>' >
          <div class="mb-5"> 

            <div class="row">
              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="listingAgentNameUploadForm">Email <font color='red'>*</font></label>
                  
                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                        <i class="far fa-envelope"></i>
                    </span>
                    <input type="email" name='email' class="form-control form-control-lg" id="listingAgentNameUploadForm" placeholder="Email" >
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->

              <div class="col-sm-6">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="phoneNumberUploadForm">Password  <font color='red'>*</font></label>
                  
                  <div class="input-group input-group-merge">
                    <span class="input-group-prepend input-group-text">
                        <i class="fas fa-unlock-alt"></i>
                    </span>
                    <input type="password" name="password" class="form-control form-control-lg" id="phoneNumberUploadForm" placeholder="Password" >
                  </div>
                </div>
                <!-- End Form -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

             
 

          <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <!-- End Form -->
  </main>
<?php $this->view('inc/footer'); ?> 