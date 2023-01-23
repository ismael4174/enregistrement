<?php

namespace App\Http\Controllers;

use App\Http\Controllers\participant as ControllersParticipant;
use Illuminate\Http\Request;

use App\Models\Participant;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('enregistrement');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_participant' => 'required',
            'prenom_participant' => 'required',
            'numero_participant' => 'required',
            'mail_participant' => 'required|email',
        ]);

        if (Participant::where('mail_participant', '=', $request->mail_participant)->first()) {
            return redirect('/')->with(['messages' => 'Ce participant existe déjà !']);
        } else {

        $post = new Participant;
        $post->nom_participant = $request->nom_participant;
        $post->prenom_participant = $request->prenom_participant;
        $post->numero_participant = $request->numero_participant;
        $post->mail_participant = $request->mail_participant;
        $post->save();

        return redirect('/')->with(['message' => 'Votre demande a été enregistrer, veuillez vérifier la liste d enregistrement!']);

    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
