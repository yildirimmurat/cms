<?php

namespace Controllers;

use CMS\Core\Controller;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'murat'
        ];
        return $this->render('home', $params);
    }
    public function contact()
    {
        return $this->render('contact');
    }
    public function handleContact()
    {
        return "Handling submitted data...";
    }
}