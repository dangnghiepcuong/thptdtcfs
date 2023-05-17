<?php

namespace App\Http\Controllers;

use App\Models\FirestoreContext;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Kreait\Firebase\ServiceAccount;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Kreait\Firebase\Factory;
use Google\Cloud\Firestore\FirestoreClient;
use GPBMetadata\Google\Firestore\V1Beta1\Firestore;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{

    public function Login(Request $request)
    {
        // validator(request()->all(), [
        //     'email' => ['required', 'email'],
        //     'password' => ['required']
        // ])->validate();

        // $factory = (new Factory)->withServiceAccount(__DIR__ . '/thptdtcfs-6a2f9-firebase-adminsdk-5wfnd-2e00b17d73.json');
        // $firestore = $factory->createFirestore();
        // $database = $firestore->database();

        $firestoreCtx = new FirestoreContext();

        $collection = $firestoreCtx->collection('users');
        $query = $collection->where('username', '=', $request->Username);
        if ($query->count() == 0)
            return redirect('/Login');

        $result = $query->documents();
        // Log::channel('emergency')->info($result);

        if ($result == 'thptdtcfs')
            return redirect('/');
        else
            return redirect('/Login');
    }
}
