<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
      public function users(){

        $users = User::orderByDesc('id')->get();
        return view('dashboard.admin.users.users',compact('users'));

      }

      public function  create()
      {
        return view('dashboard.admin.users.create');
      }



      public function store(Request $request)
      {
          $validatedData = $request->validate([
              'name' => 'required|string|max:255',
              'email' => 'required|email|unique:users,email',
              'password' => 'required|string|min:6',
              'course_name' => 'required|string|max:255',
          ]);

          User::create([
              'name' => $validatedData['name'],
              'email' => $validatedData['email'],
              'password' => bcrypt($validatedData['password']),
              'course_name' => $validatedData['course_name'],
          ]);

          return redirect()->route('users.all')->with('msg', 'User created successfully');
      }



      public function changeStatus(User $user)
        {
            if (!$user) {
                return redirect()->route('users.all')->with('error', 'User not found.');
            }

            $user->update([
                'status' => $user->status === 'active' ? 'inactive' : 'active',
            ]);

            return redirect()->route('users.all')->with('msg', 'User status changed successfully.');
        }




        // Admin


        public function createAdmin()
        {

        }

        public function storeAdmin ()
        {

        }




      public function admins(){

        $admins = Admin::orderByDesc('id')->get();

        return view('dashboard.admin.admins.admins',compact('admins'));
      }





    //   public function search(Request $request)
    //   {

    //       $customers = User::all();

    //       $searchQuery = $request->q;

    //       $customers->where(function ($query) use ($searchQuery) {
    //           $query->whereHas('users', function ($subQuery) use ($searchQuery) {
    //           })->orWhere('mobile', 'LIKE', $searchQuery . "%") // Search by mobile
    //             ->orWhere('name', 'LIKE', "%" . $searchQuery . "%")
    //             ; // Search by name
    //       });

    //       $result = $customers->get();
    //       return response()->json(['users' => $result]);
    //   }

//     public function search(Request $request)
// {
//     $searchQuery = $request->input('q');

//     $result = User::where(function ($query) use ($searchQuery) {
//         $query->where('mobile', 'LIKE', $searchQuery . "%") // Search by mobile
//               ->orWhere('name', 'LIKE', "%" . $searchQuery . "%"); // Search by name
//     })->get();

//     return response()->json(['users' => $result]);
// }

public function search(Request $request)
{
    // $user = Auth::user();
    $customers = User::all();

    $searchQuery = $request->q;

    $customers->where(function ($query) use ($searchQuery) {
        $query->where(function ($subQuery) use ($searchQuery) {
            // $subQuery->where('mobile', 'LIKE', $searchQuery . "%")
            $subQuery->orWhere('name', 'LIKE', "%" . $searchQuery . "%");
        });
    });

    $result = $customers->get();
    return response()->json(['customers' => $result]);
}


}
