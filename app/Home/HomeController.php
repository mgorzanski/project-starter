<?php

namespace App\Home;
use App\Controller;

class HomeController extends Controller {
    public function home() {
        $this->loadView('views/home');
    }
}

?>