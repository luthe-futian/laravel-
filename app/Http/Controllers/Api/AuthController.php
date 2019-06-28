<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Validator;


class AuthController extends Controller
{
    public function login(Request $request, Client $client)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->all());
        }
        try {
            $respond = $client->post('http://admin.cn/oauth/token', [
                'form_params' => [
                    'grant_type' => env('OAUTH_GRANT_TYPE'),
                    'client_id' => env('OAUTH_CLIENT_ID'),
                    'client_secret' => env('OAUTH_CLIENT_SECRET'),
                    'username' => $request->input('username'),
                    'password' => $request->input('password'),
                    'scope' => '*',
                ],
            ]);
        }catch(RequestException $e){
            return response()->json('账号和密码错误',401);
        }
        if ($respond->getStatusCode() !== 401) {
            return json_decode($respond->getBody()->getContents(), true);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => '退出登录成功'
        ]);
    }


}