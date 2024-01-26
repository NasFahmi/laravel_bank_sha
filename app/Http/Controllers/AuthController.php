<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        //! disini diatur function mana yang tidak menggunakan token jwt, karena login dan register tidak memerlukan token jwt maka tambahkan register disini
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
   public function register(Request $request)
   {
        $dataCredentials = $request->all();
        $validator = Validator::make($dataCredentials,[
            'name'=>'required|string',
            'email'=>'required|email',
            'password'=>'required|min:8|regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            'pin'=>'required|digits:6',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->messages()],400);
        }

        $emailAlreadyExists = User::where('email',$request->email);
        if ($emailAlreadyExists->exists()) {
            return response()->json(['errors'=>'Email already exists'],409);
        }
        
        $dataCredentials['password'] = bcrypt($dataCredentials['password']);
        $dataCredentials['pin'] = bcrypt($dataCredentials['pin']);
        $user = User::create($dataCredentials);
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json(['data'=>$user,'access_token'=>$token,'token_type'=>'Bearer']);
   }
}
