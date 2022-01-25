<header class="container py-3 mb-5">

  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'travels') ? 'active' : '' }}" href="{{route('travels')}}">TRIPS & TRAVEL</a>
    </li>
  </ul>

</header>