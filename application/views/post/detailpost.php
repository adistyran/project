<link rel="stylesheet" type="text/css" href="<?php= base_url('assets/home/css/style.css'); ?>">

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

    <br>
    <div class="container">  
      <?php if ('image' != null) { ?>
            <img src="<?= base_url();?>assets/home/img/image/<?=$post['image'];?>">
            <?php } ?>
            <br>
            <br>
            <h4 class="card-title"><?php echo $post['title'];?></h4>
            <h6 class="card-text">Categories : <?php echo $post['categories'];?></h6>
            <p class="card-text"><small class="text-muted">Posted by <?php echo $post['name'];?></p>
            <p><?php echo $post['story'];?></p>       
    </div>
       
     


  <br>
  </header><!-- End Header -->
       

    

