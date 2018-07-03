<nav class="navbar has-background-black" role="navigation" aria-label="dropdown navigation">
  <a href="{{ route('home') }}" class="navbar-item has-font-weight-bold">
    PizzaDelivery
  </a>
  <div class="navbar-menu">
    <div class="navbar-end">
      @auth
        <a class="navbar-item">
          <span class="icon m-r-5">
            <span class="fa fa-user"></span>
          </span>
          {{ Auth::user()->username }}
        </a>
        <a class="navbar-item" onclick="document.querySelector('.logout-form').submit()">
          <span class="icon m-r-5">
            <i class="fa fa-sign-out"></i>
          </span>
          Logout
        </a>
        <form class="is-hidden logout-form" action="{{ route('logout') }}" method="post">
          @csrf
        </form>
      @else
        <a class="navbar-item" href="{{ route('login') }}">
          Login
        </a>
        <a class="navbar-item" href="{{ route('register') }}">
          Register
        </a>
      @endauth
    </div>
  </div>
</nav>