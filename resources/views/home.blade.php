@include('layout.header')
@include('layout.nav')

@php
   // dd($cat_1->category_name);
$path = 'public/images/blog/';
//dd($service_1);
@endphp
@include('search')
   <!-- END section -->

   <section class="site-section element-animate bg-light"  style="display: none;">
     <div class="container">
       <div class="row align-items-center">
         <div class="col-md-3 order-md-2">
           <div class="block-16">
           <ul class="list-unstyled">
            @foreach($cat_1 as $cat_1_value)
                 <li><a href="#">{{$cat_1_value->category_name}}</a></li>
            @endforeach
           </ul>
           </div>
         </div>
         <div class="col-md-3 order-md-2">
         <div class="block-15">
             <ul class="list-unstyled">
                 @foreach($cat_2 as $cat_2_value)
                 <li><a href="#">{{$cat_2_value->category_name}}</a></li>
                @endforeach
           </ul>
         </div>
         </div>
         <div class="col-md-3 order-md-2">
           <div class="block-15">
               <ul class="list-unstyled">
                 @foreach($cat_3 as $cat_3_value)
                 <li><a href="#">{{$cat_3_value->category_name}}</a></li>
                @endforeach
               </ul>
           </div>
         </div>
         <div class="col-md-3 order-md-2">
           <div class="block-15">
               <ul class="list-unstyled">
                 @foreach($cat_4 as $cat_4_value)
                 <li><a href="#">{{$cat_4_value->category_name}}</a></li>
            @endforeach
               </ul>
           </div>
         </div>
       </div>

     </div>
   </section>
     
     <section class="site-section element-animate" id="latestjob">
     <div class="container">
       <div class="row justify-content-center mb-5 element-animate">
        <div class="col-md-7 text-center section-heading">
           <h2 class="heading">Latest Jobs</h2>
           <p>Job Search Myanmar ၏ up to date အလုပ်များ</p>
         </div>

        <table class="table">
   <thead>
     <tr>
       <th>Job Title</th>
       <th>Company Name</th>
       <th>Location</th>
     </tr>
   </thead>
   <tbody>
   
   
    @foreach ($job as $jobs)

     <tr>
       <td>
        <a href="detail/{{$jobs->id}}">
          {{$jobs->job_title}}
        </a>
        
      </td>
       <td>{{$jobs->company->company_name}}</td>
       <td>{{$jobs->city->city_name}}</td>
     </tr>

    @endforeach 
    
   </tbody>
 </table>
       </div>
       </div>
   </section>
   <!-- END section -->

   <div class="site-section bg-light" id="services">
     <div class="container">
       <div class="row justify-content-center mb-5 element-animate">
         <div class="col-md-7 text-center section-heading">
           <h2 class="heading">Our Services</h2>
           <p>What can we serve for our customers?</p>
         </div>
       </div>
     </div>
     <div class="container">
     <div class="block-25 mb-5">
              <div class="heading"></div>
      <div class="row">
        <div class="col-md-4">
          <ul>

              @foreach($service_1 as $service_1_val)
                <li>
                  <a href="#" class="d-flex">
                    <figure class="image mr-3">
                     
                      <img src="#" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                      
                      <h3 class="heading">{{$service_1_val->our_servs_name}}</h3>
                    </div>
                  </a>
                </li>
              @endforeach    
                
            

              </ul>
        </div> <!--  col-md-4 -->
        <div class="col-md-4">
          <ul>
          
            
               @foreach($service_2 as $service_2_val)
                <li>
                  <a href="#" class="d-flex">
                    <figure class="image mr-3">
                      
                       <img src="#" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                  
                      <h3 class="heading">{{$service_2_val->our_servs_name}}</h3>
                    </div>
                  </a>
                </li>
               @endforeach  
                
              </ul>
        </div> <!--  col-md-4 -->
        <div class="col-md-4">
          <ul>
            
              @foreach($service_3 as $service_3_val)
                <li>
                  <a href="#" class="d-flex">
                    <figure class="image mr-3">
                      
                       <img src="#" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                      
                      <h3 class="heading">{{$service_3_val->our_servs_name}}</h3>
                    </div>
                  </a>
                </li>
              @endforeach   
                
            
               
              </ul>
        </div> <!--  col-md-4 -->
      </div> <!-- row -->
              
            </div>
     

     </div>
   </div>
   <!-- END section -->




   <div class="site-section" id="blog">
     <div class="container">
       <div class="row justify-content-center mb-5 element-animate">
         <div class="col-md-7 text-center section-heading">
           <h2 class="heading">Blog</h2>
           <p>Latest information that research by Search Job Myanmar</p>
         </div>
       </div>
       <div class="row element-animate">

         <div class="col-md-12 mb-5 mb-lg-0 col-lg-6">

           <div>

       <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fjobsearchmyanmar%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=268895997269656" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

           </div>


         </div>
         <div class="col-md-12 col-lg-6">

           <div class="block-21 d-flex mb-4">
             <figure class="mr-3">
               <a href="#"><img src="images/blog/blog1.jpg" alt="" class="img-fluid"></a>
             </figure>
             <div class="text">
               <h3 class="heading"><a href="https://www.facebook.com/jobsearchmyanmar/posts/486314581791949">Income management tip - Job Search Myanmar</a></h3>
               <div class="meta">
                 <div><a href="#"><span class="ion-android-calendar"></span> Aug 13, 2018</a></div>
                 <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                <!--  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div> -->
               </div>
             </div>
           </div>

           <div class="block-21 d-flex mb-4">
             <figure class="mr-3">
               <a href="#"><img src="images/employeesearch.jpg" alt="" class="img-fluid"></a>
             </figure>
             <div class="text">
               <h3 class="heading"><a href="https://www.facebook.com/jobsearchmyanmar/posts/483068985449842">What should we prepare before interview - Job Search Myanmar</a></h3>
               <div class="meta">
                 <div><a href="#"><span class="ion-android-calendar"></span> Aug 9, 2018</a></div>
                 <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                <!--  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div> -->
               </div>
             </div>
           </div>

           <div class="block-21 d-flex mb-4">
             <figure class="mr-3">
               <a href="#"><img src="images/jobpost.jpg" alt="" class="img-fluid"></a>
             </figure>
             <div class="text">
               <h3 class="heading"><a href="https://fitsmallbusiness.com/human-resource-tips-hr/">32 Small Business Human Resource (HR) Tips From the Pros</a></h3>
               <div class="meta">
                 <div><a href="#"><span class="ion-android-calendar"></span> March 17, 2018</a></div>
                 <div><a href="#"><span class="ion-android-person"></span> Anna Dizon</a></div>
              <!--    <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div> -->
               </div>
             </div>
           </div>

           <div class="block-21 d-flex mb-4">
             <figure class="mr-3">
               <a href="#"><img src="images/parttime.jpg" alt="" class="img-fluid"></a>
             </figure>
             <div class="text">
               <h3 class="heading"><a href="https://www.entrepreneur.com/article/312894">Be an Outstanding HR Professional with these 7 Tips </a></h3>
               <div class="meta">
                 <div><a href="#"><span class="ion-android-calendar"></span> May 3, 2018</a></div>
                 <div><a href="#"><span class="ion-android-person"></span> Payal Sondhi</a></div>
                <!--  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div> -->
               </div>
             </div>
           </div>

         </div>
       </div>
     </div>
   </div>

   <div class="py-5 block-22">
     <div class="container">
       <div class="row align-items-center">
         <div class="col-md-6 mb-4 mb-md-0 pr-md-5">
           <h2 class="heading">Job Search Myanmar - Latest Information</h2>
           <p>If you interest Job Search Myanmar new thing, please leave your email here. We will send to you monthly</p>
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