<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index() {
        $data = [
            'kontenmasuk' => Issue::count(),
            'validated'   => Issue::where('status','!=','not_validate')->count(),
            'notreply'    => Issue::where('status','not_validate')->count(),
            'issues'      => Issue::take(7)->get(),  // Corrected this line
            'bulan'       => Issue::pluck('created_at')->map(function ($item, $key) {
                                return $item->format('M');  // Extract month from created_at
                            })->unique()->values()->all(),  // Get unique months
            'tahun'       => Issue::pluck('created_at')->map(function ($item, $key) {
                                return $item->format('Y');  // Extract year from created_at
                            })->unique()->values()->all()  // Get unique years
        ];
        return view('BE.dashboard.index',compact('data'));
    }
}
