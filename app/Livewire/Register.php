<?php

namespace App\Livewire;


use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Jantinnerezo\LivewireAlert\LivewireAlert;


#[Title('Register')]
class Register extends Component
{
    use LivewireAlert;


    #[Validate]
    /**
     * define public variables
     *
     */
    public $username, $email, $password, $password_confirmation = '';

    /**
     * Method rules for validation
     *
     * @return void
     */
    public function rules()
    {
        return [
            'username' => 'required|string|max:255|alpha_dash',
            'email' =>    'required|unique:users,email|max:255',
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }

    public function register()
    {
        try {
            $validated = $this->validate();
            $user = User::create($validated);

            $this->alert('success', 'Register Success !', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        } catch (ValidationException $e) {
            $this->alert('error', 'Register Error !', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
    }

    public function render()
    {
        return view('livewire.register');
    }
}
