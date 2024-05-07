<?php

namespace App\Http\Controllers;
use App\Models\Accounts;
use Illuminate\Support\Facades\Session;
use App\Models\Recipes;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function login(Request $request)
    {
       
        $email = $request->input('email');
        $password = $request->input('password');

        // Call a custome function to validate credentials
        if ($this->validateCredentials($email, $password)) 
        {
            // Authentication successful
            //return view('Recipes',['account'=>$acc->full_name]); // or wherever you want to redirect after successful login
            //  return view('Recipes');
          // return redirect()->to('/Recipes');
         // return  response()->json(['message' => 'correct','url'=>'/Recipes']);
         $account = Accounts::where('email', $email)->first();
         session(['user' => $account]);
         return response()->json(['success' => true]);
            
        } else {
            // Authentication failed
            // abort(404);
            return  response()->json(['message' => 'Invalid email or password']);
        }
    }

    private function validateCredentials($email, $password)
    {
        $account = Accounts::where('email', $email)->where('password', $password)->first();
        return
         $account !== null;
    }

    public function register(Request $r)
    {
        
       if( $account = Accounts::where('email', $r->email)->first() ) 
       {
        return  response()->json(['message' => 'Invalid email']);
       }
       else 
       {
        $a = Accounts::create
        ([  'full_name' => $r->name,
            'email'=>$r->email,
            'password'=>$r->password
            
        ]);
        session(['user' => $account]);
        return  response()->json(['message' => 'Your Account Has Been Successfully Created' ,'success'=>true]);
       }
    }


    public function clearSession()
    {
        Session::flush();
        $recipes=Recipes::all();
       return view('Recipes',['rec'=>$recipes]); // aw 3mel redirect aal /Recipes route directly
    }
    
    public function FetchAccount(Request $request)
    {
        // $account = Accounts::where('email', $request)->first();
        $acc = Accounts::where('id', $request);
        return  response()->json(['response' => $acc]);

    }

    public function showProfile($id)
{
    return view('\components\profilepage', ['id' => $id]);
    
}
// public function showProfile($id)
// {
//     $account = Accounts::findOrFail($id); // Fetch the account based on the ID
//     return view('\components\profilepage', ['account' => $account]); // Pass the account data to the view
// }
    public function fetchAccountById($id)
    {
        try {
            $account = Accounts::findOrFail($id);
            return response()->json(['success' => true, 'account' => $account], 200);
        } catch (\Exception $e) {return response()->json(['success' => false, 'message' => 'Account not found.'], 404);}
        
    }



    



}
