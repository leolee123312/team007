<?php

namespace App\Listeners;
use App\Mail\UserSubscribedMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\UserSubscribed;
use App\Models\newsletter;
use Illuminate\Support\Facades\Mail;

class EmailOwnerAboutSubscrption
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserSubscribed $event): void
    {

        
        newsletter::insert([
            'email'=>$event->email
        ]);
        Mail::to($request->input('email'))->send(new UserSubscribedMessage());
        dd("Email is Sent.");

    }
}
