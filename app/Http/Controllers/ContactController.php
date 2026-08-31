<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        try {
            // Utiliser 'emails.contact' (le vrai template d'email)
            Mail::send('emails.contact', $validated, function ($mail) use ($validated) {
                $mail->to('moiseslanwa25@gmail.com')
                     ->subject('Nouveau message de contact - ' . $validated['subject'])
                     ->replyTo($validated['email'], $validated['name']);
            });

            return redirect()->route('contact')
            
                ->with('success', '✅ Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.');

        } catch (\Exception $e) {
            return redirect()->route('contact')
                ->with('error', '❌ Une erreur est survenue : ' . $e->getMessage());
        }
    }
}