<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GeneratePseudoAndPasswordForUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $user;
    protected $newPassword;

    public function __construct(User $user, $newPassword = null)
    {
        $this->user = $user;
        $this->newPassword = $newPassword;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.generateUser')
            ->with([
                'object' => 'Nouvelle identifiant',
                'nom' => $this->user->nom,
                'prenom' => $this->user->prenom,
                'newPseudo' => $this->user->pseudo,
                'newPassword' => $this->newPassword
            ]);
    }
}
