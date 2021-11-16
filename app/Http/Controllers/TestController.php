<?php

namespace App\Http\Controllers;

use App\Services\FirebaseService;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index() {

        $database = FirebaseService::connect();

        return response()->json($database->getReference('test/blogs')->getValue());
    }

    public function create(Request $request) {

        $database = FirebaseService::connect();

        $newPost = $database
            ->getReference('test/blogs')
            ->set([
                'title' => $request['title'] ,
                'content' => $request['content']
            ]);

        return response()->json(200, 'blog has been created');
    }

    public function edit(Request $request) {

        $database = FirebaseService::connect();

        $editPost = $database->getReference('test/blogs/' . $request['title'])
            ->update([
                'content/' => $request['content']
            ]);

        return response()->json(200, 'blog has been edited');
    }

    public function delete(Request $request) {

        $database = FirebaseService::connect();

        $deletePost = $database->getReference('test/blogs/' . $request['title'])
            ->remove();

        return response()->json(200, 'blog has been deleted');
    }
}
