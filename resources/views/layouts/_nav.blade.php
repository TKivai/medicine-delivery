<!-- navigation bar -->
<nav class="navbar" style="background-color: #2b215e; border-radius: 0px; height:170px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="img/rsz_logo.jpg" style="width: 300px; height: 120px;"></a>
        <div style="float: left; margin: 0 0 0 900px;">
          <ul class="nav navbar-nav">
            <li class="muted" style=" font-size: 20px; color: white; margin-top: 5px;">
              Location
            </li>
            <li class="navitem">
              <i class="fas fa-search" style=" font-size: 40px; color: white;"></i>
            </li>

            @if (Route::has('login'))
              <li>
                @auth
                      <a href="{{ url('/home') }}">Home</a>
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                  @else
                      <a href="{{ route('login') }}">Login</a>
                      <a href="{{ route('register') }}">Register</a>
                  @endauth
              </li>    
            @endif
          </ul>
        </div>
      </div>
    </div>
  </nav>