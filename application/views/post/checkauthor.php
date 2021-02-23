
 <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center">


      <div class="logo mr-auto">
        <h1 class="text-light"><a href="<?= base_url('');?>"><span>The Book of Travel</span></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="<?= base_url('');?>">Home</a></li>
          <li><a href="<?php echo base_url('#about');?>">About</a></li>
          <li><a href="<?php echo base_url('#photography');?>">Gallery of Travel</a></li>
          <li class="active"><a href="<?php echo base_url('post/post');?>">Post</a></li>
          <li><a href="<?php echo base_url('story/tambah');?>">Write a Story</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->


  <section id="check" class="contact section-bg">
      <div class="container"> 

       <div class="section-title">
          <h2>Check Author's Name and Email</h2>
          <p>To editing your story you must entry this form.</p>
          <p>Thank you.</p>
        </div>


  <?php if( $this->session->flashdata('message') ): ?>  
        <div class="row-mt-3">
          <div class="col-md-6">
             <?=$this->session->flashdata('message');?>
            </div>
          </div>
      <?php endif; ?> 

        <div class="row-mt-3">
          <div class="col-md-3">

        <form class="user" action="" method="post" >
          <div class="form-group">

            <label for="name">Name</label>
            <input type="name" class="form-control form-control-user" id="name"  name="name" placeholder="Enter Author's Name" value="<?php echo set_value('name');?>">
             <?php echo form_error('name', '<small class="text-danger">', '</small>'); ?>
          </div>
           <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address" value="<?php echo set_value('email');?>">
           <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
          </div>
          <button type="submit" class="btn btn-primary" name="checkauthor">Check Now</button>
        </form>

      </div>
    </div>
                
          
      </div>
          