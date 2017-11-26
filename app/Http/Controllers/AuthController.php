<?php
namespace App\Http\Controllers;
use JWTAuth;
use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
  public function userAuth(Request $request)
  {
    // grab credentials from the request

    $credentials = $request->only('email', 'password');
   try {
      // attempt to verify the credentials and create a token for the user
      if (! $token = JWTAuth::attempt($credentials)) {
        return response()->json(['error' => 'invalid_credentials'], 401);
      }
    } catch (JWTException $e) {
      // something went wrong whilst attempting to encode the token
      return response()->json(['error' => 'could_not_create_token'], 500);
    }



    return response()->json(['token' => 'Bearer ' . $token, 'email' => $request->email]); 



  }


}