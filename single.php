<?php get_header(); ?>


    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): ?>
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
                            <div class="post-heading">
                              <h1><?php the_title();?></h1>
                              <h2 class="subheading"><?php
                              if(function_exists( the_subtitle())){
                                the_subtitle();
                              };?></h2>
                              <span class="meta">Posted by
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php the_author();?></a>
                                em <?php echo get_the_date();?></span>
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

                <?php endwhile; ?>
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