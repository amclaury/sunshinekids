
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
	
	  <div class ="row">
    <center><h1>Contact Us</h1></center>
    <form class="col l10 s10 offset-s1 offset-l1">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="company" type="text" class="validate">
          <label for="company">Company</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
          <input id="number" type="text" class="validate">
          <label for="number">Phone Number</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="address" type="text" class="validate">
          <label for="address">Address</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
      </div>
      <p>
        <input type="checkbox" id="check1" />
        <label for="check1">Update Information</label>
      </p>
      <p>
        <input type="checkbox" id="check2" />
        <label for="check2">Request Newsletter</label>
      </p>
      <a class="waves-effect waves-light btn right">Submit</a>
    </form>
	</div>	
	
	<div class="container">
      <div class="row center valign-wrapper">
        <div class="col l6 s12">
          <div class="card blue accent-2">
            <div class="card-content white-text">
				<h4>United States National Office</h4>
				 <p>The Sunshine Kids Foundation<br/>
             		2814 Virginia St.<br/>
					Houston, Texas 77098<br/>
					(713) 524-1264 - Office<br/>
					(800) 594-5756 - Toll Free<br/>
					(713) 524-7165 - Fax<br/>
					Email: info@sunshinekids.org </p>
            </div>
        </div>
		</div>
        <div class="col l6 s12">
          <div class="card blue accent-2">
            <div class="card-content white-text">
				<h4>Canadian National Office</h4>
              		<p>The Sunshine Kids Foundation<br/>
             		36 Brookshire Ct.<br/>
					Suite 200<br/>
					Bedford, NS B4A 4E9<br/>
					(877) 576-3452 - Office<br/>
					Email: canada@sunshinekids.org </p>
            </div>
        </div>
		</div>
		</div>
	</div>	
	
		<div class="container">
      	      <div class="row center valign-wrapper"">
        <div class="col l4 s12">
          <div class="card blue accent-2">
            <div class="card-content white-text">
				<h4>US Western Office</h4>
              <p>The Sunshine Kids Foundation<br/>
					662 N. Van Ness Ave. #203<br/>
					Los Angeles, CA. 90004<br/>
					(323) 769-2520 - Office<br/>
					(323) 769-2521 - Fax<br/>
					Email: west@sunshinekids.org 
			</p>
            </div>
        </div>
		</div>
        <div class="col l4 s12">
          <div class="card blue accent-2">
            <div class="card-content white-text">
				<h4>US Southeast Office</h4>
              <p>The Sunshine Kids Foundation<br/>
					5137 Castello Dr <br/>
					Suite #1<br/>
					Naples, FL 34103<br/>
					(239) 919-8867 - Office<br/>
					(239) 919-8868 - Fax<br/>
					Email: southeast@sunshinekids.org</p>
            </div>
        </div>
		</div>
		        <div class="col l4 s12">
          <div class="card blue accent-2">
            <div class="card-content white-text">
				<h4>US Eastern Office</h4>
				<p>The Sunshine Kids Foundation<br/>
					2 Hartford Square West<br/>
					146 Wyllys St.<br/>
					Suite # 2-210<br/>
					Hartford, CT 06106<br/>
					(860) 904-5493 - Office<br/>
					(860) 904-5268 - Fax<br/>
					Email: east@sunshinekids.org 
			</p>
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
