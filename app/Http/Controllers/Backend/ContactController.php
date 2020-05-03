<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::select('name', 'email', 'message')->orderBy('name', 'asc')
            ->paginate(5);

        return view('backend.contact.manage', compact('contact'));
    }

    public function create()
    {
        return view('backend.contact.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:20',
        ]);
        $contact = null;
        try {
            $name     = $request->name;
            $contact = Contact::create([
                'name' => $name,
                'email' => $email,
                'message' => $message,
            ]);
        } catch (Exception $exception) {
            $contact = false;
        }

        if ($contact) {
            setMessage('success', 'Yay! A category has been successfully created.');
        } else {
            setMessage('danger', 'Oops! Unable to create a new category.');
        }
        return redirect()->back();
    }
}
