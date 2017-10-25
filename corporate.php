
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
  
  		<div class="row center">
			<h1>Corporate Partners</h1>
		</div>
	
	   <div class ="container">
      <div class="row center">
        <div class="col l4 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/berkshirehathaway.jpg">
            </div>
            <div class="card-content">
			  <h5><a href="http://www.berkshirehathawayhs.com">Berkshire Hathaway</a></h5>
              <p>Berkshire Hathaway Real Estate adopted The Sunshine Kids Foundation as a network-wide charity in the spring of 1991. Since the inception of this partnership, many Prudential real estate managers, brokers and agents have generously assisted the SSK by planning exciting fundraising events, participating in the listings program, and taking an active role in activities and national events designed for the Kids.</p>
            </div>
          </div>
        </div>

        <div class="col l4 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/chevron.png">
            </div>
            <div class="card-content">
			  <h5><a href="https://www.chevron.com">Chevron</a></h5>
              <p>For the eighth year in a row, the Sunshine Kids Foundation has been selected as an official charity of the Chevron Houston Marathon's Run for a Reason Campaign. The past seven years have been a huge success as friends and supporters raised over $200,000 for young cancer patients from across the country.</p>
            </div>
          </div>
        </div>
		
        <div class="col l4 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/ambitenergy.png">
            </div>
            <div class="card-content">
			  <h5><a href="http://ww2.ambitenergy.com">Ambit Energy</a></h5>
              <p>As the largest power provider in Texas and the Northeastern United States, the Sunshine Kids Foundation partners with Ambit Energy for their EZN program. Much like the Sunshine Kids, Ambit also uses the sun as a symbol, working towards a future using the sun's energy as a power source.</p>
            </div>
          </div>
        </div>
		</div>
	</div>	
	
	   <div class ="container">
      <div class="row center">	
        <div class="col l4 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/kroger.png">
            </div>
            <div class="card-content">
			  <h5><a href="https://www.kroger.com">Kroger</a></h5>
              <p>For people who already shop at supermarket chain Kroger, donating to the Sunshine Kids is easier than ever; just swipe your Plus Card and you're already giving back to the community. Kroger's Community Rewards program helps provide both money and food aid to the children in need.</p>
            </div>
          </div>
        </div>

        <div class="col l4 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/celebritycruises.png">
            </div>
            <div class="card-content">
			  <h5><a href="https://www.celebritycruises.com/">Celebrity Cruises</a></h5>
              <p>The annual Sunshine Kids Cruise is a treat open to both donors and children alike, thanks to the generous services of Celebrity Cruises. The ports of call of these Caribbean cruises differ from year to year, but the commitment to the children remains the same.</p>
            </div>
          </div>
        </div>
		
        <div class="col l4 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/kendrascott.jpg">
            </div>
            <div class="card-content">
			  <h5><a href="https://www.kendrascott.com/">Kendra Scott</a></h5>
              <p>Fashion designer Kendra Scott has a long history serving people with cancer, as she made her start in the industry selling chemotherapy hats that are, in her words, "comfortable but stylish." Members of the Sunshine Kids family in the Los Angeles area can experience the recurring, fashion-forward Kendra Gives Back galas.</p>
            </div>
          </div>
        </div>
		</div>
	<div>
	
	    <div class="row center">
			<h4>Want to become a partner?</h4>
		</div>
	
	
		<div class="container">
		      <div class="row center valign-wrapper"">
        <div class="col s12">
          <div class="card white">
            <div class="card-content">
              <p>The Sunshine Kids Foundation is indebted to the many corporate partners that make our dream, of faithfully serving children who have cancer, a reality. If your business is interested in sponsoring an event or providing goods or services to the children in need, we <a href="contactus.php">want to hear from you!</a> </p>
            </div>
        </div>
		</div>
		</div>
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
