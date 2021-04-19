<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('jenis.index', compact('types'));
    }
    public function create()
    {
        return view('jenis.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'      => 'required',
            'price'     => 'required',
        ]);

        $type = Type::create([
            'name'      => $request->input('name'),
            'price'     => $request->input('price'),
        ]);

        return redirect()->back();
    }
    public function edit($id)
    {
        $type = Type::findOrFail($id);

        return view('jenis.edit', compact('type'));
    }
    public function update(Request $request, $id)
    {
        $type = Type::findOrFail($id);

        $type->name  = $request->input('name');
        $type->price = $request->input('price');

        $type->save();

        return redirect()->back();
    }
    public function destroy($id)
    {
       $type = Type::findOrFail($id);

       $type->delete();

       return redirect()->back();
    }
}
