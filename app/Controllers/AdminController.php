<?php
namespace App\Controllers;

class AdminController extends BaseController{
  public function adminAction(){
    return $this->renderHTML('admin.twig');
  }
}