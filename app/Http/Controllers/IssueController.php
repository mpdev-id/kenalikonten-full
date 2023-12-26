<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Http\Requests\StoreIssueRequest;
use App\Http\Requests\UpdateIssueRequest;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sortOrder = $request->query('all-sort', 'asc');
        $semuanya = Issue::query();
        if ($sortOrder == 'asc') {
            $semua = $semuanya->orderBy('created_at', 'asc')->get();
        } else {
            $semua = $semuanya->orderBy('created_at', 'desc')->get();
        }

        $data = [
            'status' => ['validated','not_validate','checking'],
            'semua' => $semua,

        ];
        return view('BE.dashboard.konten.index',compact('data'));
    }

    public function reply(){
        return view('BE.dashboard.konten.reply');
    }

    public function sendReply(Request $request){
        $request->validate([
            'foto' => 'image|max:2048|mimes:jpeg,png,jpg',
            'title' => 'required|max:500',
            'content' => 'required|min:10',
            'status' => 'required',
        ]);
    
        try {
            $team = ::firstOrNew(['name'=>$request->name]);
            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $path = '/img/teams/' . date('Y') . '/' . date('m') . '/';
                $imageName = 'icon-team-' . sha1($icon->getClientOriginalName()) . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path($path), $imageName);
                $team->icon = url($path . $imageName);
            }
            // $team->name  = $request->name;
            $team->title = $request->title;
            $team->link_join = $request->link_join;
            $team->information = $request->information;
            $team->loker_status = 'on';
            $team->save();


            return redirect()
                ->back()
                ->with('success', 'Loker Tim berhasil ditambahkan');

        } catch (\Throwable $th) {
            \Log::error($th);
    
            return redirect()
                ->back()
                ->with('error', 'Error: ' . $th->getMessage());
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
            // Handle jika ID tidak ditemukan, misalnya dengan menampilkan pesan kesalahan
            return redirect()->back()->with('error', 'Tim tidak ditemukan.');
        }
    }

}
