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


<!-- ======= Story Section ======= -->
<section id="edit" class="contact section-bg">
      <div class="container"> 

       <div class="section-title">
          <h2>Write a Story</h2>
          <p>Experience is an event experienced in the life of a person or ourselves. Let us know your travel experience and see it with others.</p>
          <p>Enjoy and happy writing.</p>
        </div>
          
        <div class="card">
        <div class="card-header">
          Edit a Story
        </div>

          <div class="row-mt-7">
          <div class="col-md-8">

            <form action="" method="post">
            <input type="hidden" name="id" value="<?= $post['id_post']; ?>">
              <div class="form-group"> <br>
                <label for="name">Author's Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $post['name'];?>">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email"value="<?= $post['email'];?>">
            </div>
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Give title" value="<?= $post['title'];?>">
              </div>
              <div class="form-group">
                <label for="categories">Choose Catergories</label>
                <select class="form-control" id="categories" name="categories"> <?php foreach ($categories as $c) : ?>
                  <?php if($c == $post['categories']) : ?>
                  <option value="<?= $c; ?>" selected><?= $c; ?></option>
                  <?php else : ?>
                    <option value="<?= $c; ?>"><?= $c; ?></option>
                <?php endif; ?>
                <?php endforeach; ?>
                </select>
              </div>
               <div class="form-group">
                <label for="story">Story</label>
                <input type="textarea" class="form-control" id="story" name="story" placeholder="Your Story" value="<?= $post['story'];?>">
              </div>
             <!--  <div class="form-group row">
                <div class="col-sm-2"> Image </div>
                <div class="col-sm-10">
                  <div class="row">
                    <div class="col-md-3">
                    <img src="<?= base_url();?>assets/home/img/image/<?= $post['image']; ?>" class="img-thumbnail">
                  </div>
                  <div class="col-sm-9">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image" id="image">
                      <label class="custom-file-label" for="image"> Choose File </label>
                    </div>
                  </div>
                  </div>
                </div>
                
              </div> -->
                
            <button type="submit" class="btn btn-primary" name="ubah">Edit</button> 
          </form>
          </div>
        </div>
        <br>  
        </div>

      </div>

</section>

