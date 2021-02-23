 <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column align-items-center justify-content-center">
      <h1>The Book of Travel</h1>
      <h2>Create your story</h2>
      <!-- <a href="<?php echo base_url('#header');?>" class="btn-get-started scrollto"><i class="icofont-simple-down"></i></a> -->
    </section><!-- End Hero --> 
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


<section>
<div class="container">

  <div class="row-mt-3" float-right>
    <div class="col-md-5">
      <form action="" method="post">
        <div class="input-group" >
          <input type="text" class="form-control" placeholder="Search Story" name="keyword">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>
<br>

<?php if( $this->session->flashdata('flash') ): ?>  
        <div class="row-mt-3">
          <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Your story <strong> already </strong><?=$this->session->flashdata('flash');?>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      <?php endif; ?> 

<?php foreach ($post as $posted) : ?>

    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><a href="<?= base_url();?>post/detailpost/<?= $posted['id_post'];?>"> <?= $posted['title'];?> </a></h1>
            <h5 class="subheading">Categories : <?php echo $posted['categories'];?></h5>
            <span class="meta">Posted by <?php echo $posted['name'];?> </span>
            <br>
                <!-- <a href="<?= base_url();?>post/checkauthor/<?= $posted['id_post'];?>" class="badge badge-success">This is Your Story? Edit Your Story.</a>  -->

                <a href="<?= base_url();?>post/editpost/<?= $posted['id_post'];?>" class="badge badge-success">Edit</a> <a href="<?= base_url();?>post/hapusdata/<?= $posted['id_post'];?>" class="badge badge-danger" onClick="return confirm('Delete this post?');">Delete</a> 
          </div>
        </div>
      </div>
    </div>

  <br>

  <?php endforeach; ?> 
  </section>






 

  






