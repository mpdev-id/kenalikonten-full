<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::where('status','on')->orderby('id','desc')->get();
        return view('BE.dashboard.tim.index',compact('teams'));
    }
    // show modal
    public function edit($id){
        $id = Team::find($id);
      try {
            return response()->json($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    // hidden aja
    public function delete($id){
        $tim = Team::find($id);
        // dump($tim);
        if ($tim) {
            $tim->update(['status' => 'off']);
            return redirect()->back();
        } else {
            // Handle jika ID tidak ditemukan, misalnya dengan menampilkan pesan kesalahan
            return redirect()->back()->with('error', 'Tim tidak ditemukan.');
        }
    }
    
    // create normal
    public function create(Request $request) {
        
        $request->validate([
            'icon' => 'image|max:2048|mimes:jpeg,png,jpg',
            'name' => 'required|max:50',
        ]);
    
        try {
            // $team = new Team;
    
            // if ($request->hasFile('icon')) {
            //     $icon = $request->file('icon');
            //     $path = '/img/teams/'.date('Y').'/'.date('m').'/';
            //     $imageName = 'icon-team' . sha1($icon->getClientOriginalName()) . '.' . $icon->getClientOriginalExtension();
            //     $icon->move(public_path($path), $imageName);
            //     $team->icon =url( $path . $imageName);
            // }
    
            // $team->name        = $request->name;
            // $team->status      = $team->status??'on';
            // // dd($team);
            // $team->save();
    
            // return redirect()
            //     ->back()
            //     ->with('success', 'team berhasil di tambahkan');
            $team = Team::firstOrNew(['id'=>$request->id]);
            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $path = '/img/teams/' . date('Y') . '/' . date('m') . '/';
                $imageName = 'icon-team' . sha1($icon->getClientOriginalName()) . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path($path), $imageName);
                $team->icon = url($path . $imageName);
            }
            $team->name = $request->name;
            $team->status = $team->status ?? 'on';
            $team->save();

            return redirect()
                ->back()
                ->with('success', 'Tim berhasil ditambahkan');

        } catch (\Throwable $th) {
            \Log::error($th);
    
            return redirect()
                ->back()
                ->with('error', 'Error: ' . $th->getMessage());
        }
    }
}
