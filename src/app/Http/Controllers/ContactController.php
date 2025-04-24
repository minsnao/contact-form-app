<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\RegisterRequest;
use Laravel\Fortify\Contracts\RegisterResponse;

class ContactController extends Controller
{
    public function form(Request $request)
    {
        if ($request->isMethod('post')) 
        {
            return redirect()->route('contact.form')->withInput();
        }
        return view('form');
    }
    public function send(ContactRequest $request)
    {
        Contact::create([
            'category_id' => $request->input('category'),
            'last_name' => $request->input('last-name'),
            'first_name' => $request->input('first-name'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel1') . '-' . $request->input('tel2') . '-' . $request->input('tel3'),
            'address' => $request->input('address'),
            'building' => $request->input('building'),
            'detail' => $request->input('detail')
        ]);
        session(['thanks_access' => true]);

        \Log::info('Method: ' . request()->method());
        return redirect()->route('contact.thanks');
    }

    public function confirm(Request $request)
    {
        $inputs = $request->all();
        return view('confirm', ['inputs' => $inputs]);
    }
}
