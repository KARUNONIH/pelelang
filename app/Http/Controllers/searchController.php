<?php

namespace App\Http\Controllers;

use App\Models\itemModel;
use Illuminate\Http\Request;
use Carbon\Carbon;

class searchController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $data = itemModel::where('nama', 'LIKE', '%'.$search.'%')->where('complete_at', '>=', Carbon::now('Asia/Jakarta'))->take(3)->get();
        return response()->json($data);

    }
}
