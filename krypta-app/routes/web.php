<?php
use App\Http\Controllers\PlanController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    $plans = \App\Models\Plan::all();
    $testimonials = \App\Models\Testimonial::all();
    return view('welcome', compact('plans', 'testimonials'));
})->name('home');

// Páginas Públicas
Route::get('/servicos', [PageController::class, 'services'])->name('services');
Route::get('/contatos', [PageController::class, 'contact'])->name('contact');
Route::post('/contatos', [PageController::class, 'storeContact'])->name('contact.store');

// Área Restrita (Middleware)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        $plans = \App\Models\Plan::all();
        return view('dashboard', compact('plans'));
    })->name('dashboard');

    Route::resource('plans', PlanController::class);
    Route::resource('testimonials', TestimonialController::class); // Novo CRUD
});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

require __DIR__.'/auth.php';