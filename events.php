
  <!DOCTYPE html>
  <html>

  <?php include('header.php');

  ?>




    <body>
      <?php include('nav.php'); ?>




  <div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="img/hero1.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="img/hero2.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="img/hero3.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="img/hero4.jpg"></a>
	<a class="carousel-item" href="#four!"><img src="img/hero5.jpg"></a>
  </div>
	
	   <div class ="container">
	   
	    <div class="row center">
			<h1>Events</h1>
		</div>
	   
      <div class="row center">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s4"><a href="#fundraising">Fundraising Events</a></li>
        <li class="tab col s4"><a href="#benefit">Benefit Events</a></li>
        <li class="tab col s4"><a href="#hospital">Participating Hospitals</a></li>
      </ul>
    </div>
    <div id="fundraising" class="col s12"><img class="responsive-img" src="img/map_mockup.jpg"></div>
    <div id="benefit" class="col s12"><img class="responsive-img" src="img/map_mockup.jpg"></div>
    <div id="hospital" class="col s12"><img class="responsive-img" src="img/map_mockup.jpg"></div>
  </div>
		</div>
	</div>	




          <?php include('footer.php'); ?>
    </body>


    <script>
   $(document).ready(function(){
     $('.parallax').parallax();
   });
   $(document).ready(function(){
      $('.carousel').carousel();
	  $('.carousel.carousel-slider').carousel({fullWidth: true});
    });
	$('.carousel').carousel({
    padding: 200    
});
autoplay()   
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 8000);
}
    </script>
  </html>
