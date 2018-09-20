<div class="footer">
  <div class="footer-top">
    <div class="wrap">
      <div class="section group">
        <div class="col_1_of_2 span_1_of_2">
					<h3>About Us</h3>
					<p>Fakultas Teknik Universitas Hasanuddin.</p>
					<button class="btn1 btn-8 btn-8b">Selengkapnya</button>
				</div>
				<div class="col_1_of_2 span_1_of_2">
					<h3>Kontak</h3>
					<div class="footer-list">
						<ul>
							<li><img src="<?=base_url()?>assets/images/address.png" alt=""/><p>Jl. Malino, Borongloe, Bontomarannu, Kabupaten Gowa, Sulawesi Selatan<br>&nbsp;92119</p><div class="clear"></div></li>
							<li><img src="<?=base_url()?>assets/images/phone.png" alt=""/><p>Telp: (0411) 586200<br></p><div class="clear"></div></li>
							<li><img src="<?=base_url()?>assets/images/msg.png" alt=""/><p>Email: <span class="yellow"><a href="#"></a></span></p><div class="clear"></div></li>
					   </ul>
					</div>
				</div>
				<div class="clear"></div>
      </div>
    </div>
  </div>
   <div class="footer-bottom">
    <div class="wrap">
      <div class="copy">
        <p class="copy">© 2013 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
      </div>
      <div class="footer-nav">
        <ul>
          <li><a href="index.html">Beranda</a></li>
          <li><a href="profil-fakultas.html">Profil Fakultas</a></li>
          <li><a href="blog.html">Akademik</a></li>
          <li><a href="about.html">Sasaran</a></li>
          <li><a href="contact.html">Fasilitas</a></li>
          <li><a href="contact.html">Penelitian</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      </div>
  </div>
</div>

<!-- Include the imagesLoaded plug-in -->
<script src="<?=base_url()?>assets/js/jquery.imagesloaded.js"></script>
<!-- include colorbox -->
<script src="<?=base_url()?>assets/js/jquery.colorbox-min.js"></script>
<!-- Include the plug-in -->
<script src="<?=base_url()?>assets/js/jquery.wookmark.js"></script>
<!-- Once the page is loaded, initalize the plug-in. -->
<script type="text/javascript">
  (function ($){
    $('#tiles').imagesLoaded(function() {
      // Prepare layout options.
      var options = {
        autoResize: true, // This will auto-update the layout when the browser window is resized.
        container: $('#main1'), // Optional, used for some extra CSS styling
        offset: 2, // Optional, the distance between grid items
        itemWidth:200 // Optional, the width of a grid item
      };

      // Get a reference to your grid items.
      var handler = $('#tiles li');

      // Call the layout function.
      handler.wookmark(options);

      // Init lightbox
      $('a', handler).colorbox({
        rel: 'lightbox'
      });
    });
  })(jQuery);
</script>

</body>
</html>
