<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator;

class ParGenController extends Controller
{
  public function getGenerate(){
    $generator = new Generator();
    $paragraphs = $generator->getParagraphs(3);
    echo implode('<p>', $paragraphs);
  }
}
