<?php


class Pages extends Controller
{

  /**
   * Pages constructor.
   */
  public function __construct()
  {
  }

  public function index(){
    $data = array('title' => 'Pages');
    $this->view('pages/index', $data);
  }
}