@include('layout.header')
@include('layout.nav')


<div class="site-section bg-light element-animate">
	<div class="container">
		<div class="row">
          
          <div class="col-md-6 col-lg-8 order-md-2 mb-5">
            <div class="row">
              <div class="col-md-12">
                <img src="" alt="" class="img-fluid"> 
              </div>  
            </div>
            
            <section class="episodes">
              <div class="container">
                <div class="row mb-5">
                  <div class="col-md-12 pt-2">
                    <h1>{{$job->job_title}}</h1>
                    <h2>Description</h2>
                    <p>{{$job->job_description}}</p>
                  </div>

                  <div class="col-md-12 pt-5">
                    <h2>Requirement</h2>
                    <p>{{$job->job_requirement}}</p>
                  </div>

                  <div class="col-md-12 pt-5">
                    <h2>Privilege</h2>
                    <p>{{$job->privilege }}</p>
                  </div>

                </div>
              </div>
          </section>
         </div>
         </div>
	</div> 	<!-- container -->
</div>   <!-- site-section -->
@include('layout.footer')
@include('layout.js')