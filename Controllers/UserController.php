<?php

namespace MyShop\Controllers;

use MyShop\Controller;
use MyShop\Models\User;

class UserController extends Controller {
    public function index() {
        $users = [
           
        ];

        $this->render('user/index', ['users' => $users]);
    }

}