<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/about', 'about')->name('about');
Route::view('/projects', 'projects')->name('projects');
Route::view('/skills', 'skills')->name('skills');
Route::view('/experience', 'experience')->name('experience');
Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:100'],
        'email' => ['required', 'email', 'max:150'],
        'phone' => ['nullable', 'string', 'max:30'],
        'message' => ['required', 'string', 'max:3000'],
    ]);

    $phone = $validated['phone'] ?: 'Not provided';
    $body = '
        <h2>New Portfolio Contact Form Submission</h2>
        <p><strong>Name:</strong> ' . e($validated['name']) . '</p>
        <p><strong>Email:</strong> ' . e($validated['email']) . '</p>
        <p><strong>Phone:</strong> ' . e($phone) . '</p>
        <p><strong>Message:</strong></p>
        <p>' . nl2br(e($validated['message'])) . '</p>
    ';

    try {
        Mail::html($body, function ($message) use ($validated) {
            $message
                ->to('ashwanikumar6266@gmail.com')
                ->replyTo($validated['email'], $validated['name'])
                ->subject('New portfolio enquiry from ' . $validated['name']);
        });
    } catch (Throwable $exception) {
        report($exception);

        return redirect()
            ->to(route('contact') . '#contact')
            ->withInput()
            ->with('contact_error', 'Your message could not be sent right now. Please email me directly at ashwanikumar6266@gmail.com.');
    }

    return redirect()
        ->to(route('contact') . '#contact')
        ->with('contact_success', 'Thank you. Your message has been sent successfully.');
})->name('contact.send');
