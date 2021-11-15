<?php

namespace App\Services;

use Illuminate\Http\Request;


class FirebaseService
{
    public function __construct() {

    }

    public static function connect() {
/*
//        $sa = ServiceAccount::fromJsonFile(__DIR__.'/laravel-firebase-ae289-firebase-adminsdk-ti4d2-ba8dd526f7.json');
        $firebase = (new Factory)
            ->withServiceAccount(base_path(env('FIREBASE_CREDENTIALS')));
//            ->withDatabaseUri(env("FIREBASE_DATABASE_URL"));

        return $firebase->createDatabase();*/
    }
}
