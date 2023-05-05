<?php $this->load->view('header') ?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Menu</h1>
  
  </div>


 
  <ul class="nav flex-column">
  <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url() . 'index.php/visitor' ?>">
        <span data-feather="file"></span>
        Visitors
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url() . 'index.php/visitor/list' ?>">
        <span data-feather="file"></span>
        List Visitors
      </a>
    </li>
  </ul>
</main>
</div>
</div>


</body>

</html>