<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Http\Requests\StoreFAQRequest;
use App\Http\Requests\UpdateFAQRequest;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'id' => "faq",
            'faq' => FAQ::orderBy('created_at', 'desc')->paginate(10)
        );
        return view('FAQ.FAQ')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('FAQ.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFAQRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);
        $faq = new FAQ;
        $faq->pertanyaan = $request->input('pertanyaan');
        $faq->jawaban = $request->input('jawaban');
        $faq->save();

        return redirect('FAQ')->with ('success', 'Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'id' => "faq",
            'faq' => FAQ::find($id)
        );
        return view('FAQ.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'id' => "faq",
            'faq' => FAQ::find($id)
        );
        return view('FAQ.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFAQRequest  $request
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQ $fAQ)
    {
        $faq = FAQ::find($id);
        $faq->pertanyaan = $request->input('pertanyaan');
        $faq->jawaban = $request->input('jawaban');
        $faq->update();
        return redirect('FAQ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq = FAQ::find($id);
        $faq->delete();
        return redirect('/FAQ')->with('success', 'Berhasil menghapus data');
    }
}
