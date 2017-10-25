
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
			<h4>Board of Directors</h4>
			<p>The Board of Directors of the Sunshine Kids Foundation is made up of individuals who are community, business and medical leaders from around the country. Each is committed to helping The Sunshine Kids grow its mission of providing quality experiences for children with cancer at no cost to their families, hospitals or other support groups.</p>
          <div class="card center">
            <div class="card-image">
				<img src="img/who_us_mock.jpg">
          </div>
        </div>
		</div>
		</div>
		
      <div class="row center">
        <div class="col s12">
			<h4>Staff</h4>
			<p>The Sunshine Kids Foundation staff, assisted by dedicated volunteers, organizes numerous events and activities annually that affect the lives of hundreds of young cancer patients and their families. They welcome your inquiries and comments as they strive to create more positive and exciting experiences for children fighting cancer.</p>
          <div class="card center">
            <div class="card-image">
				<img src="img/who_us_mock.jpg">
          </div>
        </div>
		</div>
		</div>
		
      <div class="row center">
        <div class="col s12">
			<h4>Spokeskids</h4>
			<p>Our spokespeople consist not only of our most dedicated adult spokesman, Craig Biggio, but also of a number of brave children who volunteer to be our ambassadors each year.</p>
          <div class="card center">
            <div class="card-image">
				<img src="img/who_us_mock.jpg">
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
