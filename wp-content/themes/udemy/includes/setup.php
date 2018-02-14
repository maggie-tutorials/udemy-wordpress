<?php

function ju_setup_theme() {
  add_theme_support('post-thumbnails'); // allows to use feature image
  register_nav_menu('primary', __('Primary Menu', 'udemy'));
}
