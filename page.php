<?php get_header(); ?>


    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if(have_posts()): ?>
                    <?php the_post()?>

                     <!-- Page Header -->
                    <header class="masthead" style="background-image: url('<?php 
                    if(has_post_thumbnail()){
                      echo get_the_post_thumbnail_url($post->ID, "full");
                    }
                    ?>')">
                      <div class="overlay"></div>
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-8 col-md-10 mx-auto">
                            <div class="page-heading">
                              <h1><?php the_title();?></h1>
                              <h2 class="subheading"><?php
                              if(function_exists( the_subtitle())){
                                the_subtitle();
                              };?></h2>
                             
                            </div>
                          </div>
                        </div>
                      </div>
                    </header>


                    <article>
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-8 col-md-10 mx-auto">
                          <?php the_content()?>
                          </div>
                        </div>
                      </div>
                    </article>

                    <hr>

                    <?php get_template_part('template-parts/post')?>

               
            <?php endif; ?>
        
        



          <!-- Pager -->
          <div class="clearfix">
          <?php previous_post_link('Página Anterior');?>
          <?php next_posts_link('Próxima Página');?>
         <!--   <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a> -->
          </div>
        </div>
      </div>
    </div>

    <hr>

<?php get_footer(); ?>