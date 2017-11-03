
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
        
  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"> 
      <iframe src="http://sulley.cah.ucf.edu/~dig4104c_group04/pdf/Annual_Report_2016.pdf" style="width:800px; height:600px;" frameborder="0"></iframe>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body">
        <iframe src="http://sulley.cah.ucf.edu/~dig4104c_group04/pdf/Annual_Report_2015.pdf" style="width:800px; height:600px;" frameborder="0"></iframe>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body">
        <iframe src="http://sulley.cah.ucf.edu/~dig4104c_group04/pdf/Annual_Report_2014.pdf" style="width:800px; height:600px;" frameborder="0"></iframe>
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
    $('.collapsible').collapsible();
  });
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
      <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
      <script>
       var url = 'http://sulley.cah.ucf.edu/~dig4104c_group04/pdf/Annual_Report_2016.pdf';

    //
    // Disable workers to avoid yet another cross-origin issue (workers need the URL of
    // the script to be loaded, and currently do not allow cross-origin scripts)
    //
    PDFJS.disableWorker = true;

    var pdfDoc = null,
        pageNum = 1,
        pageRendering = false,
        pageNumPending = null,
        scale = 1.5,
        canvas = document.getElementById('the-canvas'),
        ctx = canvas.getContext('2d');

    /**
     * Get page info from document, resize canvas accordingly, and render page.
     * @param num Page number.
     */
    function renderPage(num) {
      pageRendering = true;
      // Using promise to fetch the page
      pdfDoc.getPage(num).then(function(page) {
        var viewport = page.getViewport(scale);
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        // Render PDF page into canvas context
        var renderContext = {
          canvasContext: ctx,
          viewport: viewport
        };
        var renderTask = page.render(renderContext);
        
        // Wait for rendering to finish
        renderTask.promise.then(function () {
          pageRendering = false;
          if (pageNumPending !== null) {
            // New page rendering is pending
            renderPage(pageNumPending);
            pageNumPending = null;
          }
        });
      });

      // Update page counters
      document.getElementById('page_num').textContent = pageNum;
    }
    
    /**
     * If another page rendering in progress, waits until the rendering is
     * finised. Otherwise, executes rendering immediately.
     */
    function queueRenderPage(num) {
      if (pageRendering) {
        pageNumPending = num;
      } else {
        renderPage(num);
      }
    }

    /**
     * Displays previous page.
     */
    function onPrevPage() {
      if (pageNum <= 1) {
        return;
      }
      pageNum--;
      queueRenderPage(pageNum);
    }
    document.getElementById('prev').addEventListener('click', onPrevPage);

    /**
     * Displays next page.
     */
    function onNextPage() {
      if (pageNum >= pdfDoc.numPages) {
        return;
      }
      pageNum++;
      queueRenderPage(pageNum);
    }
    document.getElementById('next').addEventListener('click', onNextPage);

    /**
     * Asynchronously downloads PDF.
     */
    PDFJS.getDocument(url).then(function (pdfDoc_) {
      pdfDoc = pdfDoc_;
      document.getElementById('page_count').textContent = pdfDoc.numPages;

      // Initial/first page rendering
      renderPage(pageNum);
    });
    </script>
  </html>
