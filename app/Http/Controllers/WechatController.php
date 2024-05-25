<?php

namespace App\Http\Controllers;

use EasyWeChat\MiniApp\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WechatController extends Controller
{
    protected $wechat;
    public function __construct()
    {
        $config = [
            'app_id' => 'wx577533bea357a050',
            'secret' => 'db0e741d6aab89d28de794f4a0f1462b',
            'aes_key' => '',
            'token' => '',
        ];
        $this->wechat = new Application($config);
    }

    //
    public function loginTest()
    {
        $accessToken = $this->wechat->getAccessToken();
        $token = $accessToken->getToken();
        dd($token);
        Log::info();
    }
}
