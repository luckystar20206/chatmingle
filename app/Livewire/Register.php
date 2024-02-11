<?php

namespace App\Livewire;


use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Validation\ValidationException;


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

    /**
     * Method for register user with livewire alert
     *
     * @return void
     */
    public function register()
    {
        try {
            $validated = $this->validate();
            $user = User::create([
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);

            $this->flash('success', 'Register Success !', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);

            $this->redirect('/login');
        } catch (ValidationException $e) {
            $this->alert('error', 'Register Error!', [
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
        return view('livewire.register');
    }
}
