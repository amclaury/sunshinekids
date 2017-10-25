
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
        <div class="col l4 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/fundraising.jpg">
            </div>
            <div class="card-content">
			  <h5><a href="events.php">Fundraising Events</a></h5>
              <p>Helping kids in need can be lots of fun. Check out our charity dinners, galas, sporting events, and more.</p>
            </div>
          </div>
        </div>

        <div class="col l4 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/facebooksunkids.jpg">
            </div>
            <div class="card-content">
			  <h5><a href="newsmedia.php">News + Media</a></h5>
              <p>Learn all about the latest from the Sunshine Kids through our various social media platforms.</p>
            </div>
          </div>
        </div>
		
        <div class="col l4 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/benefit.jpg">
            </div>
            <div class="card-content">
			  <h5><a href="events.php">Benefit Events</a></h5>
              <p>From theme park trips to hospital parties, our events help bring old-fashioned fun to children in need.</p>
            </div>
          </div>
        </div>
		</div>
	</div>	
	
		   <div class ="container">
      <div class="row center">
        <div class="col s6">
          <div class="card center">
            <div class="card-image">
              <img src="img/hurricanerelief.jpg">
              <span class="card-title"><h5><a href="events.php">Hurricane Relief</a></h5></span>
            </div>
          </div>
        </div>

        <div class="col s6">
          <div class="card center">
            <div class="card-image">
              <img src="img/corporates.jpg">
              <span class="card-title"><h5><a href="corporate.php">Corporate Partners</a></h5></span>
            </div>
          </div>
        </div>
		</div>
	</div>	
	
	
	<div>


	   <div class ="container">
      <div class="row center">
        <div class="col l4 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/annualreport.jpg">
            </div>
            <div class="card-content">
			  <h5><a href="annualreports.php">Annual Reports</a></h5>
              <p>Check out where we've been the past year, who we've helped and who helped us to do it.</p>
            </div>
          </div>
        </div>

        <div class="col l4 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/spokeskids.jpg">
            </div>
            <div class="card-content">
			  <h5><a href="ourteam.php">Spokeskids</a></h5>
              <p>These brave kids are our ambassadors of the year. Experience their heartwarming and uplifting stories.</p>
            </div>
          </div>
        </div>
		
        <div class="col l4 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/hospitalparty.jpg">
            </div>
            <div class="card-content">
			  <h5><a href="events.php">Participating Hospitals</a></h5>
              <p>Our partners in medicine help bring the dream of the Sunshine Kids to as many children as we can.</p>
            </div>
          </div>
        </div>
		</div>
	<div>
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
