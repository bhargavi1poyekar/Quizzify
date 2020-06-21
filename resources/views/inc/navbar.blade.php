<head>
		<meta charset="utf-8">
		<title>BLOGON</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
		
		
		<link rel="stylesheet" href="/quiz/public/css/swiper.min.css">
		<link rel="stylesheet" href="/quiz/public/css/homestyle.css">
	</head>

<header class="navbar-fixed"> 
            <div class="container-fluid bg-dark header-top d-none d-md-block">
          
            <div class="row text-light pt-2 pb-2">
              <div class="col-md-3 user" >
                <i class="far fa-envelope"></i></i>
                @if(Auth::guest())
                Guest
                @else
                {{Auth::user()->email}}
                @endif
              </div>
              
              
              @if(Auth::guest())

                <div class="col-md-6" id="log-sign">
                  <a href="{{ route('login') }}"><button class="log-in">LOG IN</button></a>
                
                  <a href="{{ route('register') }}"><button class="sign-up">SIGN-UP</button></a>
                </div>
                <div class="col-md-1" id="log-sign">
                  <a href="/quiz/public/"><button class="log-in"><i class="fas fa-home"></i> </button></a> 
                </div>
              @else
                
              <div class="col-md-5" class="log-sign">
                  
                  
                
            </div>
                <div class="col-md-3" id="log-sign">
                  <a href="/quiz/public/questions"><button class="log-in"><i class="fas fa-home"></i> </button></a> 
                  <a class="nav-item" href="{{ route('logout') }}"

                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                 <button class="sign-up">
                    {{ __('Logout') }}
                                 </button>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </div>
                
              
              @endif
              
            </div>
          </div>
          </header>

@if(count($errors)>0)
  @foreach($errors->all() as $error)
    <div class ='alert alert-danger'>
      {{$error}}
    </div>
  @endforeach

@endif


@if( session('success') )
  <div class='alert alert-success'>
    {{session('success')}}
  </div>
  
@endif


@if(session('error'))
  <div class='alert alert-danger'>
    {{session('error')}}
  </div>
  
@endif