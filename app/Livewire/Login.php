<?php

namespace App\Livewire;

use Exception;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

#[Title('Login')]
class Login extends Component
{
    use LivewireAlert;

    #[Validate]
    /**
     * Define public variables
     *
     */
    public $username, $password;


    /**
     * Method rules for validation
     *
     * @return void
     */
    public function rules()
    {
        return [
            'username' => 'required|string|max:255|alpha_dash',
            'password' => ['required', Password::defaults()],
        ];
    }


    /**
     * Method login user with livewire alert
     *
     * @return void
     */
    public function login()
    {
        try {
            $validated = $this->validate();
            $autenticate = Auth::attempt(['username' => $validated['username'], 'password' => $validated['password']]);

            if ($autenticate) {
                $this->flash('success', 'Login Success !', [
                    'position' => 'top-end',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
                ]);

                $this->redirectRoute('forum');
            } else {
                $this->alert('error', 'Login Error !', [
                    'text' => 'The Credentials are incorrect',
                    'position' => 'center',
                    'showConfirmButton' => true,
                    'toast' => false,
                    'timer' => false,
                    'timerProgressBar' => false,
                ]);
            }
        } catch (ValidationException $e) {
            $this->alert('error', 'Login Error!', [
                'text' => $e->validator->errors()->first(),
                'position' => 'center',
                'showConfirmButton' => true,
                'toast' => false,
                'timer' => false,
                'timerProgressBar' => false,
            ]);
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
