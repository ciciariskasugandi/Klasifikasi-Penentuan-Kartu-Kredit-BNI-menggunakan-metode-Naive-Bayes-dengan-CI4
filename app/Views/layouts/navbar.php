<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center bg-success">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/favicon1.png" alt="">
        <span class="d-none d-lg-block text-white ""><h2><b>BNI</b> SYARIAH</h2></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn text-white"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle ">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        
          
        <li class="nav-item dropdown pe-3">

          <a class="nav-link"  href="<?=base_url('admin/profile') ?>">
          <i class="bi bi-person-circle text-white">Ciza Admin</i>
          
          </a><!-- End Profile Iamge Icon -->

          

            


           
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->