
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
		</div>
    <form class="col l10 s10 offset-s1 offset-l1 container" method="post" action="form.php">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" name="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" name="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="company" name="company" type="text" class="validate">
          <label for="company">Company</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
          <input id="number" name="phone" type="text" class="validate">
          <label for="number">Phone Number</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="address" name="address" type="text" class="validate">
          <label for="address">Address</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
      </div>
	  <div class="row offset-1">
      <p>
        <input type="checkbox" name="update" id="check1" />
        <label for="check1">Update Information</label>
      </p>
      <p>
        <input type="checkbox" name="news" id="check2" />
        <label for="check2">Request Newsletter</label>
      </p>
      <input type="submit" class="btn btn-success btn-send center" value="Submit">
	  </div>
      </form>
	</div>	
	<br/>
	<br/>
	<div class="container">
      <div class="row center valign-wrapper">
        <div class="col l6 s12">
          <div class="card blue accent-2">
            <div class="card-content-cvx white-text">
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
            <div class="card-content-cvx white-text">
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
		</div>
	</div>	
	
		<div class="container">
      	      <div class="row center valign-wrapper">
        <div class="col l6 s12">
          <div class="card blue accent-2">
            <div class="card-content-cvx white-text">
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
		        <div class="col l6 s12">
          <div class="card blue accent-2">
            <div class="card-content-cvx white-text">
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