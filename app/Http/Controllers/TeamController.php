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
        $teams = Team::orderby('id','desc')->get();
        return view('BE.dashboard.tim.index',compact('teams'));
    }
    public function delete($id){
        $id = Team::find($id);
        dd($id);
        try {
            $id->update('status','off');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function create(Request $request) {
        
        $request->validate([
            'icon' => 'required|image|max:2048|mimes:jpeg,png,jpg',
            'name' => 'required|max:50',
        ]);
    
        try {
            $team = new Team;
    
            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $path = '/img/teams/'.date('Y').'/'.date('m').'/';
                $imageName = 'icon-team' . sha1($icon->getClientOriginalName()) . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path($path), $imageName);
                $team->icon =url( $path . $imageName);
            }
    
            $team->name        = $request->name;
            $team->status      = 'off';
            // dd($team);
            $team->save();
    
            return redirect()
                ->back()
                ->with('success', 'team berhasil di tambahkan');
        } catch (\Throwable $th) {
            \Log::error($th);
    
            return redirect()
                ->back()
                ->with('error', 'Error: ' . $th->getMessage());
        }
    }
}
