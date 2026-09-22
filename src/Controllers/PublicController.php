<?php
namespace App\Controllers;

use App\DB;

class PublicController 
{
    public function index() 
    {
        $db = new DB();
        $articles = $db->all();
        dump($articles);
        // $title = 'World';
        // view('index', compact('title', 'posts'));
    }

    public function us()
    {
        $title = 'U.S';
        $posts = [
            [
                'title' => 'Some U.S title 1', 
                'content' => 'Some U.S content 1', 
                'date' => 'Jan 1, 2026', 
                'author' => 'Pets',
            ],
            [
                'title' => 'Some U.S title 2', 
                'content' => 'Some U.S content 2', 
                'date' => 'Nov 29, 2023', 
                'author' => 'Steve',
            ],
            [
                'title' => 'Some U.S title 3', 
                'content' => 'Some U.S content 3', 
                'date' => 'May 20, 2009', 
                'author' => 'Alex',
            ],
            [
                'title' => 'Some U.S title 4', 
                'content' => 'Some U.S content 4', 
                'date' => 'Sept 13, 2018', 
                'author' => 'Tommi sularaha',
            ],
        ];
        view('us', compact('title', 'posts'));
    }

    public function tech()
    {
        $title = 'Tech';
        $posts = [
            [
              'title' => 'Some Tech title 1', 
              'content' => 'Some Tech content 1', 
              'date' => 'Jan 1, 2026', 
              'author' => 'Pets',
            ],
            [
              'title' => 'Some Tech title 2', 
              'content' => 'Some Tech content 2', 
              'date' => 'Nov 29, 2023', 
              'author' => 'Steve',
            ],
            [
              'title' => 'Some Tech title 3', 
              'content' => 'Some Tech content 3', 
              'date' => 'May 20, 2009', 
              'author' => 'Alex',
            ],
            [
              'title' => 'Some Tech title 4', 
              'content' => 'Some Tech content 4', 
              'date' => 'Sept 13, 2018', 
              'author' => 'Tommi sularaha',
            ],
        ];
        view('tech', compact('title', 'posts'));
    }
    
    public function forms() {
        view('forms');
    }

    public function answer() {
        dump($_GET);
    }
}