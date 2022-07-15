<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateUserInfoRequest;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
  public function register(RegisterRequest $request)
  {
      $user = User::create(
          $request->only('first_name', 'last_name', 'email', 'user_name', 'group')
          + [
              'password' => \Hash::make($request->input('password')),
            //  'is_admin' => $request->path() === 'api/admin/register' ? 1 : 0
          ]
      );

      return response($user, Response::HTTP_CREATED);

  }

  public function login(Request $request)
    {
        if (!\Auth::attempt($request->only('user_name', 'password'))) {
            return response([
                'error' => 'Invalid Username/Password'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $user = \Auth::user();

       $superadminLogin = $request->path() === 'api/admin/login';

       if ($superadminLogin && !$user->is_admin) {
           return response([
                'error' => 'Access Denied!'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $scope = $superadminLogin ? 'superadmin' : 'admin';
        $jwt = $user->createToken('token', [$scope])->plainTextToken;
       $cookie = cookie('jwt', $jwt, 60 * 24); // 1 day

        return response([
           'message' => 'success'
      ])->withCookie($cookie);
    }

    public function user(Request $request)
   {
       $user = $request->user();

       return $user;
   }

   public function logout()
    {
        $cookie = \Cookie::forget('jwt');

        return response([
            'message' => 'success'
        ])->withCookie($cookie);
    }

    public function updateUserInfo(UpdateUserInfoRequest $request)
    {
        $user = $request->user();

        $user->update($request->only('first_name', 'last_name', 'email', 'user_name'));

        return response($user, Response::HTTP_ACCEPTED);
    }

    public function updatePassword(UpdatePasswordRequest $request)
   {
       $user = $request->user();

       $user->update([
           'password' => \Hash::make($request->input('password'))
       ]);

       return response($user, Response::HTTP_ACCEPTED);
   }

   public function alluser(Request $request)
  {
      $user = User::all();
      return $user;
  }


}
