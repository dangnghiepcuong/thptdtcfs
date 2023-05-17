<?php

namespace App\Models;

use Google\Cloud\Firestore\FirestoreClient;
use GPBMetadata\Google\Firestore\V1Beta1\Firestore;
use Kreait\Firebase\Factory;

class FirestoreContext
{
    private $factory;
    private $firestore;
    private $database;

    // public function FirestoreContext()
    // {
    //     $this->factory = (new Factory)->withServiceAccount(__DIR__ . '/thptdtcfs-6a2f9-firebase-adminsdk-5wfnd-2e00b17d73.json');
    //     $this->firestore = FirestoreContext::$factory->createFirestore();
    //     $this->database = FirestoreContext::$firestore->database();
    // }

    public function db_connection()
    {
        $factory = (new Factory)->withServiceAccount(__DIR__ . '/thptdtcfs-6a2f9-firebase-adminsdk-5wfnd-2e00b17d73.json');
        $this->factory = $factory;
        $this->firestore = $this->factory->createFirestore();
        $this->database = $this->firestore->database();
    }

    public function collection($collection)
    {
        $clt = $this->database->collection($collection);
        return $clt;
    }

    public function createAccount($username, $password, $email, $role)
    {
        $document = $this->database->document('accounts/' . $username);
        $document->create([
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'role' => $role
        ]);
    }
}
