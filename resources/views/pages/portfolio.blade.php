@extends('index')
@section('Portfolio')

      <section id="port">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">Our Portfolio</h2>
            </div>
          </div>
          <div id="grid" class="main">
      		<div class="view">
      			<div class="view-back">
      				<span data-icon="BRTA"></span><span data-icon="V-Cal"></span><a href="http://www.brta.gov.bd/cal/" target="_blank">&rarr;</a>
      			</div>
      		<img src="assets/img/vcal.png" alt=""/>
      		</div>
      		<div class="view">
      			<div class="view-back">
      				<span data-icon="Weigth"></span><span data-icon="Cal"></span><a href="http://ruhulrahman2233.5gbfree.com/wcal/" target="_blank">&rarr;</a>
      			</div>
      		<img src="assets/img/wcal.png" alt=""/>
      		</div>
          </div>
        </div>
      </section>
      <script>	
      Modernizr.load({
          test: Modernizr.csstransforms3d && Modernizr.csstransitions,
          yep: ['assets/js/jquery-1.10.1.min.js', 'assets/js/jquery.hoverfold.js'],
          nope: '',
          callback: function(url, result, key) {
              if (url === 'assets/js/jquery.hoverfold.js') {
                  $('#grid').hoverfold();
              }
          }
      });
      </script> 

@endsection