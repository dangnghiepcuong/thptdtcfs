<?php

namespace App\Http\Controllers;

use App\Models\FirestoreContext;
use GPBMetadata\Google\Firestore\V1Beta1\Firestore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Kreait\Firebase\Factory;
use Kreait\Laravel\Firebase\Facades\Firebase;

/**
 * Summary of HomeController
 */
class HomeController extends Controller
{
    public function Auth(Request $request)
    {
        $username = $request->Username;
        $password = Hash::make($request->Password);

        if ($request->Username != "")
            return redirect('/');
        return redirect('login');
    }

    public function RegisterAccount(Request $request)
    {
        // session()->put('username', $request->username);
        // session()->put('email', $request->email);

        $validation = true;
        $message1 = '';
        $message2 = '';
        $message3 = '';
        $message4 = '';


        if ($request->username == '') {
            $validation = false;
            $message1 = '*Nhập tài khoản';
        }

        if ($request->password == '') {
            $validation = false;
            $message2 = '*Nhập mật khẩu';
        } elseif ($request->repeat_password == '') {
            $validation = false;
            $message3 = '*Nhập lại mật khẩu';
        } elseif ($request->repeat_password != $request->password) {
            $validation = false;
            $message3 = '*Nhập lại mật khẩu phải trùng với mật khẩu';
        }

        if ($validation == false) {
            return redirect()->route('register_account')
                ->with([
                    'message1' => $message1,
                    'message2' => $message2,
                    'message3' => $message3,
                    'message4' => $message4,
                ]);
        }

        if ($request->email == '') {
            // $firestoreCtx = new FirestoreContext();
            // $factory = (new Factory)->withServiceAccount(__DIR__ . '/thptdtcfs-6a2f9-firebase-adminsdk-5wfnd-2e00b17d73.json');
            // $firestore = $factory->createFirestore();
            // $database = $firestore->database();
            // $firestoreCtx->db_connection();
            // $collection = $firestoreCtx->collection('accounts');
            // $collection = $database->collection('accounts');

            // $database = Firebase::firestore()->database();

                // $collection = $database->collection('accounts');

                // $query = $collection->where('username', '=', $request->username);

                // if ($query->count() > 0)
                //     return redirect()->route('/login/register_account')
                //         ->with(['legal_route' => true, 'message1' => 'Tài khoản đã tồn tại!']);

                // $document = $database->document('accounts/' . $request->username);
                // $document->create([
                //     'username' => $request->username,
                //     'password' => $request->password,
                //     'email' => $request->email,
                //     'role' => $request->role
                // ]);

            return redirect()->route('notification')->with(['legal_route' => true, 'message' => 'Đăng ký thành công!']);
        }



        return redirect()->route('email_verification')->with(['legal_route' => true]);
    }
}
