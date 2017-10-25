
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
				<center><h4>donate</h4></center>
			   <div class ="container">
	<div class="card">		   
		<div class="row center ">
		</div>
			   
      <div class="row center valign-wrapper">
        <div class="col s6">
          <div class="">
            <div class="card-content white-text">
            <div class="row"><h4 class="left black-text">Amount</h4></div>
            <div class="row">
              <a class="waves-effect waves-light btn col s4">$5</a><a class="waves-effect waves-light btn col s4">$10</a><a class="waves-effect waves-light btn col s4">$20</a>
            </div>
            <div class="row">
              <a class="waves-effect waves-light btn col s4">$30</a><a class="waves-effect waves-light btn col s4">$50</a><a class="waves-effect waves-light btn col s4">$100</a>
            </div>
            <div class="row">
              <div class="col s12 black-text">
                Other
                <div class="input-field inline">
                  <input id="other" type="text">
                  <label for="other" data-error="wrong" data-success="right">$</label>
                </div>
              </div>
            </div>
            </div>
          </div>
		    </div>
        <div class="col s6">
          <div class="">
            <div class="card-content white-text">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name" type="text" class="validate">
                  <label for="first_name">Name</label>
                </div>
                <div class="input-field col s6">
                  <input id="address" type="text" class="validate">
                  <label for="address">Address</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <input id="company" type="text" class="validate">
                  <label for="company">Companny</label>
                </div>
                <div class="input-field col s6">
                  <input id="number" type="text" class="validate">
                  <label for="number">Phone Number</label>
                </div>
              </div>
              <p class="left">Billing info</p>
              <div class="row">
                <div class="input-field col s12">
                  <input id="card" type="text" class="validate">
                  <label for="card">Card Number</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <input id="exp" type="text" class="validate">
                  <label for="exp">exp</label>
                </div>
                <div class="input-field col s6">
                  <input id="number" type="text" class="validate">
                  <label for="number">cvc</label>
                </div>
              </div>
              <div class="row">
              <a class="waves-effect waves-light btn col s4 right">Submit</a>
              </div>
            </form>
            </div>
          </div>
		    </div>
  	</div>
    </div>
		<div class="row center">
			<h4>Other Ways to Donate</h4>
		</div>
      <div class="row center">
        <div class="col l3 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/fundraising.jpg">
            </div>
            <div class="card-content">
			  <h5>Fundraising Events</h5>
              <p>Hold a fundraiser. We are happy to discuss any fundraising opportunities with you. Contact us for further information.</p>
            </div>
          </div>
        </div>

        <div class="col l3 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/prea-2013.jpg">
            </div>
            <div class="card-content">
			  <h5>Corporate donations</h5>
              <p>Make a contribution to the Foundation through your workplace giving campaign. We are listed under the Independent Charities of America. Our CFC# is 1541.</p>
            </div>
          </div>
        </div>
      
        <div class="col l3 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/airmiles.jpg">
            </div>
            <div class="card-content">
			  <h5>Airline miles</h5>
              <p>Donate airline mileage to the Foundation. Contact us for further information.</p>
            </div>
          </div>
        </div>
		
        <div class="col l3 s12">
          <div class="card center">
            <div class="card-image">
              <img src="img/beneficiary.jpg">
            </div>
            <div class="card-content">
			        <h5>Beneficiary</h5>
              <p>Designate the Sunshine Kid Foundation as a beneficiary in your will or life insurance policy. Contact us for further information.</p>
            </div>
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
