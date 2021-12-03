<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;
use Image;


class Main2021Controller extends Controller
{

    public function segreta(Request $request)
    {
        $url = route('segreta');
        $request->session()->put('current_url', $url);
        return view('2021.segreta.home');
    }
    public function segreta_mob(Request $request)
    {
        $url = route('mob-segreta');
        $request->session()->put('current_url', $url);
        return view('2021.segreta.m-home');
    }
    public function segreta_rules(Request $request)
    {
        $url = route('segreta-rules');
        $request->session()->put('current_url', $url);
        return view('2021.segreta.rules');
    }
    public function segreta_rules_mob(Request $request)
    {
        $url = route('mob-segreta-rules');
        $request->session()->put('current_url', $url);
        return view('2021.segreta.m-rules');
    }
    public function segreta_prizes(Request $request)
    {
        $url = route('segreta-prizes');
        $request->session()->put('current_url', $url);
        return view('2021.segreta.prizes');
    }
    public function segreta_prizes_mob(Request $request)
    {
        $url = route('mob-segreta-prizes');
        $request->session()->put('current_url', $url);
        return view('2021.segreta.m-prizes');
    }
    public function segreta_faqs(Request $request)
    {
        $url = route('segreta-faqs');
        $request->session()->put('current_url', $url);
        return view('2021.segreta.faqs');
    }
    public function segreta_faqs_mob(Request $request)
    {
        $url = route('mob-segreta-faqs');
        $request->session()->put('current_url', $url);
        return view('2021.segreta.m-faqs');
    }
    public function segreta_contacts(Request $request)
    {
        $url = route('segreta-contacts');
        $request->session()->put('current_url', $url);
        return view('2021.segreta.contacts');
    }
    public function segreta_contacts_mob(Request $request)
    {
        $url = route('mob-segreta-contacts');
        $request->session()->put('current_url', $url);
        return view('2021.segreta.m-contacts');
    }
    public function segreta_leaderboard(Request $request)
    {
        if (Auth::check())
        {
            $url = route('segreta-leaderboard');
            $request->session()->put('current_url', $url);
            return view('2021.segreta.leaderboard');
        }
        else{
            $url = route('segreta-leaderboard');
            $request->session()->put('current_url', $url);
            return redirect()->route('google-login');
        }
    }
    public function segreta_leaderboard_mob(Request $request)
    {
        if (Auth::check())
        {
            $url = route('mob-segreta-leaderboard');
            $request->session()->put('current_url', $url);
            return view('2021.segreta.m-leaderboard');
        }
        else{
            $url = route('mob-segreta-leaderboard');
            $request->session()->put('current_url', $url);
            return redirect()->route('google-login');
        }
    }
    public function segreta_dashboard(Request $request)
    {
        if (Auth::check())
        {
            $url = route('segreta-dashboard');
            $request->session()->put('current_url', $url);
            return view('2021.segreta.dashboard');
        }
        else{
            $url = route('segreta-dashboard');
            $request->session()->put('current_url', $url);
            return redirect()->route('google-login');
        }
    }
    public function segreta_dashboard_mob(Request $request)
    {
        if (Auth::check())
        {
            $url = route('mob-segreta-dashboard');
            $request->session()->put('current_url', $url);
            return view('2021.segreta.m-dashboard');
        }
        else{
            $url = route('mob-segreta-dashboard');
            $request->session()->put('current_url', $url);
            return redirect()->route('google-login');
        }
    }
    public function segreta_hunt(Request $request)
    {
        if (Auth::check())
        {
            $url = route('segreta-hunt');
            $request->session()->put('current_url', $url);
            return view('2021.segreta.hunt');
        }
        else{
            $url = route('segreta-hunt');
            $request->session()->put('current_url', $url);
            return redirect()->route('google-login');
        }
    }
    public function segreta_hunt_mob(Request $request)
    {
        if (Auth::check())
        {
            $url = route('mob-segreta-hunt');
            $request->session()->put('current_url', $url);
            return view('2021.segreta.m-hunt');
        }
        else{
            $url = route('mob-segreta-hunt');
            $request->session()->put('current_url', $url);
            return redirect()->route('google-login');
        }
    }
    


}

