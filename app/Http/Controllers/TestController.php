<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Services\FirebaseService;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class TestController extends Controller
{
    public function create() {

        $firebase = (new Factory)
            ->withServiceAccount(base_path(env('FIREBASE_CREDENTIALS')))
            ->withDatabaseUri(env("FIREBASE_DATABASE_URL"));
//            ->create();

        $database = $firebase->createDatabase();

        $newPost = $database
            ->getReference('test/blogs')
            ->set([
                'title' => 'Laravel FireBase Tutorial 3' ,
                'category' => 'Laravel'
            ]);

        return response()->json(200, $newPost);
    }
}
