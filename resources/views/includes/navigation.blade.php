<section id="header">
    <div class="logo">

      <a href="{{url('/')}}"><img src="{{url('/img/logoblack.png')}}"  class="logoimg"/></a>
    </div>

  {{-- <div class="col-md-9">
    <center>

    <div class="search">
      <input class="search-bar" type="text" name="" value="" placeholder="Search:">
    </div>

  </center>
  </div> --}}


  <div class="menu">

    <ul class="desktop-nav">
     <li><a href="/channels">Channels</a></li>
     <li><a href="#">Stacks</a></li>
     <li><a href="/resources">Resources</a></li>
     <li><a href="/podcasts">Podcasts</a></li>
     <li><a href="http://www.crystalcasts.io">crystalcast.io</a></li>
      <li class="burger">
        <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
      </li>
      @if (Auth::guest())
         <li><a href="{{ route('login') }}">Login</a></li>
         <li><a href="{{ route('register') }}">Register</a></li>
     @else
         <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                 {{ Auth::user()->fname }} <span class="caret"></span>
             </a>

             <ul class="dropdown-menu" role="menu">
                 <li>
                     <a href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                         Logout
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                     </form>
                 </li>
             </ul>
         </li>
     @endif
    </ul>


  </div>
</section>
