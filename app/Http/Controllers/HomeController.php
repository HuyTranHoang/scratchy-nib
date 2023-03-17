<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailPostRequest;
use App\Http\Requests\FeedbackPostRequest;
use App\Http\Requests\FeedbackPutRequest;
use App\Mail\Contact;
use App\Models\Calligraphy;
use App\Models\CalligraphyCategory;
use App\Models\CalligraphyStyle;
use App\Models\Feedback;
use App\Models\GalleryImage;
use App\Models\User;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'categories' => CalligraphyCategory::all()
        ]);
    }

    public function category(Request $request)
    {
        if ($request->cateID){
            $currentCategory = CalligraphyCategory::findOrFail($request->cateID);
        }

        if ($request->styleID){
            $currentStyle = CalligraphyStyle::findOrFail($request->styleID);
        }

        $perPage = 16;
        $page = request()->input('page', 1);
        $totalItems = Calligraphy::filter(request(['calligraphyName','cateID','styleID']))->count();
        $totalPages = ceil($totalItems / $perPage);

        if ($page > $totalPages && !request()->calligraphyName) {
            Alert::error('Oops', "Look like the page you try to enter don't exist anymore, redirect to first page")->buttonsStyling(false)->autoClose(2500);
            return redirect(route('home.category',['cateID'=> $currentCategory ?? false,'page'=> 1]));
        }

        return view('home.category', [
            'categories' => CalligraphyCategory::all(),
            'styles' => CalligraphyStyle::filter(request(['cateID']))->get(),
            'currentCategory' => $currentCategory ?? '',
            'currentStyle' => $currentStyle ?? '',
            'calligraphies' => Calligraphy::filter(request(['calligraphyName','cateID','styleID']))->paginate($perPage)->appends($request->query()),
            'randomImage' => CalligraphyStyle::inRandomOrder()->first()->style_image
        ]);
    }

    public function gallery(Request $request)
    {
        if ($request->cateID){
            $currentCategory = CalligraphyCategory::findOrFail($request->cateID);
        }

        if ($request->styleID){
            $currentStyle = CalligraphyStyle::findOrFail($request->styleID);
        }

        $perPage = 30;
        $page = request()->input('page', 1);
        $totalItems = GalleryImage::filter(request(['cateID','styleID','calliName']))->count();
        $totalPages = ceil($totalItems / $perPage);

        if ($page > $totalPages && !request()->calliName) {
            Alert::error('Oops', "Look like the page you try to enter don't exist anymore, redirect to first page")->buttonsStyling(false)->autoClose(2500);
            return redirect(route('home.gallery',['cateID'=> $currentCategory ?? false,'page'=> 1]));
        }

        return view('home.gallery', [
            'images' => GalleryImage::filter(request(['cateID','styleID','calliName','sort']))->paginate($perPage)->appends($request->query()),
            'categories' => CalligraphyCategory::all(),
            'styles' => CalligraphyStyle::filter(request(['cateID']))->get(),
            'currentStyle' => $currentStyle->style_name ?? '',
            'currentCategory' => $currentCategory->category_name ?? ''
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
            'calligraphies' => Calligraphy::where('style_id',$calligraphy->style_id)->inRandomOrder()->limit(6)->get(),
            'feedback' => Feedback::where('calligraphy_id',$calligraphy->calligraphy_id)
                ->orderBy('created_at','DESC')->paginate(4),
            'editfeedback' => Feedback::find(request()->feedback),
        ]);
    }

    public function storeFeedback(FeedbackPostRequest $request)
    {
        $validated = $request->validated();
        Feedback::create($validated);
        Alert::toast('Submit feedback succesfully!', 'success')->autoClose(1500);
        return redirect()->back();
    }

    public function updateFeedback(FeedbackPutRequest $request, Feedback $feedback)
    {
        if ($feedback->user_id != auth()->user()->user_id) {
            Alert::toast("Looks like you're trying to edit someone else's feedback!!", 'error')->autoClose(1500);
            return redirect(route('home.detail',request()->calligraphy_id));
        }
        $validated = $request->validated();
        $feedback->update($validated);
        Alert::toast('Update feedback succesfully!', 'success')->autoClose(1500);
        return redirect(route('home.detail',request()->calligraphy_id));
    }

    public function deleteFeedback(Request $request)
    {
        $FeedbackID = $request->feedback_id;
        $feedback = Feedback::findOrFail($FeedbackID);
        if ($feedback->user_id != auth()->user()->user_id && auth()->user()->role_id != 1) {
            Alert::toast("Looks like you're trying to delete someone else's feedback!!", 'error')->autoClose(1500);
            return redirect(route('home.detail',request()->calligraphy_id));
        }
        $feedback->delete();
        Alert::toast('Delete feedback succesfully!', 'success')->autoClose(1500);
        return redirect()->back();
    }

    public function sendEmail(EmailPostRequest $request)
    {
        $contactEmail = ENV('MAIL_FROM_ADDRESS');
        $validated = $request->validated();
        Mail::to($contactEmail)->send(new Contact($validated));
        Alert::toast('Your email has been sent successfully!', 'success')->buttonsStyling(false)->autoClose(1500);

        return redirect()->back();
    }

    public function subscribe(Request $request) {
        $validated = $request->validate([
            'name' => 'string|max:50|required',
            'email' => 'email|max:50|unique:newsletter_subscribers,email|required'
        ]);

        $validated['created_at'] = Carbon::now();
        $validated['updated_at'] = Carbon::now();

        DB::table('newsletter_subscribers')->insert($validated);

        Alert::toast('Your email has been subscribed to our new newsletter!', 'success')->buttonsStyling(false)->autoClose(1500);
        return redirect()->back();

    }

    public function sitemap() {
        return view('home.sitemap');
    }

}
