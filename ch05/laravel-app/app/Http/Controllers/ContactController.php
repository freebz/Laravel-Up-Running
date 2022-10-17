<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show($contactId)
    {
        return view('contacts.show')
            ->with('contact', Contact::findOrFail($contactId));
    }

    public function update(Contact $contact, Request $request)
    {
        $contact->update($request->all());
    }

    public function create(Request $request) {
        Contact::create($request->only('name', 'email'));
    }

    public function firstOrCreate() {
        $contact = Contact::firstOrCreate(['email' => 'luis.ramos@myacme.com']);
    }

    public function firstOrNew() {
        $contact = Contact::firstOrNew(['email' => 'luis.ramos@myacme.com']);
    }

    public function delete() {
        $contact = Contact::find(5);
        $contact->delete();

        Contact::destroy(1);
        // 또는
        Contact::destroy([1, 5, 7]);

        Contact::where('updated_at', '<', now()->subYear())->delete();
    }

    public function restore() {
        $contact->resotre();

        // 또는
        
        Contact::onlyTrashed()->where('vip', true)->resotre();
    }

    public function forceDelete() {
        $contact->forceDelete();

        // 또는

        Contact::onlyTrashed()->forceDelete();
    }

    public function scope() {
        $activeVips = Contact::activeVips()->get();
        $friends = Contact::status('friend')->get();
        $activeOrVips = Contact::active()->orWhere()->vip()->get();
    }

    public function withoutGlobalScope() {
        $allContacts = Contact::withoutGlobalScope('active')->get();

        Contact::withoutGlobalScope(ActiveScope::class)->get();
        
        Contact::withoutGlobalScope([ActiveScope::class, VipScope::class])->get();

        Contact::withoutGlobalScope()->get();
    }
}
