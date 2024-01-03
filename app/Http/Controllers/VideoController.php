<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return view('admin.video.index', [
            'videos' => Video::orderBy('id', 'desc')->get(),
            'more' => Video::orderBy('id', 'desc')->get()
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'youtube_code' => 'required',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi',
            'youtube_code.required' => 'Code Youtube wajib diisi',
        ];

        $this->validate($request, $rules, $messages);

        Video::create([
            'judul' => $request->judul,
            'youtube_code' => $request->youtube_code,
        ]);

        return redirect(route('video'))->with('success', 'data video berhasil disimpan');
    }

    public function update(Request $request, $id)
    {
        $video = Video::find($id);

        $rules = [
            'judul' => 'required',
            'youtube_code' => 'required',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi',
            'youtube_code.required' => 'Code Youtube wajib diisi',
        ];

        $this->validate($request, $rules, $messages);

        $video->update([
            'judul' => $request->judul,
            'youtube_code' => $request->youtube_code,
        ]);

        return redirect(route('video'))->with('success', 'data video berhasil di update');
    }

    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();

        return redirect(route('video'))->with('success', 'data video berhasil dihapus');
    }
}
