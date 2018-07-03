<div class="column is-2 aside hero is-fullheight">
  <aside class="menu p-t-5 p-l-5 p-b-5 p-r-5">
    <p class="menu-label">
      Main
    </p>
    <ul class="menu-list">
      @if (Auth::user()->hasRole(['superadmin', 'admin']))
        <li>
          <a href="{{ route('dashboard.overview') }}" class="{{ Route::is('dashboard.overview') ? "is-active" : "" }}">
            <span class="icon">
              <i class="fa fa-globe"></i>
            </span>
            Overview
          </a>
        </li>
      @endif
      <li>
        <a href="{{ route('dashboard.orders') }}" class="{{ Route::is('dashboard.orders') ? "is-active" : "" }}">
          <span class="icon">
            <i class="fa fa-list-alt"></i>
          </span>
          Orders
        </a>
      </li>
    </ul>
    @if (Auth::user()->hasRole(['superadmin', 'admin']))
      <p class="menu-label">
        Administration
      </p>
      <ul class="menu-list">
        <li>
          <a class="{{ Route::is('dashboard.add.*') ? "is-active" : "" }}" @click="toggleSubmenu($event)">
            <span class="icon">
              <i class="fa fa-plus"></i>
            </span>
            Add
          </a>
          <ul class="{{ !Route::is('dashboard.add.*') ? "is-hidden" : "" }}">
            <li><a href="{{ route('dashboard.add.pizzas') }}" class="{{ Route::is('dashboard.add.pizzas') ? "is-active" : "" }}">Pizzas</a></li>
            <li><a href="{{ route('dashboard.add.sizes') }}" class="{{ Route::is('dashboard.add.sizes') ? "is-active" : "" }}">Sizes</a></li>
            <li><a href="{{ route('dashboard.add.toppings') }}" class="{{ Route::is('dashboard.add.toppings') ? "is-active" : "" }}">Toppings</a></li>
            <li><a href="{{ route('dashboard.add.discountCodes') }}" class="{{ Route::is('dashboard.add.discountCodes') ? "is-active" : "" }}">Discount Codes</a></li>
          </ul>
        </li>
        <li>
          <a class="{{ Route::is('dashboard.visuals.*') ? "is-active" : "" }}" @click="toggleSubmenu($event)">
            <span class="icon">
              <i class="fa fa-eye"></i>
            </span>
            Visuals
          </a>
          <ul class="{{ !Route::is('dashboard.visuals.*') ? "is-hidden" : "" }}">
            <li><a class="{{ Route::is('dashboard.visuals.carousel') ? "is-active" : "" }}" href="{{ route('dashboard.visuals.carousel') }}">Carousel</a></li>
          </ul>
        </li>
        <li>
          <a class="{{ Route::is('dashboard.uca.*') ? "is-active" : "" }}" @click="toggleSubmenu($event)">
            <span class="icon">
              <i class="fa fa-id-badge"></i>
            </span>
            User Control Area
          </a>
          <ul class="{{ !Route::is('dashboard.uca.*') ? "is-hidden" : "" }}">
            <li><a class="{{ Route::is('dashboard.uca.users') ? "is-active" : "" }}" href="{{ route('dashboard.uca.users') }}">Users</a></li>
            @if (Auth::user()->hasRole('superadmin'))
              <li>
                <a class="{{ Route::is('dashboard.uca.ac.*') ? "is-active" : "" }}" @click="toggleSubmenu($event)">Access Controls</a>
                <ul class="{{ !Route::is('dashboard.uca.ac.*') ? "is-hidden" : "" }}">
                  <li><a class="{{ Route::is('dashboard.uca.ac.roles') ? "is-active" : "" }}" href="{{ route('dashboard.uca.ac.roles') }}">Roles</a></li>
                  <li><a class="{{ Route::is('dashboard.uca.ac.permissions') ? "is-active" : "" }}" href="{{ route('dashboard.uca.ac.permissions') }}">Permissions</a></li>
                </ul>
              </li>
            @endif
          </ul>
        </li>
      </ul>
    @endif
  </aside>
</div>