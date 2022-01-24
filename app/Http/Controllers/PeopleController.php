<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePeopleRequest;
use App\Http\Requests\UpdatePeopleRequest;
use App\Models\People;
use Illuminate\Http\Request;
use App\Events\PeopleCreated;

class PeopleController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public $languages = [];
    public $interests = [];

    public function __construct()
    {
        $this->middleware('auth');

        $this->languages = [
            "English",
            "Afrikans",
            "Venda",
            "Zulu",
            "Tsonga",
            "Ndebele",
            "Xhoza",
            "Sepedi",
            "Tswana",
            "Sotho"
        ];

        $this->interests = [
            "Music",
            "Gaming",
            "Travel",
            "Art",
            "Nature",
            "Social causes",
            "Foreign languages",
            "Topical blogs or research",
            "History",
            "Theater"
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peoples = People::all();
        $card = "List People";
        $count = 1;
        $crumb = "List people";
        return view("admin.people.index", ['peoples' => $peoples, 'count' => $count, 'crumb' => $crumb, 'card' => $card]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peoples = People::all();
        $card = "Create People";
        $crumb = "Create people";

        return view("admin.people.create", [
            'peoples' => $peoples, 
            'crumb' => $crumb, 
            'card' => $card,
            'languages' => $this->languages,
            'interests' => $this->interests,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePeopleRequest $request)
    {

        $input = $request->all();

        $people = new People();
        $people->name = $input['name'];
        $people->surname = $input['surname'];
        $people->id_number = $input['id_number'];
        $people->mobile_number = $input['mobile_number'];
        $people->email = $input['email'];
        $people->date_of_birth = $input['date_of_birth'];
        $people->language = $input['language'];
        $people->interests = implode("|", $input['interests']);
        $people->save();

        event (new PeopleCreated($people));

        return redirect()->route('create-people')->with('message', 'People created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $people = People::find($id);
        $crumb = 'View people';
        $card = 'View People';

        return view('admin.people.show', [
            'people' => $people, 
            'crumb' => $crumb, 
            'card' => $card,
            'languages' => $this->languages,
            'interests' => $this->interests,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $people = People::find($id);
        $crumb = 'Edit people';
        $card = 'Edit People';

        return view('admin.people.edit', [
            'people' => $people, 
            'crumb' => $crumb, 
            'card' => $card,
            'languages' => $this->languages,
            'interests' => $this->interests,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePeopleRequest $request)
    {
        
        $input = $request->all();

        $people = People::find($input['id']);
        $people->name = $input['name'];
        $people->surname = $input['surname'];
        $people->id_number = $input['id_number'];
        $people->mobile_number = $input['mobile_number'];
        $people->email = $input['email'];
        $people->date_of_birth = $input['date_of_birth'];
        $people->language = $input['language'];
        $people->interests = implode("|", $input['interests']);
        $people->save();

        if (!$people->id) {
            return redirect('edit-people/' . $people->id)->with('error', 'People not update!');
        }
        return redirect('edit-people/' . $people->id)->with('message', 'People updated successfully!');
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
