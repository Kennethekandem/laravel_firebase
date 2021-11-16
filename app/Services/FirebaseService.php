<?php

namespace App\Services;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;


class FirebaseService
{
    public static function connect() {

        $firebase = (new Factory)
            ->withServiceAccount(base_path(env('FIREBASE_CREDENTIALS')))
            ->withDatabaseUri(env("FIREBASE_DATABASE_URL"));

        return $firebase->createDatabase();
    }
}
