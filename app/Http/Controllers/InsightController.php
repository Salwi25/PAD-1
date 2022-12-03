<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insight;
use App\Http\Requests\StoreInsightRequest;
use App\Http\Requests\UpdateInsightRequest;

class InsightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'id' => "insight",
            'insight' => Insight::orderBy('created_at', 'desc')->paginate(10)
        );
        return view('insight.insight')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insight.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInsightRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'picture' => 'image|nullable'
        ]);
        $insight = new Insight;
        $insight->judul = $request->input('judul');
        $insight->deskripsi = $request->input('deskripsi');
        if ($request->hasFile('picture')){
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('picture')->storeAs('public/posts_image', $filenameSimpan);
        }
        else{
            $filenameSimpan = 'noimage.png';
        }
        $insight->picture = $filenameSimpan;
        $insight->save();

        return redirect('insight')->with ('success', 'Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Insight  $insight
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'id' => "insight",
            'insight' => Insight::find($id)
        );
        return view('insight.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Insight  $insight
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'id' => "insight",
            'insight' => Insight::find($id)
        );
        return view('insight.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInsightRequest  $request
     * @param  \App\Models\Insight  $insight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insight $insight)
    {
        $insight = Insight::find($id);
        $insight->judul = $request->input('judul');
        $insight->deskripsi = $request->input('deskripsi');
        if ($request->hasFile('picture')){
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('picture')->storeAs('public/posts_image', $filenameSimpan);
        }
        else{
            $filenameSimpan = 'noimage.png';
        }
        $insight->picture = $filenameSimpan;

        $insight->update();
        return redirect('insight');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Insight  $insight
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $insight = Insight::find($id);
        $insight->delete();
        return redirect('/insight')->with('success', 'Berhasil menghapus data');
    }
}
