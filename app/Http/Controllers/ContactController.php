<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        // You can fetch any necessary data here if needed  
        // For example, you might want to fetch existing contacts or other related data
        $contactData = Contact::all();
        return view('contact.index', compact('contactData'));
    }

   


    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'subject' => 'required',
        'message' => 'required',
        'phone' => 'required',
    ]);

    $contact = Contact::create($request->all());

    Mail::to('admin@example.com')->send(new ContactFormSubmitted($contact));

    // Return different responses for AJAX and normal form
   return response()->json([
        'success' => true,
        'message' => 'Thank you! We will get back to you soon.'
    ]);
}

    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Contact deleted successfully!');
    }

}
