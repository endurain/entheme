<?php

namespace App

?>
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
      <div class="desktopMenu" id="navbarSupportedContent">
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($primarymenu) !!}
        @endif
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @if (has_nav_menu('mobile_navigation'))
        {!! wp_nav_menu($mobilemenu) !!}
        @endif
      </div>
    </nav>
  </div>
</header>
