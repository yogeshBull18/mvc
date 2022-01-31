<?php $this->view('inc/header'); ?> 

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero -->
    <div class="position-relative overflow-hidden content-space-t-md-4">
      <div class="container">
        <div class="position-relative content-space-t-3 content-space-t-md-0 content-space-t-lg-3 content-space-b-2 content-space-b-md-3 content-space-b-xl-5">
          <div class="row position-relative zi-2 mt-md-n5">
            <div class="col-md-8 mb-7 mb-md-0">
              <!-- Heading -->
              <div class="w-md-75 mb-7">
                <h1 class="display-4">Discover a place you'll
                  <span class="text-primary text-highlight-warning">
                    <span class="js-typedjs"
                          data-hs-typed-options='{
                            "strings": ["love to live", "enjoy living"],
                            "typeSpeed": 90,
                            "loop": true,
                            "backSpeed": 30,
                            "backDelay": 2500
                          }'></span>
                  </span>
                </h1>
              </div>
              <!-- End Heading -->

              <form>
                <!-- Input Card -->
                <div class="input-card">
                  <div class="input-card-form">
                    <label for="searchLocationForm" class="form-label visually-hidden">Search location</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-prepend input-group-text">
                      <i class="fas fa-search"></i>
                      </span>
                      <input type="text" class="form-control form-control-lg" id="searchLocationForm" placeholder="Enter location" aria-label="Enter location">
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary btn-lg">Search</button>
                </div>
                <!-- End Input Card -->
              </form>

              <p class="form-text small">Search through over 125,000 listings</p>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="col-md-6 position-md-absolute top-0 end-0">
            <img class="img-fluid" src="<?php  base_url(); ?>/public/front/img/900x900/img20.jpg" alt="Image Description">

            <!-- SVG Shape -->
            <div class="position-absolute bottom-0 end-0 zi-n1 mb-n10 me-n7" style="width: 12rem;">
              <img class="img-fluid" src="../assets/svg/components/dots-lg.svg" alt="Image Description">
            </div>
            <!-- End SVG Shape -->
          </div>
        </div>
      </div>

      <div class="col-md-10 position-absolute top-0 start-0 zi-n1 gradient-y-three-sm-primary h-100" style="background-size: calc(1000px + (100vw - 1000px) / 2);"></div>
    </div>
    <!-- End Hero -->

    <!-- Card Grid -->
    <div class="container content-space-2 content-space-b-lg-3">
      <!-- Title -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-7">
        <h2>New properties on Front</h2>
      </div>
      <!-- End Title -->

      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 mb-5">
        <?php 
          foreach($data['property'] as $property)
          {
        ?>        
            <div class="col mb-3">
              <!-- Card -->
              <a class="card card-flush shadow-none h-100" href="<?php echo base_url('property/').$property['slug']; ?>">
                <div class="card-pinned">
                  <img class="card-img" src="<?php  base_url(); ?>/public/uploads/<?php echo $property['banner']; ?>" alt="Image <?php echo $property['banner']; ?>">

                  <div class="card-pinned-top-start">
                    <span class="badge bg-success">For sale</span>
                  </div>
                </div>

                <!-- Body -->
                <div class="card-body"> 

                  <div class="row align-items-center mb-3">
                    <div class="col">
                      <h4 class="card-title text-inherit"><?php echo $property['title']; ?></h4>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <h3 class="card-title text-primary"><?php echo $property['price']; ?></h3>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->

                  <ul class="list-inline list-separator text-body small">
                    <li class="list-inline-item">
                      <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 512"><path d="M176 256c44.11 0 80-35.89 80-80s-35.89-80-80-80-80 35.89-80 80 35.89 80 80 80zm352-128H304c-8.84 0-16 7.16-16 16v144H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v352c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-48h512v48c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V240c0-61.86-50.14-112-112-112z"/></svg>
                      </span>
                      3 bed
                    </li>
                    <li class="list-inline-item">
                      <span class="svg-icon svg-icon-xs svg-inline text-muted me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><path d="M304,320a16,16,0,1,0,16,16A16,16,0,0,0,304,320Zm32-96a16,16,0,1,0,16,16A16,16,0,0,0,336,224Zm32,64a16,16,0,1,0-16-16A16,16,0,0,0,368,288Zm-32,32a16,16,0,1,0-16-16A16,16,0,0,0,336,320Zm-32-64a16,16,0,1,0,16,16A16,16,0,0,0,304,256Zm128-32a16,16,0,1,0-16-16A16,16,0,0,0,432,224Zm-48,16a16,16,0,1,0,16-16A16,16,0,0,0,384,240Zm-16-48a16,16,0,1,0,16,16A16,16,0,0,0,368,192Zm96,32a16,16,0,1,0,16,16A16,16,0,0,0,464,224Zm32-32a16,16,0,1,0,16,16A16,16,0,0,0,496,192Zm-64,64a16,16,0,1,0,16,16A16,16,0,0,0,432,256Zm-32,32a16,16,0,1,0,16,16A16,16,0,0,0,400,288Zm-64,64a16,16,0,1,0,16,16A16,16,0,0,0,336,352Zm-32,32a16,16,0,1,0,16,16A16,16,0,0,0,304,384Zm64-64a16,16,0,1,0,16,16A16,16,0,0,0,368,320Zm21.65-218.35-11.3-11.31a16,16,0,0,0-22.63,0L350.05,96A111.19,111.19,0,0,0,272,64c-19.24,0-37.08,5.3-52.9,13.85l-10-10A121.72,121.72,0,0,0,123.44,32C55.49,31.5,0,92.91,0,160.85V464a16,16,0,0,0,16,16H48a16,16,0,0,0,16-16V158.4c0-30.15,21-58.2,51-61.93a58.38,58.38,0,0,1,48.93,16.67l10,10C165.3,138.92,160,156.76,160,176a111.23,111.23,0,0,0,32,78.05l-5.66,5.67a16,16,0,0,0,0,22.62l11.3,11.31a16,16,0,0,0,22.63,0L389.65,124.28A16,16,0,0,0,389.65,101.65Z"/></svg>
                      </span>
                      2 bath
                    </li>
                    <li class="list-inline-item">
                      <i class="bi-rulers text-muted me-1"></i> 1,428 sqft
                    </li>
                  </ul>
                </div>
                <!-- End Body -->
              </a>
              <!-- End Card -->
            </div>
            <!-- End Col -->
        <?php 
          }
        ?>
      </div>
      <!-- End Row -->

      <div class="text-center">
        <a class="btn btn-outline-primary" href="../demo-real-estate/property-grid.html">View all properties for sale <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
    <!-- End Card Grid -->

    <!-- Features -->
    <div class="position-relative">
      <div class="container content-space-lg-3">
        <div class="row align-items-center">
          <div class="col-12 col-lg-9 mb-7 mb-md-0">
            <!-- Heading -->
            <div class="w-md-65 mb-7">
              <h2 class="h1">Front helps you make better property decisions</h2>
              <p>Front has England's largest collection of street and suburb reviews, empowering you to find the right area for you to move to. With tens of thousands of local community topics and discussions, find the answers to all your questions about an area, or ask the locals.</p>
            </div>
            <!-- End Heading -->

            <div class="row">
              <div class="col-md-4 mb-3 mb-md-0">
                <!-- Card -->
                <div class="card h-100">
                  <div class="card-body">
                    <span class="svg-icon text-primary mb-3">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3C5.67157 3 5 3.67157 5 4.5V6H3.5C2.67157 6 2 6.67157 2 7.5C2 8.32843 2.67157 9 3.5 9H5V19.5C5 20.3284 5.67157 21 6.5 21C7.32843 21 8 20.3284 8 19.5V9H20.5C21.3284 9 22 8.32843 22 7.5C22 6.67157 21.3284 6 20.5 6H8V4.5C8 3.67157 7.32843 3 6.5 3Z" fill="#035A4B"/>
                      <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M20.5 11H10V17.5C10 18.3284 10.6716 19 11.5 19H15.5C17.3546 19 19.0277 18.2233 20.2119 16.9775C20.1436 16.9922 20.0727 17 20 17C19.4477 17 19 16.5523 19 16V13C19 12.4477 19.4477 12 20 12C20.5523 12 21 12.4477 21 13V15.9657C21.6334 14.9626 22 13.7741 22 12.5C22 11.6716 21.3284 11 20.5 11Z" fill="#035A4B"/>
                      </svg>

                    </span>
                    <h4 class="card-title">Find homes for sale</h4>
                    <p class="card-text">Over 1 million+ homes for sale available on the website.</p>
                    <a class="card-link" href="#">Properties for sale <i class="bi-chevron-right small ms-1"></i></a>
                  </div>
                </div>
                <!-- End Card -->
              </div>
              <!-- End Col -->

              <div class="col-md-4 mb-3 mb-md-0">
                <!-- Card -->
                <div class="card h-100">
                  <div class="card-body">
                    <span class="svg-icon text-primary mb-3">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="#035A4B"/>
                      <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="#035A4B"/>
                      </svg>

                    </span>
                    <h4 class="card-title">Find rental properties</h4>
                    <p class="card-text">Fina a home or apartment with 35+ filters and custom keyword search.</p>
                    <a class="card-link" href="#">Properties for rent <i class="bi-chevron-right small ms-1"></i></a>
                  </div>
                </div>
                <!-- End Card -->
              </div>
              <!-- End Col -->

              <div class="col-md-4">
                <!-- Card -->
                <div class="card h-100">
                  <div class="card-body">
                    <span class="svg-icon text-primary mb-3">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.3" d="M18 22H6C5.4 22 5 21.6 5 21V8C6.6 6.4 7.4 5.6 9 4H15C16.6 5.6 17.4 6.4 19 8V21C19 21.6 18.6 22 18 22ZM12 5.5C11.2 5.5 10.5 6.2 10.5 7C10.5 7.8 11.2 8.5 12 8.5C12.8 8.5 13.5 7.8 13.5 7C13.5 6.2 12.8 5.5 12 5.5Z" fill="#035A4B"/>
                      <path d="M12 7C11.4 7 11 6.6 11 6V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V6C13 6.6 12.6 7 12 7ZM15.1 10.6C15.1 10.5 15.1 10.4 15 10.3C14.9 10.2 14.8 10.2 14.7 10.2C14.6 10.2 14.5 10.2 14.4 10.3C14.3 10.4 14.3 10.5 14.2 10.6L9 19.1C8.9 19.2 8.89999 19.3 8.89999 19.4C8.89999 19.5 8.9 19.6 9 19.7C9.1 19.8 9.2 19.8 9.3 19.8C9.5 19.8 9.6 19.7 9.8 19.5L15 11.1C15 10.8 15.1 10.7 15.1 10.6ZM11 11.6C10.9 11.3 10.8 11.1 10.6 10.8C10.4 10.6 10.2 10.4 10 10.3C9.8 10.2 9.50001 10.1 9.10001 10.1C8.60001 10.1 8.3 10.2 8 10.4C7.7 10.6 7.49999 10.9 7.39999 11.2C7.29999 11.6 7.2 12 7.2 12.6C7.2 13.1 7.3 13.5 7.5 13.9C7.7 14.3 7.9 14.5 8.2 14.7C8.5 14.9 8.8 14.9 9.2 14.9C9.8 14.9 10.3 14.7 10.6 14.3C11 13.9 11.1 13.3 11.1 12.5C11.1 12.3 11.1 11.9 11 11.6ZM9.8 13.8C9.7 14.1 9.5 14.2 9.2 14.2C9 14.2 8.8 14.1 8.7 14C8.6 13.9 8.5 13.7 8.5 13.5C8.5 13.3 8.39999 13 8.39999 12.6C8.39999 12.2 8.4 11.9 8.5 11.7C8.5 11.5 8.6 11.3 8.7 11.2C8.8 11.1 9 11 9.2 11C9.5 11 9.7 11.1 9.8 11.4C9.9 11.7 10 12 10 12.6C10 13.2 9.9 13.6 9.8 13.8ZM16.5 16.1C16.4 15.8 16.3 15.6 16.1 15.4C15.9 15.2 15.7 15 15.5 14.9C15.3 14.8 15 14.7 14.6 14.7C13.9 14.7 13.4 14.9 13.1 15.3C12.8 15.7 12.6 16.3 12.6 17.1C12.6 17.6 12.7 18 12.9 18.4C13.1 18.7 13.3 19 13.6 19.2C13.9 19.4 14.2 19.5 14.6 19.5C15.2 19.5 15.7 19.3 16 18.9C16.4 18.5 16.5 17.9 16.5 17.1C16.7 16.8 16.6 16.4 16.5 16.1ZM15.3 18.4C15.2 18.7 15 18.8 14.7 18.8C14.4 18.8 14.2 18.7 14.1 18.4C14 18.1 13.9 17.7 13.9 17.2C13.9 16.8 13.9 16.5 14 16.3C14.1 16.1 14.1 15.9 14.2 15.8C14.3 15.7 14.5 15.6 14.7 15.6C15 15.6 15.2 15.7 15.3 16C15.4 16.2 15.5 16.6 15.5 17.2C15.5 17.7 15.4 18.1 15.3 18.4Z" fill="#035A4B"/>
                      </svg>

                    </span>
                    <h4 class="card-title">Sell properties</h4>
                    <p class="card-text">Wanting to find a sold property price or see what sold on the weekend?</p>
                    <a class="card-link" href="#">Sell properties <i class="fas bi-chevron-right small ms-1"></i></a>
                  </div>
                </div>
                <!-- End Card -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>

      <div class="banner-half-middle-x bg-img-start d-none d-md-block" style="background-image: url(<?php echo base_url() ?>/public/front/img/900x900/img22.jpg);"></div>
    </div>
    <!-- End Features -->

    <!-- Features Stats -->
    <div class="container content-space-2 content-space-lg-3">
      <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-0">
          <div class="text-center">
            <small class="text-cap text-primary">&mdash; Valuation methods </small>
            <h4 class="display-4">500,000</h4>
            <p>Our valuation methods are based on more than 500,000 real transactions.</p>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-4 mb-3 mb-sm-0">
          <div class="text-center">
            <small class="text-cap text-primary">&mdash; Coverage</small>
            <h4 class="display-4">75%</h4>
            <p>This represents over 75% of the UK property sales over the past 10 years.</p>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-4">
          <div class="text-center">
            <small class="text-cap text-primary">&mdash; Advanced algorithm</small>
            <h4 class="display-4">125,000</h4>
            <p>Our algorithms are updated by data from over 125,000 property sales every year.</p>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Features Stats -->

    <!-- Card Grid -->
    <div class="container content-space-b-2 content-space-b-lg-3">
      <!-- Title -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2>Browse properties by city in the UK</h2>
        <p>Take a deep dive and browse original neighborhood photos, drone footage, resident reviews and local insights to see if the homes for sale are right for you.</p>
      </div>
      <!-- End Title -->

      <div class="text-center">
        <!-- Nav -->
        <ul class="nav nav-segment mb-7" id="featuresTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" href="#forSale" id="forSale-tab" data-bs-toggle="tab" data-bs-target="#forSale" role="tab" aria-controls="forSale" aria-selected="true">For sale</a>
          </li>

          <li class="nav-item" role="presentation">
            <a class="nav-link" href="#forRent" id="forRent-tab" data-bs-toggle="tab" data-bs-target="#forRent" role="tab" aria-controls="forRent" aria-selected="false">For rent</a>
          </li>
        </ul>
        <!-- End Nav -->
      </div>

      <!-- Tab Content -->
      <div class="tab-content" id="houseHeroTabContent">
        <div class="tab-pane fade show active" id="forSale" role="tabpanel" aria-labelledby="forSale-tab">
          <div class="row gx-3">
            <div class="col-sm-6 col-lg-4 mb-3">
              <!-- Card -->
              <a class="card card-stretched-vertical card-transition shadow-none bg-img-start gradient-y-overlay-lg-dark" href="demo-real-estate/property-grid.html" style="background-image: url(<?php echo base_url(); ?>/public/front/img/480x320/img28.jpg); min-height: 15rem;">
                <div class="card-body">
                  <div class="mb-1">
                    <span class="badge bg-light text-dark">3521 offers</span>
                  </div>
                  
                  <div class="card-footer">
                    <h3 class="text-white mb-0">London</h3>
                    <span class="d-block text-white">Prices from &#163;5,490,000</span>
                  </div>
                </div>
              </a>
              <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3">
              <!-- Card -->
              <a class="card card-stretched-vertical card-transition shadow-none bg-img-start gradient-y-overlay-lg-dark" href="../demo-real-estate/property-grid.html" style="background-image: url(<?php echo base_url(); ?>/public/front/img/480x320/img29.jpg); min-height: 15rem;">
                <div class="card-body">
                  <div class="mb-1">
                    <span class="badge bg-light text-dark">4659 offers</span>
                  </div>
                  
                  <div class="card-footer">
                    <h3 class="text-white mb-0">Oxford</h3>
                    <span class="d-block text-white">Prices from &#163;3,820,000</span>
                  </div>
                </div>
              </a>
              <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3">
              <!-- Card -->
              <a class="card card-stretched-vertical card-transition shadow-none bg-img-start gradient-y-overlay-lg-dark" href="../demo-real-estate/property-grid.html" style="background-image: url(<?php echo base_url(); ?>/public/front/img/480x320/img11.jpg); min-height: 15rem;">
                <div class="card-body">
                  <div class="mb-1">
                    <span class="badge bg-light text-dark">2471 offers</span>
                  </div>
                  
                  <div class="card-footer">
                    <h3 class="text-white mb-0">Edinburgh</h3>
                    <span class="d-block text-white">Prices from &#163;3,371,000</span>
                  </div>
                </div>
              </a>
              <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3">
              <!-- Card -->
              <a class="card card-stretched-vertical card-transition shadow-none bg-img-start gradient-y-overlay-lg-dark" href="../demo-real-estate/property-grid.html" style="background-image: url(<?php echo base_url(); ?>/public/front/img/480x320/img10.jpg); min-height: 15rem;">
                <div class="card-body">
                  <div class="mb-1">
                    <span class="badge bg-light text-dark">5523 offers</span>
                  </div>
                  
                  <div class="card-footer">
                    <h3 class="text-white mb-0">Newcastle</h3>
                    <span class="d-block text-white">Prices from &#163;2,588,000</span>
                  </div>
                </div>
              </a>
              <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3">
              <!-- Card -->
              <a class="card card-stretched-vertical card-transition shadow-none bg-img-start gradient-y-overlay-lg-dark" href="../demo-real-estate/property-grid.html" style="background-image: url(<?php echo base_url(); ?>/public/front/img/480x320/img9.jpg); min-height: 15rem;">
                <div class="card-body">
                  <div class="mb-1">
                    <span class="badge bg-light text-dark">939 offers</span>
                  </div>
                  
                  <div class="card-footer">
                    <h3 class="text-white mb-0">Liverpool</h3>
                    <span class="d-block text-white">Prices from &#163;1,318,000</span>
                  </div>
                </div>
              </a>
              <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3">
              <!-- Card -->
              <a class="card card-stretched-vertical card-transition shadow-none bg-img-start gradient-y-overlay-lg-dark" href="../demo-real-estate/property-grid.html" style="background-image: url(<?php echo base_url(); ?>/public/front/img/480x320/img8.jpg); min-height: 15rem;">
                <div class="card-body">
                  <div class="mb-1">
                    <span class="badge bg-light text-dark">364 offers</span>
                  </div>
                  
                  <div class="card-footer">
                    <h3 class="text-white mb-0">Bristol</h3>
                    <span class="d-block text-white">Prices from &#163;1,457,000</span>
                  </div>
                </div>
              </a>
              <!-- End Card -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="tab-pane fade" id="forRent" role="tabpanel" aria-labelledby="forRent-tab">
          <div class="row gx-3">
            <div class="col-sm-6 col-lg-4 mb-3">
              <!-- Card -->
              <a class="card card-stretched-vertical card-transition shadow-none bg-img-start gradient-y-overlay-lg-dark" href="../demo-real-estate/property-grid.html" style="background-image: url(<?php echo base_url(); ?>/public/front/img/480x320/img11.jpg); min-height: 15rem;">
                <div class="card-body">
                  <div class="mb-1">
                    <span class="badge bg-light text-dark">2471 offers</span>
                  </div>
                  
                  <div class="card-footer">
                    <h3 class="text-white mb-0">Edinburgh</h3>
                    <span class="d-block text-white">Prices from &#163;1,000</span>
                  </div>
                </div>
              </a>
              <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3">
              <!-- Card -->
              <a class="card card-stretched-vertical card-transition shadow-none bg-img-start gradient-y-overlay-lg-dark" href="../demo-real-estate/property-grid.html" style="background-image: url(<?php echo base_url(); ?>/public/front/img/480x320/img28.jpg); min-height: 15rem;">
                <div class="card-body">
                  <div class="mb-1">
                    <span class="badge bg-light text-dark">3521 offers</span>
                  </div>
                  
                  <div class="card-footer">
                    <h3 class="text-white mb-0">London</h3>
                    <span class="d-block text-white">Prices from &#163;5,000</span>
                  </div>
                </div>
              </a>
              <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3">
              <!-- Card -->
              <a class="card card-stretched-vertical card-transition shadow-none bg-img-start gradient-y-overlay-lg-dark" href="../demo-real-estate/property-grid.html" style="background-image: url(<?php echo base_url(); ?>/public/front/img/480x320/img29.jpg); min-height: 15rem;">
                <div class="card-body">
                  <div class="mb-1">
                    <span class="badge bg-light text-dark">4659 offers</span>
                  </div>
                  
                  <div class="card-footer">
                    <h3 class="text-white mb-0">Oxford</h3>
                    <span class="d-block text-white">Prices from &#163;7,000</span>
                  </div>
                </div>
              </a>
              <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3">
              <!-- Card -->
              <a class="card card-stretched-vertical card-transition shadow-none bg-img-start gradient-y-overlay-lg-dark" href="../demo-real-estate/property-grid.html" style="background-image: url(<?php echo base_url(); ?>/public/front/img/480x320/img9.jpg); min-height: 15rem;">
                <div class="card-body">
                  <div class="mb-1">
                    <span class="badge bg-light text-dark">939 offers</span>
                  </div>
                  
                  <div class="card-footer">
                    <h3 class="text-white mb-0">Liverpool</h3>
                    <span class="d-block text-white">Prices from &#163;8,000</span>
                  </div>
                </div>
              </a>
              <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3">
              <!-- Card -->
              <a class="card card-stretched-vertical card-transition shadow-none bg-img-start gradient-y-overlay-lg-dark" href="../demo-real-estate/property-grid.html" style="background-image: url(<?php echo base_url(); ?>/public/front/img/480x320/img8.jpg); min-height: 15rem;">
                <div class="card-body">
                  <div class="mb-1">
                    <span class="badge bg-light text-dark">364 offers</span>
                  </div>
                  
                  <div class="card-footer">
                    <h3 class="text-white mb-0">Bristol</h3>
                    <span class="d-block text-white">Prices from &#163;7,000</span>
                  </div>
                </div>
              </a>
              <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3">
              <!-- Card -->
              <a class="card card-stretched-vertical card-transition shadow-none bg-img-start gradient-y-overlay-lg-dark" href="../demo-real-estate/property-grid.html" style="background-image: url(<?php echo base_url(); ?>/public/front/img/480x320/img10.jpg); min-height: 15rem;">
                <div class="card-body">
                  <div class="mb-1">
                    <span class="badge bg-light text-dark">5523 offers</span>
                  </div>
                  
                  <div class="card-footer">
                    <h3 class="text-white mb-0">Newcastle</h3>
                    <span class="d-block text-white">Prices from &#163;5,000</span>
                  </div>
                </div>
              </a>
              <!-- End Card -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
      </div>
      <!-- End Tab Content -->
    </div>
    <!-- End Card Grid -->

    <!-- Testimonials -->
    <div class="overflow-hidden content-space-b-2 content-space-b-lg-3">
      <!-- Heading -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-7">
        <h2>Reviews</h2>
        <p>Over 40,000 happy customers. Be the next one.</p>
      </div>
      <!-- End Heading -->

      <div class="container">
        <div class="row justify-content-center align-items-md-center mb-7">
          <div class="col-11 col-md-6 col-lg-4 mb-5 mb-md-0 me-md-n9">
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <span class="svg-icon text-primary mb-3">
                  <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.5001 5.84998C9.0001 7.64998 5.4001 12.15 5.4001 16.2C5.4001 17.1 5.4001 18 5.8501 18.45C6.7501 17.55 8.1001 17.1 9.9001 17.1C13.5001 17.1 16.6501 19.8 16.6501 23.85C16.6501 27.9 13.5001 30.6 9.9001 30.6C6.3001 31.05 4.5001 29.7 3.1501 27.45C1.8001 25.2 1.3501 22.05 1.3501 20.25C1.3501 13.05 4.9501 7.19998 12.6001 3.59998L13.5001 5.84998ZM31.9501 5.84998C27.4501 7.64998 23.8501 12.15 23.8501 16.2C23.8501 17.1 23.8501 18 24.3001 18.45C25.2001 17.55 26.5501 17.1 28.3501 17.1C31.9501 17.1 35.1001 19.8 35.1001 23.85C35.1001 27.9 31.9501 30.6 28.3501 30.6C25.2001 30.6 23.4001 29.25 22.0501 27C19.8001 25.2 19.8001 22.05 19.8001 20.25C19.8001 13.05 23.4001 7.19998 31.0501 3.59998L31.9501 5.84998Z" fill="#377dff"/>
                  </svg>

                </span>

                <!-- Blockquote -->
                <figure>
                  <blockquote class="blockquote blockquote-sm blockquote-left-border">" With Front Real Estate we can be self-reliant, like cooking for ourselves rather than eating out every night. You feel like part of the community rather than a visitor. "</blockquote>
                  
                  <figcaption class="blockquote-footer">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-circle" src="<?php  base_url(); ?>/public/front/img/160x160/img9.jpg" alt="Image Description">
                      </div>
                      <div class="flex-grow-1 ms-3">
                        Christina Kray
                        <span class="blockquote-footer-source">Happy customer</span>
                      </div>
                    </div>
                  </figcaption>
                </figure>
                <!-- End Blockquote -->
              </div>
            </div>
            <!-- End Card -->
          </div>

          <div class="col-md-6 mt-n9 mt-md-0">
            <img class="img-fluid" src="<?php  base_url(); ?>/public/front/img/900x900/img21.jpg" alt="Image Description">
          </div>
        </div>

        <div class="text-center">
          <h3>See what other people are saying</h3>
 

          <a class="btn btn-primary px-5" href="#">Read more reviews <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
    <!-- End Testimonials -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
<?php $this->view('inc/footer'); ?>