<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.slide.index', [
            'slide' => Slide::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi form
        $this->validate($request, [
            'judul_slide' => 'required',
            // 'gambar_slide' => 'mimes:png,jpg,jpeg,gif,bmp'
        ]);

        $data = $request->all();
        Slide::create($data);
        return redirect()->route('slide.index')->with('success', 'Data berhasil disimpan');

        // if (!empty($request->file('gambar_slide'))) {
        //     $data = $request->all();
        //     $data['gambar_slide'] = $request->file('gambar_slide')->store('img/slide');

        //     Slide::create($data);

        //     return redirect()->route('slide.index')->with('success', 'Data berhasil disimpan');
        // } else {
        //     $data = $request->all();
        //     Slide::create($data);

        //     return redirect()->route('slide.index')->with('success', 'Data berhasil disimpan');
        // }
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
        $slides = Slide::find($id);

        return view('dashboard.slide.edit', [
            'slide' => $slides
        ]);
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
        $this->validate($request, [
            'judul_slide' => 'required',
        ]);

        $slide = Slide::find($id);
        $slide->update([
            'judul_slide' => $request->judul_slide,
            'gambar_slide' => $request->gambar_slide,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('slide.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::find($id);
        if (!$slide) {
            return redirect()->back()->with('success', 'Data masih kosong!');
        }
        // Storage::delete($slide->gambar_slide);
        $slide->delete();
        return redirect()->route('slide.index')->with('success', 'Data berhasil dihapus!');
    }
}
