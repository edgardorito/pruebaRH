let mix = require('laravel-mix');

mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css'
  ], 'public/css/bootstrap.min.css')
  .styles([
    'node_modules/@fortawesome/fontawesome-free/css/all.min.css'
  ], 'public/css/fontawesome.min.css')
  .scripts([
    'node_modules/bootstrap/dist/js/bootstrap.min.js'
  ], 'public/js/bootstrap.min.js')
    .scripts([
    'resources/assets/js/principal/main.js'
  ], 'public/js/main.js')
  .scripts([
    'resources/assets/js/ajax/ajax-token.js'
  ], 'public/js/ajax-token.js')
  .scripts([
    'node_modules/jquery/dist/jquery.min.js'
  ], 'public/js/jquery.min.js')
  .scripts([
    'resources/assets/js/crud/jquery_debtorsMaster-add-edit.js'
  ], 'public/js/jquery_debtorsMaster-add-edit.js')
  .scripts([
    'node_modules/@fortawesome/fontawesome-free/js/all.min.js'
  ], 'public/js/fontawesome.min.js');
  