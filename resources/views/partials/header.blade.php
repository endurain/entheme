<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <button class="hamburger hamburger--vortex" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
  </div>
</header>
