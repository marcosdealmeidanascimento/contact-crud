<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateContact;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Contact $contact)
    {
        $contacts = $contact->all();

        return view('contact.index', compact('contacts'));
    }

    public function show(string $id, Contact $contact)
    {
        if (!$contact = $contact->find($id)) {
            return back();
        }

        return view('contact.show', compact('contact'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(StoreUpdateContact $request, Contact $contact)
    {
        $data = $request->validated();
        $contact->create($data);
        return redirect()->route('contact.index');
    }

    public function edit(string $id, Contact $contact)
    {
        if (!$contact = $contact->find($id)) {
            return back();
        }

        return view('contact.edit', compact('contact'));
    }

    public function update(StoreUpdateContact $request, string $id, Contact $contact)
    {
        if (!$contact = $contact->find($id)) {
            return back();
        }

        $data = $request->validated();
        $contact->update($data);
        return redirect()->route('contact.index');
    }

    public function destroy(string $id, Contact $contact)
    {
        if (!$contact = $contact->find($id)) {
            return back();
        }

        $contact->delete();
        return redirect()->route('contact.index');
    }
}
