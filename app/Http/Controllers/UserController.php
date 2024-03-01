<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Rent;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form::latest()->paginate(10);
        $rent = Rent::get();

        return view('form', compact('form', 'rent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Rent $rent)
    {
        $request->validate([
            'name' => 'required',
            'tgllhr' => 'required',
            'email' => 'required',
            'berangkat' => 'required',
            'datang' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/booking';
            $profilImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profilImage);
            $input['image'] = $profilImage;
        }

        Form::create($input);

        return view('form', compact('rent'))
            ->with('success', 'Data anda akan kami proses dan akan kami informasikan melalui email yang sudah anda inputkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form, Rent $rent)
    {
        return view('index', compact('form', 'rent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        return view('edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        $request->validate([
            'name' => 'required',
            'tgllhr' => 'required',
            'email' => 'required',
            'berangkat' => 'required',
            'datang' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/rent';
            $profilImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profilImage);
            $input['image'] = $profilImage;
        }

        $form->update($input);

        return redirect()->route('index')
            ->with('success', 'Data anda akan kami proses dan akan kami informasikan melalui email yang sudah anda inputkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        $form->delete();

        return redirect()->route('index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
