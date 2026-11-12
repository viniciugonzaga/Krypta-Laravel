<?php
namespace App\Http\Controllers;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller {
    public function index() { return view('testimonials.index', ['testimonials' => Testimonial::all()]); }
    public function create() { return view('testimonials.create'); }
    public function store(Request $request) {
        $request->validate(['name'=>'required', 'role'=>'required', 'content'=>'required']);
        Testimonial::create($request->all());
        return redirect()->route('testimonials.index')->with('success', 'Depoimento criado!');
    }
    public function show(Testimonial $testimonial) { return view('testimonials.show', compact('testimonial')); }
    public function edit(Testimonial $testimonial) { return view('testimonials.edit', compact('testimonial')); }
    public function update(Request $request, Testimonial $testimonial) {
        $request->validate(['name'=>'required', 'role'=>'required', 'content'=>'required']);
        $testimonial->update($request->all());
        return redirect()->route('testimonials.index')->with('success', 'Depoimento atualizado!');
    }
    public function destroy(Testimonial $testimonial) {
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Depoimento excluído!');
    }
}