<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'gambar_slide' => 'required|file|mimes:jpeg,png,jpg,svg|max:5120'
        ]);

        // validasi gambar beserta insert data
        if (!empty($request->file('gambar_slide'))) {
            $data['gambar_slide'] = $request->file('gambar_slide');
            $imageName = time() . '-' . $data['gambar_slide']->getClientOriginalName();
            $data['gambar_slide']->move(\public_path("images/slide/"), $imageName);

            Slide::create([
                'judul_slide' => $request->judul_slide,
                'gambar_slide' => $imageName,
            ]);

            return redirect()->route('slide.index')->with('success', 'Data berhasil disimpan');
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

        if (File::exists("images/slide/" . $slide->gambar_slide)) {
            File::delete("images/slide/" . $slide->gambar_slide);
        }

        $slide->delete();
        return redirect()->route('slide.index')->with('success', 'Data berhasil dihapus!');
    }
}
