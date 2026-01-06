<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller



    {
    /**
     * Display a listing of the resource.
     */
   // public function index()
   // {
        //
   // }

    /**
     * Store a newly created resource in storage.
     */
   // public function store(Request $request)
   // {
        //
    //}

    /**
     * Display the specified resource.
     */
   // public function show(user $user)
   // {
        //
    //}

    /**
     * Update the specified resource in storage.
     */
   // public function update(Request $request, user $user)
   // {
        //
   // }

    /**
     * Remove the specified resource from storage.
     */
    //public function destroy(user $user)
    //{
        //
   // }
//}














//namespace App\Http\Controllers;

//use Illuminate\Http\JsonResponse;

//class UserController extends Controller
//{
    //public function index(): JsonResponse
    //{
       // return response()->json([
           // 'data' => '1,2,3,4'
    //    ], 200);
   // }
//}









//namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
//use Illuminate\Http\JsonResponse;
//use App\Models\User;
//use Illuminate\Support\Facades\Hash;

//class UserController extends Controller
//{
    // ثبت کاربر
    //public function register(Request $request): JsonResponse
    //{
       // $validated = $request->validate([
            //'name' => 'required|string|max:255',
           // 'email' => 'required|email|unique:users',
          //  'password' => 'required|string|min:6',
        //]);

       // $user = User::create([
            //'name' => $validated['name'],
           // 'email' => $validated['email'],
           // 'password' => Hash::make($validated['password']),
        //]);

       // return response()->json([
       //     'message' => 'User registered successfully',
         ///   'user' => $user
       // ], 201);
   // }

    // دریافت همه کاربران
   // public function index(): JsonResponse
   // {
      //  $users = User::all();
       // return response()->json($users);
   // }
//}


















// {
//     // نمایش فرم ثبت نام
//     public function create()
//     {
//       return view('register');

//     }

//     // ذخیره داده‌ها
//     public function store(Request $request)
//     {
//         // اعتبارسنجی فرم
//         $request->validate([
//             'name' => 'required|string|max:255',
//             'email' => 'required|email|unique:users,email',
//             'password' => 'required|string|min:6|confirmed',
//         ]);

//         // ایجاد کاربر جدید
//         User::create([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => Hash::make($request->password),
//         ]);

//         return redirect()->back()->with('success', 'DONE');
//     }
 }


