@include('layout.header')
@include('layout.nav')

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login</div>
                    
                    <div class="card-body">
                        <form method="POST" action="{{ url('login')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @isset($messages)
                                <p>{{$messages->first('email', ':message');}}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                                 @isset($messages)
                                <p>{{$messages->first('password', ':message');}}</p>
                                @endif
                            </div>

                            

                            <button type="submit" class="btn btn-primary">Login</button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

 @include('layout.footer')
 @include('layout.js')