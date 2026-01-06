<?php

// namespace App\Http\Controllers;


// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Routing\Controller as BaseController;

// class Controller extends BaseController
// {
//     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
// }










//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use Illuminate\Foundation\Bus\DispatchesJobs;
//use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Routing\Controller as BaseController;

//class Controller extends BaseController
//{
 //   use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
//}




// namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Routing\Controller as BaseController;

// class Controller extends BaseController
// {
//     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
// }


// use App\Models\User;
// use Illuminate\Http\Request;
// class UserController extends Controller
// {
//     public function store(Request $request)

//     {
//         User::create([

//             'name' => $request -> name ,
//             'email' => $request ->email,
//             'password' => bcrypt ($request -> password),
//         ]);

//         return "User Registered Success fully";
//     }
// }




// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\User;
// use Illuminate\Support\Facades\Hash;

// class UserController extends Controller
// {
//     // نمایش فرم ثبت نام
//    public function create()
//     {
//         return view('users.create');
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

//         return redirect()->back()->with('success', 'کاربر با موفقیت ثبت شد');
//     }
// }
   





// namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Routing\Controller as BaseController;

// class Controller extends BaseController
// {
//     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
// }




 









