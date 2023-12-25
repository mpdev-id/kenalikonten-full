<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donatur;
class DonaturController extends Controller
{
    public function index(Request $request)
    {
        // $donaturs = Donatur::where('status','on')->orderby('id','desc')->get();
    $sortOrder = $request->query('sort', 'asc'); // default to ascending if not provided

    // Adjust the query based on the sort order
    $query = Donatur::where('status', 'on');

    // If the sort order is 'asc', order by donation_date in ascending order
    // Otherwise, order by donation_date in descending order
    if ($sortOrder == 'asc') {
        $donaturs = $query->orderBy('donation_date', 'asc')->get();
    } else {
        $donaturs = $query->orderBy('donation_date', 'desc')->get();
    }
        return view('BE.dashboard.donatur.index',compact('donaturs'));
    }
 
    public function edit($id){
        $id = Donatur::find($id);
      try {
            return response()->json($id);
        } catch (\Throwable $th) {
            throw $th;
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
    
    // create normal
    public function create(Request $request) {
        // dd($request);
        
        $request->validate([
            'icon' => 'required|image|max:2048|mimes:jpeg,png,jpg',
            'name' => 'required|max:150',
            'donation' => 'required|max:50',
            'donation_date' => 'required|date',
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
            $donatur->donation = $request->donation;
            $donatur->donation_date = $request->donation_date;
            $donatur->status = $donatur->status ?? 'on';
            $donatur->save();
            // dump($donatur);

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
