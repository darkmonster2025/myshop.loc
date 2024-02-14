<?php

namespace MyShop\Controllers;

use MyShop\Controller;
use MyShop\Models\User;

class UserController extends Controller {
    public function index() {
    
        if(!empty($_SESSION['userid'])){
          header('Location: Location: http://myshop.loc/home');
          exit;
        }else {
          header('Location: Location: http://myshop.loc/');
          exit;
        }

        $this->render('user/index', []);
    }

}