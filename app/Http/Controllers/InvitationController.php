<?php

namespace App\Http\Controllers;

use App\Mail\ColocationInvitationMail;
use App\Models\Calocation;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class InvitationController extends Controller
{
    public function sendInvitation(Request $request, Calocation $calocation)
{
    $request->validate([
        'email' => 'required|email',
    ]);

    $invitation = Invitation::create([
        'calocation_id' => $calocation->id,
        'email' => $request->email,
        'token' => Str::uuid(),
        'expires_at' => now()->addDays(3),
    ]);

    Mail::to($request->email)->send(new ColocationInvitationMail($invitation));

    return back()->with('success', 'Invitation envoyée avec succès.');
}


public function show(Invitation $invitation){
   return view('emails.calocationInvitation')->with(['invitation'=>$invitation]);
}

public function accept($token)
{
    $invitation = Invitation::where('token', $token)
        ->whereNull('accepted_at')
        ->where(function ($q) {
            $q->whereNull('expires_at')
              ->orWhere('expires_at', '>', now());
        })
        ->firstOrFail();

    $user = Auth::user();

   
    if ($user->email !== $invitation->email) {
        abort(403, 'Cette invitation ne vous est pas destinée.');
    }

   
   $hasActiveColocation = $user->calocations()
    ->where('calocations.status', 'active')
    ->wherePivotNull('left_at')
    ->exists();

     if ($hasActiveColocation && $user->role !== 'admin') {
       abort(403, 'Vous avez déjà une colocation active.');
    }

    $invitation->calocation->users()->attach($user->id, [
        'type' => 'member',
        'joined_at' => now(),
    ]);

    $invitation->update([
        'accepted_at' => now(),
    ]);

    return redirect()->route('userdashboard')->with('success', 'Invitation acceptée.');
}

public function refuse($token)
{
    $invitation = Invitation::where('token', $token)->firstOrFail();

    $invitation->delete();

    return redirect()->route('colocations.index')->with('info', 'Invitation refusée.');
}
}
