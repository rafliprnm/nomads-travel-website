<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\Gallery;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = TravelPackage::with(['galleries'])
                ->where('slug', $slug)
                ->firstOrFail();
        return view('pages.detail',[
            'item' => $item
        ]);
    }
}
