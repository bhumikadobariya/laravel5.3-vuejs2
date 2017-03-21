<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\User;
use Validator;
use Input;
use Response;
use Auth;
use Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller {

    /**
     * CategoriesController constructor.
     */
    public function __construct() {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

      $user = User::where('users.id', '!=', Auth::user()->id)->get();
      return Response::json([
                                  'success' => true,
                                  'message' => "All users",
                                  'data'    => $user,
                              ], 200)->header('Content-Type', 'application/json');

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return addNewUser
     */
    public function addNewUser(Request $request)
    {
        $data = $request->all();

        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ];
        $validator = Validator::make($request->all(), $rules);


        if ($validator->fails()) {
            $messages = $validator->messages()->toArray();

            return Response::json([
                                      'success' => false,
                                      'errors'  => $messages,
                                      'data'    => []
                                  ], 500)->header('Content-Type', 'application/json');
        } else {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);
            return response()->json([
                'success' => 'true',
                'message' => 'new user added',
                'data'    => $user
            ], 200);

        }
    }

    /**
     * Update the given user.
     *
     * @param  Request $request
     * @param  string $userId
     *
     * @return Response
     */
    public function update(Request $request, $userId) {
        $name = $request->input('name');
        $email = $request->input('email');
        $rules = [
            'name' => 'required|max:255',
            'email' => [
                'email',
                'max:255',
                'required',
                Rule::unique('users')->ignore($userId),
            ],
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $messages = $validator->messages()->toArray();

            return Response::json([
                                      'success' => false,
                                      'errors'  => $messages,
                                      'data'    => []
                                  ], 500)->header('Content-Type', 'application/json');
        } else {
            $user = User::find($userId);
            if ($user) {
                $user->name = $name;
                $user->email = $email;
                $user->save();

                return response()->json([
                                            'success' => 'true',
                                            'message' => 'user updated successfully',
                                            'data'    => $user
                                        ], 200);
            } else {
                return response()->json([
                                            'success' => 'false',
                                            'message' => 'Not found users',
                                            'data'    => []
                                        ], 500);
            }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $user = User::findOrFail($id);

        if ($user) {
            $user->delete();
        } else {
            return response()->json([
                                        'success' => 'false',
                                        'message' => 'Not found users',
                                        'data'    => []
                                    ], 400);
        }

        return response()->json([
                                    'success' => 'true',
                                    'message' => 'user deleted successfully',
                                    'data'    => []
                                ], 200);
    }

    public function getProfile() {
        return Auth::user();
    }

    public function updatePassword(Request $request, $userID) {
        $inputs = $request->all();
        $user = User::find($userID);
        $rules = [
            'password' => 'required|min:6'
        ];

        $validator = Validator::make($inputs, $rules);

        if ($validator->fails()) {

            $messages = $validator->messages();

            return Response::json([
                                      'success' => false,
                                      'errors'  => $messages->first('password'),
                                      'data'    => []
                                  ], 500)->header('Content-Type', 'application/json');

        }
        // $user = User:: findOrFail($user->id);
        if ((($inputs['password']) != $inputs['password_confirmation']) || ($inputs['password_confirmation'] == '')) {
            return Response::json([
                                      'success' => false,
                                      'errors'  => 'password confirmation does not match',
                                      'data'    => []
                                  ], 401)->header('Content-Type', 'application/json');

        }

        $user->password = Hash::make($inputs['password']);
        $user->save();

        return Response::json([
                                  'success' => true,
                                  'message' => "Password Changed Successfully",
                                  'data'    => []
                              ], 200)->header('Content-Type', 'application/json');

    }

    public function getUserEditData($id) {
      $user = User::find($id);

        if ($user) {
            return response()->json([
                                        'success' => 'true',
                                        'message' => '',
                                        'data'    => $user
                                    ], 200);
        } else {
            return response()->json([
                                        'success' => 'false',
                                        'message' => 'Not found users',
                                        'data'    => []
                                    ], 400);
        }
    }
}
