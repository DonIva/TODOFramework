<?php 

class errorController extends Controller {
  function __construct()
  {
  }
  
  function index() {
    $data =
    [
      'title' => 'P&aacute;gina no encontrada',
      'bg'    => 'dark'
    ];
    View::render('404', $data);
  }
}