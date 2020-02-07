<!-- <header class="banner">
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
</header> -->

<header class="banner">
 <div class="container">
 <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
 data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
 aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
<a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
 @if (has_nav_menu('primary_navigation'))
 {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav nav pull-right']) !!}
 @endif
 </div>
 <!-- <form class="form-inline collapse navbar-collapse pull-right">
 <button class="btn btn-outline-success" type="button">Main button</button>
 </form> -->
 </nav>
 </div>
</header>
