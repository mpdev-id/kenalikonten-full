<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Team;
use Illuminate\Http\Request;

class MemberController extends Controller
{
      public function index()
        {
            $members = Member::with('team')->get();
            $dropTeams = Team::where('status','on')->get();
        return view('BE.dashboard.anggota.index',compact(['members','dropTeams']));
        }

    // show modal
    public function edit($id){
        $id = Member::find($id);
      try {
            return response()->json($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
 // hidden aja
 public function delete($id){
    $member = Member::find($id);
    // dump($member);
    if ($member) {
        $member->delete();
        return redirect()->back();
    } else {
        // Handle jika ID tidak ditemukan, misalnya dengan menampilkan pesan kesalahan
        return redirect()->back()->with('error', 'Tim tidak ditemukan.');
    }
}


// create normal
public function create(Request $request) {
        
    $request->validate([
        'foto' => 'image|max:2048|mimes:jpeg,png,jpg',
        'name' => 'required|max:50',
        'quote' => 'required|max:80',
        'team_id' => 'required',
    ]);

    try {
        // $team = new Team;

        // if ($request->hasFile('foto')) {
        //     $foto = $request->file('foto');
        //     $path = 'img/teams/'.date('Y').'/'.date('m').'/';
        //     $imageName = 'foto-team' . sha1($foto->getClientOriginalName()) . '.' . $foto->getClientOriginalExtension();
        //     $foto->move(public_path($path), $imageName);
        //     $team->foto =url( $path . $imageName);
        // }

        // $team->name        = $request->name;
        // $team->status      = $team->status??'on';
        // // dd($team);
        // $team->save();

        // return redirect()
        //     ->back()
        //     ->with('success', 'team berhasil di tambahkan');
        $team = Member::firstOrNew(['id'=>$request->id]);
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $path = 'img/members/' . date('Y') . '/' . date('m') . '/';
            $imageName = 'foto-member-' . sha1($foto->getClientOriginalName()) . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path($path), $imageName);
            $team->foto = url($path . $imageName);
        }
        $team->team_id = $request->team_id;
        $team->quote = $request->quote;
        $team->name = $request->name;
        $team->save();

        return redirect()
            ->back()
            ->with('success', 'Member berhasil ditambahkan');

    } catch (\Throwable $th) {
        \Log::error($th);

        return redirect()
            ->back()
            ->with('error', 'Error: ' . $th->getMessage());
    }
}
    
}
