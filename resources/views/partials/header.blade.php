<header class="banner">
 <div class="container">
   <nav class="navbar navbar-toggleable-lg navbar-light bg-primary">
    <button
      class="navbar-toggler hamburger hamburger--vortex"
      type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation">
       <span class="hamburger-box">
         <span class="hamburger-inner"></span>
       </span>
    </button>
  <!-- <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> -->
  <div class="collapse navbar-collapse mobileNavigation" id="navbarSupportedContent">
     @if (has_nav_menu('mobile_navigation'))
     {!! wp_nav_menu(['theme_location' => 'mobile_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav nav pull-right']) !!}
     @endif
   </div>
   <div class="test">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav nav']) !!}
      @endif
    </div>
  </nav>
 </div>
</header>
