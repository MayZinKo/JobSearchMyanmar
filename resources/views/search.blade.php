<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url('public/images/big_image_2.jpg');">
     <div class="container">
       <div class="row align-items-center justify-content-center site-hero-inner">
         <div class="col-md-10">

           <div class="mb-5 element-animate">
             <div class="block-17">
               <h1 class="heading text-center mb-4">Job Search Myanmar</h1>
             
               
               <form action="{{ url('search')}}" method="post" enctype="multipart/form-data" class="d-block d-lg-flex mb-4">
                
               
                @csrf
                 <div class="fields d-block d-lg-flex">
                   <div class="textfield-search one-third">
                    <input type="text" class="form-control" placeholder="Keyword search..." name="job_title" value="{{ isset($input['job_title'])? $input['job_title'] : '' }}"></div>
                    
                   <div class="select-wrap one-third">
                     <div class="icon"><span class="ion-ios-arrow-down"></span></div>

                     <select id="" class="form-control" name="category">
                       <option value="">Profession</option>

                       @foreach($categories as $category)
                       <option value="{{$category->id}}" 
                        {{ isset($input['category']) && $input['category'] == $category->id ? 'selected' : ''}} >{{$category->category_name}}</option>
                       @endforeach
                       
                     </select>
                      

                   </div>

                   <div class="select-wrap one-third">
                     <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                     
                     <select id="" class="form-control" name="city">
                       <option value="" {{isset($input['city'])? 'selected' : ''}}>City</option>
                       @foreach($cities as $city)
                       <option value="{{$city->id}}" {{ isset($input['city']) && $input['city'] == $city->id ? 'selected' : ''}}>{{$city->city_name}}</option>
                       @endforeach

                     </select>

                   </div>
                 </div>
                 <input type="submit" class="search-submit btn btn-primary" value="Search">
               </form>


               <p class="text-center mb-5">We have more than 500 jobs listing for your future.</p>
               <p class="text-center"><a href="#" class="btn py-3 px-5">Register Now</a></p>
             </div>
           </div>

         </div>
       </div>
     </div>
   </section>
