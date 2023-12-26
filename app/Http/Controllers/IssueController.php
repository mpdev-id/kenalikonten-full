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
    public function index()
    {
        $data = [
            'status' => ['validated','not_validate','checking'],
            'semua' => Issue::get()

        ];
        return view('BE.dashboard.konten.index',compact('data'));
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
