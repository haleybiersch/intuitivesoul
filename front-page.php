<?php @include('header.php'); ?>
<main>

  <!-- Parallax image scroller. The image is specified in the class -->
  <section class="skrollable">
    <div class="skrollable-text">
      <h1>INTUITIVE SOUL</h1>
      <div id="divider"></div>
      <p>Intuitive Counselor &amp; Radio Host</p>
    </div>
  </section>
  <!-- End Parallax -->


  <!-- Main Content -->
  <section class="main py-5" id="main">

    <h1>Read Me</h1>
    <p>See the <a href="ui-kit.php">ui-kit.php</a> page to see the actual styles created for the site. The styles on this page can be found in the css/styles.css</p>
    <p>The css/styles.css & js/scripts.js are specific to this page only, not the UI-kit page</p>

    <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum
      definitiones no quo, maluisset concludaturque et eum, altera fabulas
      ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum.
      Affert laboramus repudiandae nec et. Inciderint efficiantur his ad.
      Eum no molestiae voluptatibus.</p>
      <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum
        definitiones no quo, maluisset concludaturque et eum, altera fabulas
        ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum.
        Affert laboramus repudiandae nec et. Inciderint efficiantur his ad.
        Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum
          definitiones no quo, maluisset concludaturque et eum, altera fabulas
          ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum.
          Affert laboramus repudiandae nec et. Inciderint efficiantur his ad.
          Eum no molestiae voluptatibus.</p>

      <section class="blog pb-5">
        <h2>FEATURED BLOGS</h2>
        <div class="row featured-posts">
            <?php if ($featured_posts->have_posts()) : ?>
                <?php while ($featured_posts->have_posts()) : $featured_posts->the_post(); ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="preview card">
                            <div class="card-body">
                            <?php if(has_post_thumbnail()): ?>
                                <a href="<?php the_permalink(); ?>" class="thumbnail"><?php the_post_thumbnail(); ?></a>
                            <?php endif; ?>
                            <div class="text">
                                <h3 class="card-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3><hr>
                                <p><?php the_excerpt(); ?></p>
                                <div class="text-center"><a href="<?php the_permalink(); ?>" class="more btn btn-primary">Continue Reading</a></div>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php __('No News'); ?></p>
            <?php endif; ?>
        </div>
          </section>

          <section class="services pb-5">
            <h2>SERVICES</h2>
            <div class="container">

              <div class="row services">
                  <?php if ($services->have_posts()) : ?>
                      <?php while ($services->have_posts()) : $services->the_post(); ?>
                          <div class="col-md-6 col-lg-4">
                              <div class="preview card">
                                  <div class="card-body h-100">
                                  <?php if(has_post_thumbnail()): ?>
                                      <a href="<?php the_permalink(); ?>" class="thumbnail"><?php the_post_thumbnail(); ?></a>
                                  <?php endif; ?>
                                  <div class="text">
                                      <h3 class="card-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3><hr>
                                      <p><?php the_excerpt(); ?></p>
                                      <div class="text-center"><a href="<?php the_permalink(); ?>" class="more btn btn-primary">Continue Reading</a></div>
                                  </div>
                              </div>
                              </div>
                          </div>
                      <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?>
                  <?php else : ?>
                      <p><?php __('No News'); ?></p>
                  <?php endif; ?>
              </div>
              <br>

              <a href="#" class="u-btn-submit">View All Services</a>
              <input type="submit" value="submit" class="u-form-control-hidden">

            </section>


            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

            <!-- Example Modal  -->


            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content u-form">
                  <div class="modal-header">
                    <button type="button" class="u-btn-submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Modal</button>
                    <button type="button" class="btn-close u-modal" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h3 class="modal-title text-center" id="exampleModalLabel">FREE OFFER</h3>
                    <p class="text-center">Join my mailing list and get a copy of my book for Free!</p>
                    <form action="#" method="POST" class="u-inner-form u-clearfix" id="newsletter">

                      <div class="u-form-group">
                        <label for="email" class="u-label-1">Email</label>
                        <input type="email" class="u-input-2" placeholder="Email Address" id="email" name="newsletter-email" required>
                      </div>

                      <div class="u-form-group u-form-submit">
                        <a href="#" class="u-btn-submit">Subscribe</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>

                    </form>
                  </div>

                </div>
              </div>
            </div>
            <!-- End Example Modal -->

          </section>

          <?php include('sidebar.php') ?>

        </main>

        <?php @include('footer.php');

