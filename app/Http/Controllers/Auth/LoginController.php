<?php

namespace App\Http\Controllers\Auth;

use App\CompanySetting;
use App\Http\Controllers\Controller;
use App\Plan;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Carbon\Carbon;
use Exception;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Jerry\JWT\JWT;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(Request $request)
    {
        $this->middleware('guest')->except('logout');
    }



    protected function authenticated(Request $request)
    {
        // login history

        $agent = new Agent();
        // dd($agent->city());
        $details = [
            "device" => $agent->device(),
            "platform" => $agent->platform(),
            "browser" => $agent->browser(),
        ];
        $activity_log = [
            'user_id' => Auth::user()->id,
            'ip' => request()->getClientIp(),
            'datetime' =>  Carbon::now()->toDateTimeString(),
            'created_at' =>  Carbon::now()->toDateTimeString(),
            'updated_at' =>  Carbon::now()->toDateTimeString(),
            'details' => json_encode($details)
        ];

        DB::table('login_histories')->insert($activity_log);

        // call api
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('auth/login');
    }

    private function logTheUserOutWithMessage(String $msg){
        Auth::logout();
        return redirect('/login')->with('msg' , $msg);
    }
    private function checkPlanEndDate($end_date){
        $end_date = Carbon::parse($end_date);
        $allow_days = config('api.ALLOW_PLAN_DAYS') ?? 4 ;

        if ($end_date->copy()->addDays($allow_days)->isPast())
           return $this->logTheUserOutWithMessage("sorry ,your subscription has expired .. contact sphinx company to renew your subscription");
    }
}
