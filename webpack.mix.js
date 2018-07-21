let mix = require('laravel-mix');

mix.styles([
    'resources/assets/global/plugins/simple-line-icons/simple-line-icons.css'
  ], 'public/css/simple-line-icons.css')
    .scripts([
    'resources/assets/js/principal/main.js'
  ], 'public/js/main.js')
  .scripts([
    'resources/assets/js/ajax/ajax-token.js'
  ], 'public/js/ajax-token.js')
  .scripts([
    'node_modules/jquery/dist/jquery.min.js'
  ], 'public/js/jquery.min.js');
