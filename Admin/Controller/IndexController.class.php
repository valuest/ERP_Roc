<?php
  namespace Admin\Controller;
  use Think\Controller;
  class IndexController extends Controller{
      public function index(){
          
              //$admin = new AdminModel();
             //     $admin = new \Model\AdminModel();
             // var_dump($admin);
          $this->display();
          
      }
  }

