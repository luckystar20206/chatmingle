<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Validate;

#[Title('Register')]
class Register extends Component
{

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
        $validated = $this->validate();
        $user = User::create($validated);

        session()->flash('toast_success', 'Register Successfully');
        return $this->redirect('/counter', navigate: true);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
