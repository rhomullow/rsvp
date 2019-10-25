<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Refuse the invite
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function out()
    {
        return view('out');
    }
}
