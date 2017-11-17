
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
			<h4>Audited Financials</h4>
		</div>
	   
	</div>	
	
		   <div class ="container">
      <div class="row center">
        <div class="col s12">
            <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header">2016 Audited Financial Statement</div>
                <div class="collapsible-body"> 
                <iframe src="http://sulley.cah.ucf.edu/~dig4104c_group04/pdf/2016_Audited.pdf" style="width:800px; height:600px;" frameborder="0"></iframe>
                </div>
              </li>
              <li>
                <div class="collapsible-header">2016 990 Final</div>
                <div class="collapsible-body">
                  <iframe src="http://sulley.cah.ucf.edu/~dig4104c_group04/pdf/2016_990.pdf" style="width:800px; height:600px;" frameborder="0"></iframe>
                </div>
              </li>
            </ul>
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
