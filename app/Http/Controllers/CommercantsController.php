<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request; 
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\CommercantForm;
use App\Commercant;
use App\Activite;
use Illuminate\Http\Request;
use Mail;

class CommercantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commercants = Commercant::all();
        return view('commercants.index')->with('commercants', $commercants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(CommercantForm::class);

        return view('commercants.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormBuilder $formBuilder, Request $request)
    {
        // FormBuilder method for form validation

        /* $form = $formBuilder->create(CommercantForm::class);

        if (!$form->isValid())
        {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        Commercant::create($form->getFieldValues());

        //Activite::create($form->getFieldValues());

        return redirect('/commercants'); */

        // Request method for form validation

        $commercant = new Commercant;

        $commercant->email = $request->email;
        $commercant->nom = $request->nom;
        $commercant->prenom = $request->prenom;
        
        $commercant->save();

        // Add activités data to pivot table w/ current commerçant
        Commercant::find($commercant->id)->activites()->attach($request->activites);

        //Mail::to('maximebarber@gmail.com')
            //->send(new Commercant($request->except('_token')));

        return redirect('/commercants');
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
