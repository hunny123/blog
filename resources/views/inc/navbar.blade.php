<style>

.text-purple {
	color:purple ;
	text-decoration:none !important;
	font-weight: 600;
}
.text-purple a {
	color:purple ;
	text-decoration:none !important;
	font-weight:600;
	font-size: 20px;
}
.big{
 font-size: 50px;
 font-weight:600;
 font-family: Times, Times New Roman, Georgia, serif;
 color:dimgrey;
}
.margin-down{
	margin-top: 13%;

}
li a:hover{
	color:white;
	background-color: rgba(10,10,10,.5);
}
.service-icon{
	width:128px;
}
.text-dimgrey{
color:dimgrey;	
}
  </style>

<nav class="navbar navbar-expand-md fixed-top black text-purple bg-white  ">
      
          <div class="container">
            
                <a class="navbar-brand " href="#">Blog</a>
      
              
                <button class="navbar-toggler navbar-light bg-transparent" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon bg-light"></span>
                  </button>

              <div class="collapse navbar-collapse justify-content-end mr-2 " id="collapsibleNavbar">
                  <ul class="navbar-nav ">
                    <li class="nav-item">
                      <a class="nav-link" href="/blog/index">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/blog/about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/blog/service">Service</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="/blog/posts">Blog</a>
                    </li>
                    
                  
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="/blog/home" class="dropdown-item"> Dashboard</a>
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
          </div>
      </nav>




      