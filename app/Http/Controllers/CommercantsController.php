<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request; 
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\CommercantForm;
use App\Commercant;
use App\Activite;
use Illuminate\Http\Request;

class CommercantsController extends Controller
{
    /* public function __construct(FormBuilder $formBuilder)
    {
        $this->formBuilder = $formBuilder;
    }*/

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
        /* $form = $formBuilder->create(CommercantForm::class);

        if (!$form->isValid())
        {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        Commercant::create($form->getFieldValues());

        //Activite::create($form->getFieldValues());

        return redirect('/commercants'); */

        $commercant = new Commercant;

        $commercant->email = $request->email;
        $commercant->nom = $request->nom;
        $commercant->prenom = $request->prenom;
        
        $commercant->save();

        Commercant::find($commercant->id)->activites()->attach($request->activites);

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

/*     // Make the form builder reusable for create and store methods
    private function getForm(?Commercant $commercant = null)
    {
        $commercant = $commercant ?: new Commercant();

        return $this->formBuilder->create(CommercantForm::class,
        [
            'model' => $commercant
        ]);
    } */
}
