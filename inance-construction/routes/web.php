<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StaffController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/password', [PasswordController::class, 'update'])->name('password.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/services/residential', 'services.residential')->name('services.residential');
Route::view('/services/commercial', 'services.commercial')->name('services.commercial');
Route::view('/services/renovation', 'services.renovation')->name('services.renovation');
Route::view('/services/industrial', 'services.industrial')->name('services.industrial');
Route::view('/services/project-management', 'services.project-management')->name('services.project-management');
Route::view('/services/green-building', 'services.green-building')->name('services.green-building');
Route::view('/gallery', 'gallery')->name('gallery');
Route::view('/certifications', 'certifications')->name('certifications');
Route::view('/design-upload', 'design-upload')->name('design.upload');
Route::post('/design-upload', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'project_type' => 'required|string',
        'description' => 'required|string',
        'budget' => 'required|string',
        'design_files.*' => 'file|mimes:pdf,jpg,jpeg,png,dwg|max:10240'
    ]);
    
    // Store design submission in database
    \App\Models\ContactMessage::create([
        'name' => $request->name,
        'email' => $request->email,
        'project_type' => $request->project_type,
        'message' => $request->description . ' | Budget: ' . $request->budget
    ]);
    
    return redirect()->route('design.upload')->with('success', 'Design submitted successfully! We will contact you soon.');
})->name('design.submit');
Route::view('/contact', 'contact')->name('contact');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

Route::post('/admin/login', function (\Illuminate\Http\Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);
    
    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        if ($user->is_admin) {
            return redirect()->route('admin.dashboard');
        }
        Auth::logout();
        return back()->withErrors(['email' => 'Access denied. Admin privileges required.']);
    }
    
    return back()->withErrors(['email' => 'Invalid credentials.']);
})->name('admin.login.submit');

Route::get('/admin/register', function () {
    return view('admin.register');
})->name('admin.register');

Route::post('/admin/register', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = \App\Models\User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => \Hash::make($request->password),
        'is_admin' => true,
    ]);

    Auth::login($user);
    return redirect()->route('admin.dashboard');
})->name('admin.register.submit');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/messages', function () {
        $messages = \App\Models\ContactMessage::latest()->paginate(20);
        return view('admin.messages', compact('messages'));
    })->name('messages');
    Route::get('/users', function () {
        $users = \App\Models\User::latest()->paginate(20);
        return view('admin.users', compact('users'));
    })->name('users');
    Route::get('/projects', function () {
        return view('admin.projects');
    })->name('projects');
    Route::get('/clients', function () {
        return view('admin.clients');
    })->name('clients');
});
