<?php

namespace App\Http\Controllers;
use App\Models\Wisata;
use Illuminate\Http\Request;

class WisatasController extends Controller
{
    public function show($id){
        $wisatas = \App\Models\Wisata::findOrFail($id);
        return view('explore', compact('wisatas'));
    }
    public function wisataList()
    {
        $wisatas = \App\Models\Wisata::all();
        return view ('explore', compact('wisatas'));
    }

    public function index()
    {
        $wisatas = Wisata::all();
        return view('wisatas.index', [
            'wisatas' => $wisatas
        ]);
    }

    public function edit($id)
    {
        $wisata = Wisata::find($id);
        if (!$wisata) return redirect()->route('wisatas.index')
            ->with('error_message', 'Wisata dengan id'.$id.' tidak ditemukan');

        return view('wisatas.edit', [
            'wisata' => $wisata
        ]);
    }
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'image' => 'required',
        //     'title' => 'required',
        //     'locate' => 'required',
        //     'description' => 'required',
        //     'type' => 'required',
        //     'location' => 'required',
        //     'duration' => 'required',
        //     'price' => 'required',
        //     'maps' => 'required',
        // ]);
        $wisata = Wisata::find($id);
        $wisata->title = $request->input('title');
        $wisata->image = $request->image;
        $wisata->locate = $request->locate;
        $wisata->description = $request->description;
        $wisata->type = $request->type;
        $wisata->location = $request->location;
        $wisata->duration = $request->duration;
        $wisata->price = $request->price;
        $wisata->maps = $request->maps;
        $wisata->save();
        return redirect()->route('wisatas.index')
            ->with('success_message', 'Berhasil mengubah wisata');
    }
    public function create()
    {
        return view('wisatas.create');
    }


    public function store(Request $request)
    {
        // $request->validate([
        //     'image' => 'required',
        //     'title' => 'required',
        //     'locate' => 'required',
        //     'description' => 'required',
        //     'type' => 'required',
        //     'location' => 'required',
        //     'duration' => 'required',
        //     'price' => 'required',
        //     'maps' => 'required',
        // ]);

        $array = $request->only([
            'image', 'title', 'locate','description','type','location','duration','price','maps'
        ]);
        
        $wisata = Wisata::create($array);
        return redirect()->route('wisatas.index')
            ->with('success_message', 'Berhasil menambah wisata baru');

    }
    public function destroy(Request $request, $id)
    {
        $wisata = Wisata::find($id);

        if ($wisata) $wisata->delete();

        return redirect()->route('wisatas.index')
            ->with('success_message', 'Berhasil menghapus wisata');

    }
}
