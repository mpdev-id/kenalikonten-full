<?php
namespace App\Http\Controllers;
use App\Models\Content;
use App\Http\Requests\StoreContentRequest;
use App\Http\Requests\UpdateContentRequest;
use Illuminate\Http\Request;
class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sortOrder = $request->query('sort', 'desc'); // default to ascending if not provided
        $query     = Content::where('slug','!=','NULL');
        if ($sortOrder == 'asc') {
            $posts = $query->orderBy('created_at', 'asc')->get();
        } else {
            $posts = $query->orderBy('created_at', 'desc')->get();
        }
            return view('BE.dashboard.post.index',compact('posts'));
    }
    public function status($id){
        $post = Content::find($id);
        if (!$post) {
            throw new \Exception("Content not found for ID: {$id}");
        }
        try {
            // Toggle the status
            $post->public_status = $post->public_status == 'visible' ? 'invisible' : 'visible';
            // Save the changes
            $post->save();
            return redirect()->back()->with('status','berhasil mengubah status3');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function delete($id){
        $post = Content::find($id);
        if (!$post) {
            throw new \Exception("Content not found for ID: {$id}");
        }
        try {
            // Toggle the status
            // $post->public_status = $post->public_status == 'visible' ? 'invisible' : 'visible';
            // Save the changes
            $post->delete();
            return redirect()->back()->with('status','berhasil menghapus postingan');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
