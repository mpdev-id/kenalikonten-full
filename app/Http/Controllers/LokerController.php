<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use App\Http\Requests\StoreLokerRequest;
use App\Http\Requests\UpdateLokerRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
         $teams  = Team::where('status','on')->orWhere('loker_status','off')->orderby('name','asc')->get();
         $lokers = Team::where('loker_status','on')->orderby('updated_at','desc')->get();
        // return view('BE.dashboard.tim.index',compact('teams'));
    // }
        return view('BE.dashboard.anggota.loker',compact('lokers','teams'));
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
    
    // create normal
    public function create(Request $request) {
        
        if($request->name){
            $this->delete($request->id);
        };
        
        $request->validate([
            // 'icon' => 'image|max:2048|mimes:jpeg,png,jpg',
            'name'  => 'required|max:50',
            'title' => 'required|max:50',
            'link_join' => 'required|max:550',
            'information' => 'required|max:550',
        ]);
    
        try {
            $team = Team::firstOrNew(['name'=>$request->name]);
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

    
    public function delete($id){
        $tim = Team::find($id);
        // dump($tim);
        if ($tim) {
            $tim->update(['loker_status' => 'off']);
            return redirect()->back();
        } else {
            // Handle jika ID tidak ditemukan, misalnya dengan menampilkan pesan kesalahan
            return redirect()->back()->with('error', 'Tim tidak ditemukan.');
        }
    }

}