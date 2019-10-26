<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Models\Site\Guest;
use App\Http\Controllers\Controller;

class QuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('quest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $answers = 0;

        if($data['q1'] == 'Helena'){
            $answers++;
        }

        if($data['q2'] == 'Liza'){
            $answers++;
        }

        if($data['q3'] == 'Umbrella'){
            $answers++;
        }
        $data['answers'] = $answers;
        $insert = Guest::create($data);

        if($answers == 0){
            return view('zero');
        }

        if($answers == 1) {
            return view('one');
        }

        if($answers == 2) {
            return view('two');
        }

        if($answers == 3) {
            return view('three');
        }
    }
}
