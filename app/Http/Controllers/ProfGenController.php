<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator;
use Faker;

class ProfGenController extends Controller
{
  public function getProfile(){
    $person = Faker\Factory::create();
#    $person->create();
    echo $person->name('male').'<br>';
    echo $person->address.'<br>';
    echo $person->phoneNumber.'<br>';
    echo $person->Company.'<br>';
    echo $person->text.'<br>';

  }
}
