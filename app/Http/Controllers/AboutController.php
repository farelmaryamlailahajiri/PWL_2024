<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return 'Nama: Farel Maryam Laila Hajiri <br> NIM: 2341760028';
    }
}
