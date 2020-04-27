<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Instagram\Instagram;

class InstagramController extends Controller
{
    public function instagramfeed()
    {
        $instagram = new Instagram();
        $instagrams = $instagram->get('jamaru_hamada');

        return view('instagram' , compact('instagrams'));
    }
}
