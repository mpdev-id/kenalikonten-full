<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FrontEndController extends Controller
{
    function index()
    {
        $teams = Team::where('status','on')->get();

        return view("FE.index", [
            'teams' => $teams,
        ]);
    }
    public function upload(Request $request)
    {
        $request->validate([
            'screenshoot1' => 'required|image|max:2048|mimes:jpeg,png,jpg',
            'screenshoot2' => 'image|max:2048|mimes:jpeg,png,jpg',
            'link' => 'url',
            'detail' => 'string',
            'email' => 'required|email',
        ]);
    
        try {
            $issue = new Issue;
    
            if ($request->hasFile('screenshoot1')) {
                $screenshoot1 = $request->file('screenshoot1');
                $path1 = '/img/issue/'.date('Y').'/'.date('m');
                $imageName1 = 'issue-' . sha1($screenshoot1->getClientOriginalName()) . '.' . $screenshoot1->getClientOriginalExtension();
                $screenshoot1->move(public_path($path1), $imageName1);
                $issue->screenshoot1 = url($path1 . $imageName1);
            }
            if ($request->hasFile('screenshoot2')) {
                $screenshoot2 = $request->file('screenshoot2');
                $path2 = '/img/issue/'.date('Y').'/'.date('m');
                $imageName2 = 'issue2-' . sha1($screenshoot2->getClientOriginalName()) . '.' . $screenshoot2->getClientOriginalExtension();
                $screenshoot2->move(public_path($path2), $imageName2);
                $issue->screenshoot2 =url( $path2 . $imageName2);
            }
    
            $issue->link = $request->link;
            $issue->detail = $request->detail;
            $issue->email = $request->email;
            $issue->status = 'not_validate';
    
            // Save the issue after setting all the fields
            $issue->save();
    
            return redirect()
                ->back()
                ->with('success', 'Issue uploaded successfully');
        } catch (\Throwable $th) {
            // Log the error for debugging purposes
            \Log::error($th);
    
            return redirect()
                ->back()
                ->with('error', 'Error: ' . $th->getMessage());
        }
    }
    function valid()
    {
        return view("FE.valid");
    }
    function content()
    {
        return view("FE.content");
    }
    function donatur()
    {
        return view("FE.donatur");
    }
    function team()
    {
        return view("FE.team");
    }
}
