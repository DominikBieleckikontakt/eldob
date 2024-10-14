<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Service;
use App\Models\TextPage;
use App\Mail\ContactMail;
use App\Models\Reference;
use App\Models\Realization;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function home() {
        $services = Service::with('translations')->orderBy('id', 'asc')->get();
        $realizations = Realization::with('translations')->orderBy('id', 'asc')->get();
        $slides = Slide::with('translations')->orderBy('id', 'asc')->get();
        return view('home', compact('services', 'realizations', 'slides'));
    }

    public function offers() {
        $services = Service::with('translations')->orderBy('id', 'asc')->get();
        return view('offer.index', compact('services'));
    }

    public function offer($lang, $slug) {
        if ($lang == 'pl') {
            $service = Service::where('slug', $slug)->firstOrFail();
        } else {
            $service = Service::whereHas('translations', function($query) use ($slug, $lang) {
                $query->where('column_name', 'slug')
                    ->where('locale', $lang)
                    ->where('value', $slug);
            })->firstOrFail();
        }
        return view('offer.show', compact('service'));
    }

    public function realizations() {
        $realizations = Realization::with('translations')->orderBy('id', 'asc')->get();
        return view('realizations.index', compact('realizations'));
    }

    public function realization($lang, $slug) {
        if ($lang == 'pl') {
            $realization = Realization::where('slug', $slug)->firstOrFail();
        } else {
            $realization = Realization::whereHas('translations', function($query) use ($slug, $lang) {
                $query->where('column_name', 'slug')
                    ->where('locale', $lang)
                    ->where('value', $slug);
            })->firstOrFail();
        }
        $images = json_decode($realization->images);
        return view('realizations.show', compact('realization', 'images'));
    }

    public function page($lang, $slug) {
       if ($lang == 'pl') {
            $page = TextPage::where('slug', $slug)->firstOrFail();
        } else {
            $page = TextPage::whereHas('translations', function($query) use ($slug, $lang) {
                $query->where('column_name', 'slug')
                    ->where('locale', $lang)
                    ->where('value', $slug);
            })->firstOrFail();
        }

        return view('page', compact('page'));
    }

    public function references() {
        $references = Reference::with('translations')->orderBy('id', 'asc')->get();
        return view('references', compact('references'));
    }

    public function contact() {
        return view('contact');
    }

    public function sendContact(Request $request) {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        try{
        Mail::to('kontakt@eldob.pl')->send(new ContactMail($data));
        // Komunikat sukcesu po wysłaniu wiadomości
        return redirect()->back()->with('success', __('messages.message_sent_success'));
            } catch(\Exception $e) {
                // Komunikat błędu
                return redirect()->back()->with('error', __('messages.message_sent_error'));
            }
    }

}
