@include('layout.header')
@include('layout.nav')
@include('search')

<style type="text/css">
.custom-pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px; /* Adjust the margin-top as needed */
}

.custom-pagination nav.pagination {
    display: flex;
    justify-content: center;
    list-style-type: none;
}

.custom-pagination nav.pagination li {
    margin: 0 5px;
}

.custom-pagination nav.pagination li a {
    text-decoration: none;
    padding: 8px 16px;
    border: 1px solid #ddd;
    color: #333;
}

.custom-pagination nav.pagination li.active a {
    background-color: #007bff;
    color: #fff;
    border: 1px solid #007bff;
}
</style>

<div class="site-section" id="blog">
     <div class="container">
       <div class="row justify-content-center mb-5 element-animate">
         <div class="col-md-7 text-center section-heading">
           <h2 class="heading">Jobs</h2>
           
           @isset($messages)
                    {{$messages->first('job_title', ':message');}}<br>
                     {{$messages->first('category', ':message');}}<br>
                     {{$messages->first('city', ':message');}}
            @else
              <p>Latest information that found in Job Search Myanmar</p>
            @endif
         </div>
       </div>
       <div class="row element-animate">

      
         <div class="col-md-12 col-lg-12">

          @foreach($jobs as $job)
           <div class="block-21 d-flex mb-4">
             <figure class="mr-3">
               <a href="#"><img src="{{URL::asset('public/images/'.$job->company->image)}}" alt="" class="img-fluid"></a>
             </figure>
             <div class="text">
               <h3 class="heading"><a href="detail/{{$job->id}}">{{$job->job_title}}</a></h3>
               <p>{{$job->job_requirement}}</p>
               <div class="meta">
                 <div><a href="#"><span class="ion-android-calendar"></span> {{$job->city->city_name}}</a></div>
                 <div><a href="#"><span class="ion-android-person"></span> {{$job->job_type->job_type_name}}</a></div>
                <!--  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div> -->
               </div>
             </div>
           </div>
           @endforeach 

                 <div class="d-flex justify-content-center mt-4 custom-pagination">
                  <!-- <div class="row bg-light align-items-center p-4 episode"> -->
                  
              {{ $jobs->links() }}
                </div>
         </div>

       
          
       </div>
       
     </div>

   </div>

 @include('layout.footer')
   @include('layout.js')