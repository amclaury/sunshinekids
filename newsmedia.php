
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
        <div class="col s12">
			<h4>YouTube</h4>
          <div class="card center">
            <div class="card-image">
				<iframe width="100%" height="405" src="https://www.youtube.com/embed/?listType=playlist&index=4&list=UUHPSqZP5-9Jcyj4iRl3xN7Q" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
		</div>
		</div>
	</div>	
	
		   <div class ="container">
      <div class="row center">
        <div class="col l6 s12">
			<h4>Facebook</h4>
          <div class="card center">
            <div class="card-image">
              <a href="https://www.facebook.com/TheSunshineKidsFoundation/" target="_blank">
				<img src="img/facebook_mock.jpg">
              </a>
            </div>
          </div>
        </div>

        <div class="col l6 s12">
			<h4>Instagram</h4>
          <div class="card center">
            <div class="card-image">
              <a href="https://www.instagram.com/sunshinekidsorg/" target="_blank">
				<img src="img/instagram_mock.jpg">
              </a>
            </div>
          </div>
        </div>
		</div>
	</div>	
	
	
	<div>




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
