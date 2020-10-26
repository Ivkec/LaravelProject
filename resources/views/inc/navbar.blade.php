

<nav class="navbar navbar-expand-md navbar-dark shadow-sm bgClrNav">
                <a class="navbar-brand" href="#">
                   <div class="d-flex">
				   <!-- site logo -->
				   <a href="{{ url('/') }}" class="site-logo">
				   	<img src="../img/logo.png" style="margin-right:10px" alt="gamer srbija">
				   </a>
                 </div> 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item {{ '/' == request()->path() ? 'active' : '' }}">
                      <a class="nav-link" href="{{ url('/') }}">Početna</a>
                      </li>
                      
                      <li class="nav-item {{ 'blog' == request()->path() ? 'active' : '' }}">
                      <a class="nav-link" href="{{url('blog')}}#newsG">Blog</a>
                      </li>
                    
                    
                      <li class="nav-item {{ 'onama' == request()->path() ? 'active' : '' }}">
                      <a class="nav-link" href="{{url('onama')}}">O nama</a>
                      </li>
                   
                      <li class="nav-item">
                      <a class="nav-link" href="{{url('kontakt')}}">Kontakt</a>
                      </li>
                   
                    </ul>
                   
                   
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}#logIn">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}#regg">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <i class="now-ui-icons users_single-02"></i>  
                                   <p class="user">{{ Auth::user()->name }}</p> 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="/user-acc/{{Auth::user()->id}}#userAcc" class="dropdown-item">
                                      User Account
                                </a>
                                
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
         
        </nav>