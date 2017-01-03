<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        switch (\Auth::user()->active) {
            case 1:
                $usersNotActivated = \App\User::where('active', '=', 0)->get();

                return view('home')->with('usersNotActivated', $usersNotActivated);
                break;

            default:
                $user = \Auth::user();

                if (! $user->activation_email_sent) {
                    \Mail::send('emails.activationWait', ['user' => $user], function ($m) use ($user) {
                        $m->from('no-reply@flvnt.com', 'Flvnt Activation');

                        $m->to($user->email, $user->name)->subject('Flvnt Activation');
                    });

                    $user->activation_email_sent = 1;

                    $user->save();

                    return view('index')->with('modal', ['info' => 'Thank you for registering. You will recive an email once your account is active']);
                }

                \Auth::logout();

                return view('index')->with('info', 'Your account is not yet active. You will recive an email once your account is active');
                break;
        }

        return view('index');
    }

    public function activateUser($usersid)
    {
        $userToActivate = \App\User::where('id', '=', $usersid)->first();

        $userToActivate->active = 1;

        $userToActivate->save();

        \Mail::send('emails.activationDone', ['user' => $userToActivate], function ($m) use ($userToActivate) {
            $m->from('no-reply@flvnt.com', 'Flvnt Account Activated');

            $m->to($userToActivate->email, $userToActivate->name)->subject('Flvnt Account Activated');
        });

        return redirect()->back();
    }
}
