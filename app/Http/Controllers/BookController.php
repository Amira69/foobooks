<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
  /**
   * Responds to requests to GET /books
   */
   public function getIndex() {
       return 'Show a list of all books';
   }
   /**
    * Responds to requests to GET /books/show/{id}
    */
   public function getShow($title = null, $author = null) {
     if (view()->exists('books.show'))
//       return view('books.sh',['title' => $title, 'author' => $author]);
       return view('books.show')->with('title', $title);
     else return 'view does not exists';
       #return 'Show an individual book: '.$title;
   }
   /**
    * Responds to requests to GET /books/create
    */
   public function getCreate() {
       $view  = '<form method="POST" action="/book/create">';
       $view .= csrf_field();
       $view .= 'Book title: <input type="text" name="title">';
       $view .= '<input type="submit">';
       $view .= '</form>';
       return $view;
   }
   /**
    * Responds to requests to POST /books/create
    */
   public function postCreate() {
       return 'Add the book: '.$_POST['title'];
   }
}
