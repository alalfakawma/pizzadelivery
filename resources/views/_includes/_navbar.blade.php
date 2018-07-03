<nav class="navbar" role="navigation" aria-label="dropdown navigation">
  <a href="{{ route('home') }}" class="navbar-item has-font-weight-bold">
    PizzaDelivery
  </a>
  <div class="navbar-menu">
    <div class="navbar-end">
      @auth
        <a class="navbar-item" onclick="document.querySelector('.logout-form').submit()">
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
      @endif
    </div>
  </div>
</nav>