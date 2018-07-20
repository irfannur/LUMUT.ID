
    

  <?php if ($isLogin): ?>
    </br></br></br>
    <div class="container-fluid">
      <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar fixed-top bg-dark">


        <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark">
           
          <a class="navbar-brand" href="<?=site_url('dashboard');?>"><?=$title;?></a>
          <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav mr-auto">
            </ul>
          </div>
        </nav>


        </br></br>
          <form class="bd-search d-flex align-items-center">
           
            <button class="btn btn-link bd-search-docs-toggle d-md-none p-0 ml-3" type="button" data-toggle="collapse" data-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg>
            </button>
          </form>
          <br>
          <nav class="collapse d-md-block bd-links" id="bd-docs-nav">
            <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="<?=site_url('dashboard');?>">
                  <span data-feather="home"></span>
                  Beranda <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?=site_url('Post');?>">
                  <span data-feather="file"></span>
                  Post <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>

       
            <ul class="nav flex-column mb-2">
            
              <li class="nav-item">
                <a class="nav-link" href="<?=site_url('login/logout');?>">
                  <span data-feather="power"></span>
                   Logout
                </a>
              </li>
            </ul>

            <?php if ($isLogin && ($role == 'admin')): ?>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Admin Menu</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link active" href="<?=site_url('user');?>">
                  <span data-feather="users"></span>
                   Account
                </a>
              </li>
            </ul>
            <?php endif ?>
          </div>
            </nav>

          </div>

<?php endif ?>
        
          
