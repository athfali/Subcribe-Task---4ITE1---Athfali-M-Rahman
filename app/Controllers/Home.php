<?php

namespace App\Controllers;
use App\Models\EmailModel; 

class Home extends BaseController
{
    public function __construct() {
        $this->emailModel = new EmailModel();   
    }

    public function index()
    {
        return view('emails/fail');
    
    }


}
