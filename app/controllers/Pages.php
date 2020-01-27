<?php


class Pages extends Controller
{
  /**
   * Page constructor.
   */
  public function __construct()
  {
    $this->pagesModel = $this->model('Page');
  }

  public function test(){
    $usersCount = $this->pagesModel->usersCount();
    echo '<pre>';
    print_r($usersCount);
    echo '</pre>';
  }

  public function edit(){
    $this->view('pages/edit');
  }

  public function index() {
    $data = array('title' => 'Welcome');
    $this->view('pages/index', $data);
  }
}