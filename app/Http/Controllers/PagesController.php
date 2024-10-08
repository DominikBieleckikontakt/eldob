<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Realization;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $services = Service::with('translations')->orderBy('id', 'asc')->get();
        $realizations = Realization::with('translations')->orderBy('id', 'asc')->get();
        return view('home', compact('services', 'realizations'));
    }

    public function offers() {
        return view('offer.index');
    }

    public function offer($id) {
        $service = Service::with('translations')->find($id);
        return view('offer.show', compact('service'));
    }
}
