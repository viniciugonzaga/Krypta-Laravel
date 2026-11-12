<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;

class PageController extends Controller {
    public function services() {
        return view('pages.services');
    }
    public function contact() {
        return view('pages.contact');
    }
    public function storeContact(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'message' => 'required|string'
        ]);
        Contact::create($request->all());
        return back()->with('success', 'Mensagem enviada com sucesso! Nossa equipe responderá em breve.');
    }
}