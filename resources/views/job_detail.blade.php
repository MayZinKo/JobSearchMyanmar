@include('layout.header')
@include('layout.nav')

@php
//dd($job->company->website);
@endphp

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
                    <p>{{$job->description}}</p>
                  </div>

                  <div class="col-md-12 pt-5">
                    <h2>Requirement</h2>
                    <p>
                    @php
                   echo  htmlspecialchars_decode($job->job_requirement)
                   @endphp
                   </p>
                  </div>

                  <div class="col-md-12 pt-5">
                    <h2>Privilege</h2>
                    <p>{{$job->privilege }}</p>
                  </div>

                </div>
              </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-2">
            <h2>Apply</h2>
          </div>
        </div>
        <div class="col-md-10">
            <p class="meta">To apply this job</p>
            <h2><a href="#">Upload Your CV here</a></h2>
            <!-- <p>CV form မရှိသေးပါက သို့မဟုတ်  CV form ဖြည့်ရန် အခက်အခဲ ရှိပါက <a href="#">here</a></p> -->
          </div>
        <!--   <div class="col-md-2 text-center">
            <a href="#" class="play"><span class="ion-ios-play"></span></a>
          </div> -->

        <div class="row bg-light align-items-center p-4 episode">

          <form action="{{ url('cv_submit')}}" method="post" enctype="multipart/form-data">
             @csrf
             <input type="hidden" name="job_id" value="{{ $job->id }}">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="your name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="phone number" name="phone" required>
          </div>
          <div class="mb-3 w-100">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile" name="cv_file" required>
          </div>
         
             <input type="submit" class="search-submit btn btn-primary" value="Submit">
          </form>

          
        </div>

        

        
      </div>
    </section>
          </div>
          <!-- END content -->
          <div class="col-md-6 col-lg-4 order-md-1">
            
            <div class="block-29 mb-5">
              <h3 class="heading">{{$job->category_name}}</h3>
              <ul>
                <li><span class="text-1">Location - </span> <span class="text-2">{{$job->city->city_name}}, {{$job->country_name}}</span></li>
                <li><span class="text-1">Job Type - </span> <span class="text-2">{{$job->job_type->job_type_name}}</span></li>
                <br>
                <span class="text-1"> <h6>Address  </h6> </span> 
                <span class="text-2">{{$job->address}}</span>
               
              </ul>
            </div>

            <div class="block-28 text-center mb-5">
              <figure>
                <img src="" alt="" class="img-fluid">
              </figure>
              <h2 class="heading">{{$job->company->company_name}}</h2>
              <h3 class="subheading">{{$job->company->type}}</h3>
              <p>
            @php
  
$website_http=substr($job->company->website,4);

if ($website_http !== 'http') 
{$website='http://'.$job->company->website;}
else{$website = $job->company->website;  }


$linkedin_http=substr($job->company->linkedin,4);
if ($linkedin_http !== 'http') {$linkedin='http://'.$job->company->linkedin;}
else{$linkedin = $job->company->linkedin;  }
      @endphp
            <a href="{{$website}}" class="fa fa-globe p-2" target="blank"></a>
            <a href="{{$job->company->facebook}}" class="fa fa-facebook p-2" target="blank"></a>
            <a href="{{$linkedin}}" class="fa fa-linkedin p-2" target="blank"></a>
              </p>
              <p>{{$job->company_description }}</p>
              
            </div>

            <div class="block-25 mb-5">
              <div class="heading">Similar Companies</div>
              <ul>
                @foreach ($jobs as $job)  
                <li>
                  <a href="#" class="d-flex">
                    <figure class="image mr-3">
                      <img src="{{URL::asset('public/images/'.$job->company->image)}}" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                      <h3 class="heading">{{$job->company->company_name}}</h3>
                      <span class="meta">{{$job->city->city_name}}</span>
                    </div>
                  </a>
                </li>
                @endforeach   
                
              </ul>
            </div>


            <div class="block-24 mb-5">
              <h3 class="heading">Categories</h3>
              <ul>
                
                @foreach ($distinct_category as $categories)  
                <li><a href="#">{{$categories->category->category_name}} <span>{{$categories->count}}</span></a></li>
                @endforeach   
                
              </ul>
            </div>

            
            <div class="block-26">
              <h3 class="heading">Tags</h3>
              <ul>
                @foreach ($job_type as $jobtype) 
                <li><a href="#">{{$jobtype->job_type_name}}</a></li>
                @endforeach 
              
              </ul>
            </div>


          </div>
          <!-- END Sidebar -->
        </div>
      </div>
    </div>

    
    
    
    <div class="py-5 block-22">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-4 mb-md-0 pr-md-5">
            <h2 class="heading">Create cool websites</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi accusantium optio und.</p>
          </div>
          <div class="col-md-6">
            <form action="#" class="subscribe">
              <div class="form-group">
                <input type="email" class="form-control email" placeholder="Enter email">
                <input type="submit" class="btn btn-primary submit" value="Subscribe">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

   @include('layout.footer')
   @include('layout.js')