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
            'images' => GalleryImage::filter(request(['cateID','styleID','calliName','sort']))->paginate(30)->appends(request()->query()),
            'categories' => CalligraphyCategory::all(),
            'styles' => CalligraphyStyle::filter(request(['cateID']))->get(),
            'currentStyle' => CalligraphyStyle::find(request()->styleID)->style_name ?? '',
            'currentCategory' => CalligraphyCategory::find(request()->cateID)->category_name ?? ''
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
            'calligraphy' => $calligraphy,
            'calligraphies' => Calligraphy::where('style_id',$calligraphy->style_id)->inRandomOrder()->limit(6)->get()
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
