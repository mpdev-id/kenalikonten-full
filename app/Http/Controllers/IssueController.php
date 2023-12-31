<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IssueController extends Controller
{
    public function index(Request $request)
    {
        $sortOrder = $request->query('all-sort', 'asc');
        $semuanya  = Issue::query();
        if ($sortOrder == 'asc') {
            $semua = $semuanya->orderBy('created_at', 'asc')->get();
        } else {
            $semua = $semuanya->orderBy('created_at', 'desc')->get();
        }

        $data = [
            'status' => ['validated','not_validate','checking'],
            'semua'  => $semua,

        ];
        return view('BE.dashboard.konten.index',compact('data'));
    }

    public function reply(){
        return view('BE.dashboard.konten.reply');
    }

    public function editReply($slug){
        $data = Content::where('slug', $slug)->first();
        return view('BE.dashboard.konten.reply',compact('data'));
    }

    public function sendReply(Request $request)
    {
        $request->validate([
            'foto'    => 'image|max:2048|mimes:jpeg,png,jpg',
            'title'   => 'required|max:500',
            'content' => 'required|min:10',
            'status'  => 'required',
        ]);
        $slug = Str::slug($request->title, '-').'-'.str::random(3);
    
        try {
            $content = Content::firstOrNew(['id' => $request->id]);
    
            if ($request->hasFile('foto')) {
                $foto      = $request->file('foto');
                $path      = 'img/contents/' . date('Y') . '/' . date('m') . '/';
                $imageName = 'foto-content-' . $slug . '.' . $foto->getClientOriginalExtension();
                $foto->move($path, $imageName);
                $content->foto = url($path . $imageName);
            }
    
            $content->title = $request->title;
            $content->slug  =  $request->slug ?? $slug;
            $content->content = $request->content;
            $content->status = $request->status;
            $content->public_status = 'visible';
    
            $content->save();
    
            return redirect()
                ->back()
                ->with('success', 'Konten berhasil ditambahkan');
    
        } catch (\Throwable $th) {
            // dd($th);
            \Log::error($th);
    
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan: ' . $th->getMessage());
        }
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $tim = Issue::find($id);
        // dump($tim);
        if ($tim) {
            $tim->update(['status' => $request->status]);
            return redirect()->back();
        } else {
            return redirect()->back()->with('error', 'Tim tidak ditemukan.');
        }
    }

}
