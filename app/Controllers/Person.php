<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PersonModel;

class Person extends BaseController
{
    public function new()
    {
         return view('/person/new');
    }

    public function create(){
       $person = new PersonModel();

       $person->insert(
        [

            'edad' => $this->request->getPost('edad'),
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('desc'),
             ]
       );
       return view('/person/new');
       
    }
}
