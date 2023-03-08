<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailPostRequest;
use App\Mail\Contact;
use App\Models\Calligraphy;
use App\Models\CalligraphyCategory;
use App\Models\CalligraphyStyle;
use App\Models\GalleryImage;
use App\Models\Visitor;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'visitorCount' => Visitor::sum('view')
        ]);
    }

    public function category()
    {
        return view('home.category', [
            'categories' => CalligraphyCategory::all(),
            'styles' => CalligraphyStyle::all()
        ]);
    }

    public function gallery()
    {
        return view('home.gallery', [
            'images' => GalleryImage::all()
        ]);
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function about()
    {
        return view('home.about');
    }

    public function detail(Calligraphy $calligraphy){
        return view('home.detail', [
            'calligraphy' => $calligraphy
        ]);
    }

    public function sendEmail(EmailPostRequest $request)
    {

        $validated = $request->validated();
        Mail::to('huy.th878@aptechlearning.edu.vn')->send(new Contact($validated));

//        Mail::send(new Contact(), compact('validated'), function ($email) use ($validated) {
//            $email->subject($validated['subject']);
//            $email->to('huy.th878@aptechlearning.edu.vn', $validated['name']);
//        });

        Alert::success('Success', 'Your email sent successfully!')->buttonsStyling(false)->autoClose(1500);

        return redirect()->back();
    }

}
