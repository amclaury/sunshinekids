
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
			<h4>Annual Reports</h4>
		</div>
	   
      <div class="row center">
  <a class='dropdown-button btn blueaccent-2' href='#' data-belowOrigin="true" data-activates='dropdowna'><h6>2016 Annual Report<i class="material-icons">arrow_drop_down_circle</i></h6></a>
  <a class="waves-effect waves-light btn blueaccent-2"><h6>download<i class="material-icons">arrow_downward</i></h6></a>

  <ul id='dropdowna' class='dropdown-content'>
    <li><a href="#!">2015 Annual Report</a></li>
    <li><a href="#!">2014 Annual Report</a></li>
    <li><a href="#!">2013 Annual Report</a></li>
    <li><a href="#!">2012 Annual Report</a></li>
	<li><a href="#!">2011 Annual Report</a></li>
    <li><a href="#!">2010 Annual Report</a></li>
	<li><a href="#!">2009 Annual Report</a></li>
    <li><a href="#!">2008 Annual Report</a></li>
  </ul>
		</div>
	</div>	
	
		   <div class ="container">
      <div class="row center">
        <div class="col s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/annualpdf.jpg">
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
