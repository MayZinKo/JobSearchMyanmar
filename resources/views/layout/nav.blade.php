    <header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.php"> 
                <figure>
                  <img src="{{URL::asset('public/images/Job.png')}}" width="70px" alt="Image">
                  
                </figure>
            <!-- University -->
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="{{url('/')}}">Home</a>
              </li>
             

              <li class="nav-item">
                <a class="nav-link" href="#latestjob">Latest Jobs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Our Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="login.php">Login</a> / <a href="register.php">Register</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->