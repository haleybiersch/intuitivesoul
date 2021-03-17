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
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="card h-100">
                  <img src="#" class="card-img-top" alt="#">
                  <div class="card-body">
                    <h5 class="card-title">Blog Title</h5>
                    <p class="card-text">illum
                      definitiones no quo, maluisset concludaturque et eum, altera fabulas
                      ut quo. </p>
                      <a href="#" class="btn btn-primary">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="#" class="card-img-top" alt="#">
                  <div class="card-body">
                    <h5 class="card-title">Blog Title</h5>
                    <p class="card-text">illum
                      definitiones no quo, maluisset concludaturque et eum, altera fabulas
                      ut quo. </p>
                      <a href="#" class="btn btn-primary">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="#" class="card-img-top" alt="#">
                  <div class="card-body">
                    <h5 class="card-title">Blog Title</h5>
                    <p class="card-text">illum
                      definitiones no quo, maluisset concludaturque et eum, altera fabulas
                      ut quo. </p>
                      <a href="#" class="btn btn-primary">Read More</a>
                  </div>
                </div>
              </div>
          </section>

          <section class="services pb-5">
            <h2>SERVICES</h2>
            <div class="container">
              <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100">
                    <img src="#" class="card-img-top" alt="#">
                    <div class="card-body">
                      <h5 class="card-title">Service</h5>
                      <p class="card-text">illum
                        definitiones no quo, maluisset concludaturque et eum, altera fabulas
                        ut quo. </p>
                        <a href="#" class="btn btn-primary">Explore</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="#" class="card-img-top" alt="#">
                    <div class="card-body">
                      <h5 class="card-title">Service</h5>
                      <p class="card-text">illum
                        definitiones no quo, maluisset concludaturque et eum, altera fabulas
                        ut quo. </p>
                        <a href="#" class="btn btn-primary">Explore</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="#" class="card-img-top" alt="#">
                    <div class="card-body">
                      <h5 class="card-title">Service</h5>
                      <p class="card-text">illum
                        definitiones no quo, maluisset concludaturque et eum, altera fabulas
                        ut quo. </p>
                        <a href="#" class="btn btn-primary">Explore</a>
                    </div>
                  </div>
                </div>
              </div>
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
