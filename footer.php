<?php wp_footer();?>
</div>
<footer>
  <div class="container">
      <div class="row">
        <div class="col-sm-3 px-4 py-4 text-center">
          <p class="pfooter">If you enjoyed, were touched, and/or inspired by a show, please show your appreciation by donating a small token.</p>
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick" />
                <input type="hidden" name="hosted_button_id" value="6795494" />
                <input type="submit" alt="PayPal - The safer, easier way to pay online!" name="submit" value="Donate Now" class="u-btn-submit" />
              </form>    
        </div>
        <div class="col-sm-6 px-8 py-8">
          <p class="u-text-1">Intuitive Soul</p>
        	<p class="u-text-2">Join Us.</p>
            <form action="#" method="POST" class="u-inner-form u-clearfix">
              <div class="u-form-group">
                <label for="email" class="u-label-1">Email</label>
                <input type="email" class="u-input" placeholder="Email Address" id="email" name="email" required>
              </div>
              <div class="u-form-group u-form-submit">
                <a href="#" class="u-btn-submit">Subscribe</a>
                <input type="submit" value="submit" class="u-form-control-hidden">
              </div>
            </form>
        </div>
        <small>&copy;<?php echo date("Y"); ?> Intuitive Soul</small>
      </div>
  </div>
</footer>


</body>
</html>
