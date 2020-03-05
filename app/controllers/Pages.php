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
        $data = array('title' => 'Welcome');
        $this->view('pages/index', $data);
    }
}