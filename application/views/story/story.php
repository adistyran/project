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
          <li><a href="<?php echo base_url('post/post');?>">Post</a></li>
          <li class="active"><a href="<?php echo base_url('story/tambah');?>">Write a Story</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

    <!-- ======= Story Section ======= -->
    <section id="story" class="contact section-bg">
      <div class="container"> 

       <div class="section-title">
          <h2>Write a Story</h2>
          <p>Experience is an event experienced in the life of a person or ourselves. Let us know your travel experience and see it with others.</p>
          <p>Enjoy and happy writing.</p>
        </div>

       <div class="card">
        <div class="card-header">
          Write a story
        </div>

          <div class="row-mt-7">
          <div class="col-md-8">

            <?php echo form_open_multipart('story/tambah');?>
              <div class="form-group"> <br>
                <label for="name">Author's Name*</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name');?>">
                <?php echo form_error('name', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="email">Email*</label>
                <input type="email" class="form-control" id="email" name="email"value="<?php echo set_value('email');?>">
                <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
            </div>
              <div class="form-group">
                <label for="title">Title*</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Give title" value="<?php echo set_value('title');?>">
                <?php echo form_error('title', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="categories">Choose Catergories</label>
                <select class="form-control" id="categories" name="categories" value="<?php echo set_value('title');?>">
                  <option>Culture</option>
                  <option>Culinary</option>
                  <option>Music</option>
                </select>
              </div>
              <div class="form-group">
                <label for="story">Story</label>
                <textarea class="form-control" id="story" name="story" placeholder="Write your story here" value="<?php echo set_value('story');?>"></textarea> 
              </div>
              <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image"value="<?php echo set_value('image');?>">
              </div>
            <button type="submit" class="btn btn-primary" name="tambah">Post</button> 
          <?php echo form_close(); ?>
          </div>
        </div>
        <br>  
        </div>
      </div>
      </div> 
    </section><!-- End Story Section -->
