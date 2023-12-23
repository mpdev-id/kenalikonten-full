<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donatur;
class DonaturController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donaturs = Donatur::where('status','on')->orderby('id','desc')->get();
        return view('BE.dashboard.donatur.index',compact('donaturs'));
    }
    // show modal
    public function edit($id){
        $id = Donatur::find($id);
      try {
            return response()->json($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    // hidden aja
    public function delete($id){
        $tim = Donatur::find($id);
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
            $donatur = Donatur::firstOrNew(['id'=>$request->id]);
            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $path = '/img/Donaturs/' . date('Y') . '/' . date('m') . '/';
                $imageName = 'icon-Donatur-' . sha1($icon->getClientOriginalName()) . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path($path), $imageName);
                $donatur->icon = url($path . $imageName);
            }
            $donatur->name = $request->name;
            $donatur->status = $donatur->status ?? 'on';
            $donatur->save();

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

    public function delete($id){
        $tim = Donatur::find($id);
        // dump($tim);
        if ($tim) {
            $tim->update(['status' => 'off']);
            return redirect()->back();
        } else {
            // Handle jika ID tidak ditemukan, misalnya dengan menampilkan pesan kesalahan
            return redirect()->back()->with('error', 'Tim tidak ditemukan.');
        }
    }

}
