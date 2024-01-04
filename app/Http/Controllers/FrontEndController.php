<?php
namespace App\Http\Controllers;
use App\Models\Issue;
use App\Models\Content;
use App\Models\Donatur;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FrontEndController extends Controller
{
    function index()
    {
        $teams = Team::where('status','on')->where('loker_status','on')->get();
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
            $issue = new Issue();
            if ($request->hasFile('screenshoot1')) {
                $screenshoot1 = $request->file('screenshoot1');
                $path1      = 'img/issue/'.date('Y').'/'.date('m').'/';
                $imageName1 = 'issue-' . sha1($screenshoot1->getClientOriginalName()) . '.' . $screenshoot1->getClientOriginalExtension();
                $screenshoot1->move($path1, $imageName1);
                $issue->screenshoot1 = url($path1 . $imageName1);
            }
            if ($request->hasFile('screenshoot2')) {
                $screenshoot2 = $request->file('screenshoot2');
                $path2      = 'img/issue/'.date('Y').'/'.date('m');
                $imageName2 = 'issue2-' . sha1($screenshoot2->getClientOriginalName()) . '.' . $screenshoot2->getClientOriginalExtension();
                $screenshoot2->move($path2, $imageName2);
                $issue->screenshoot2 =url( $path2 . $imageName2);
            }
            $issue->link   = $request->link;
            $issue->detail = $request->detail;
            $issue->email  = $request->email;
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
        $validations = Content::where('public_status','visible')->paginate(6); 
        return view("FE.valid", compact('validations'));
    }
    public function loadMoreValidations(Request $request)
    {
        $page = $request->get('page', 1);
        $validations = Content::where('public_status','visible')->paginate(3, ['*'], 'page', $page);
        return view('FE.load-more', compact('validations'));
    }  
    public function cariValidasi(Request $request)
        {
            $search = $request->search;
            if (!empty($search)) {
                $validations = Content::orWhere('title', 'LIKE', '%' . $search . '%')
                    ->orWhere('status', 'LIKE', '%' . $search . '%')
                    ->orWhere('content', 'LIKE', '%' . $search . '%')
                    ->orWhere('public_status','visible')
                    ->get();
            } else {
                $validations = Content::where('public_status','visible')->paginate(6);
            }
            return view('FE.load-more', compact('validations'));
        }
    public function content($slug)
    {
        $content = Content::where('public_status','visible')->where('slug',  $slug)->first();
        return view("FE.content", compact('content'));
    }
    public function donatur()
    {
        $donaturs = Donatur::orderby('created_at','desc')->get();
        return view("FE.donatur",compact('donaturs'));
    }
    public function team()
    {
        $teams = team::get();
        return view("FE.team",compact('teams'));
    }
}