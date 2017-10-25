
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
			<h4>History</h4>
		</div>
			   
      <div class="row center valign-wrapper"">
        <div class="col s6">
          <div class="card center">
            <div class="card-image">
              <img src="img/history_rhoda.jpg">
              <span class="card-title"><h5></h5></span>
            </div>
          </div>
		  		    </div>

        <div class="col s6">
          <div class="card blue accent-2">
            <div class="card-content white-text">
              <p>The Sunshine Kids Foundation was founded by Rhoda Tomasco in 1982 while she was serving as a volunteer in the pediatric cancer unit of a hospital in Houston, Texas. After seeing the loneliness and depression among children during their extended hospital treatments, Rhoda had a vision to provide these young cancer patients with opportunities to participate in positive group activities which promoted self-esteem , personal accomplishment and just plain old-fashioned fun!</p> 
			  <p>Today, that vision has been realized many times over, as thousands of children from hospitals across the country have enjoyed the benefits of The Sunshine Kids Foundation's many programs and national and regional events. Funded by personal contributions, corporations and foundations, the Sunshine Kids continues, as it has since its inception, to provide all of its activities completely free of charge to the children's families and hospitals.</p>
            </div>
        </div>
		</div>
	</div>
	
		<div class="row center">
			<h4>Mission</h4>
		</div>

      <div class="row center">
        <div class="col l4 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/region_goals.jpg">
            </div>
            <div class="card-content">
			  <h5>Regional</h5>
              <p>Working within hospitals all over the country, the foundation is able to enrich the daily lives of young cancer patients and show them they are not alone. We make friendly meet-and-greets possible on a local scale nearly every day.</p>
            </div>
          </div>
        </div>

        <div class="col l4 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/nation_goals.jpg">
            </div>
            <div class="card-content">
			  <h5>National</h5>
              <p>Some events are larger than others, drawing in people from all over the country. These national events include theme parks, sporting events, and concerts, all tailored to be fun and enjoyable for the children, and most of all, free of charge for the families.</p>
            </div>
          </div>
        </div>
		
        <div class="col l4 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/world_goals.jpg">
            </div>
            <div class="card-content">
			  <h5>Worldwide</h5>
              <p>Since the founding of The Sunshine Kids in March 1982, this non-profit foundation has provided a wide variety of events, for young cancer patients from across the United States, the Bahamas, Bahrain, Canada, the Dominican Republic, Great Britain, Guam, Mexico, and Spain.</p>
            </div>
          </div>
        </div>
		</div>
	</div>		
	
	
	<div>


	   <div class ="container">
		<div class="row center">
			<h4>Goals</h4>
		</div>
	
	      <div class="row center valign-wrapper"">
        <div class="col s6">
          <div class="card blue accent-2">
            <div class="card-content white-text">
              <p>The Sunshine Kids Foundation adds quality of life to children with cancer by providing them with exciting, positive group activities, so they may once again do what kids are supposed to do . . . have fun and celebrate life! The entire Sunshine Kids family is dedicated to providing the most exciting activities, trips and events for as many young cancer patients as possible.</p>
            </div>
        </div>
		</div>
        <div class="col s6">
          <div class="card center">
            <div class="card-image">
              <img src="img/big_goals.jpg">
              <span class="card-title"><h5></h5></span>
            </div>
          </div>
		  		    </div>
		</div>
		</div>
		
	<div class ="container">
	<div class="row center">
			<h4>Sunshine Pin</h4>
		</div>
			   
      <div class="row center valign-wrapper"">
        <div class="col s4">
          <div class="card center">
            <div class="card-image">
              <img src="img/logo3.png">
              <span class="card-title"><h5></h5></span>
            </div>
          </div>
		  		    </div>

        <div class="col s8">
          <div class="card blue accent-2">
            <div class="card-content white-text">
              <p>The original yellow Sunshine Kids Pin was designed in 1982 so that the children would have a way of expressing their love to their friends. The sun was chosen as their symbol because of its positive life giving force, its bright hope for the future, and the warmth that good friends bestow upon each other. </p>
			  <p>Each pin was hand pressed, painted, and baked by the children themselves. Throughout the years, as the demand for these special pins grew, the parents were enlisted to help keep up this tradition. Today the pins continue to be a symbol of love, life, and hope to each Sunshine Kid.</p>
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
