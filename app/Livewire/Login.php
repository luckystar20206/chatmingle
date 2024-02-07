<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

#[Title('Login')]
class Login extends Component
{
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
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }


    public function login()
    {
        $validated = $this->validate();
        $authenticate = Auth::attempt($validated);
        if ($authenticate) {
            session()->flash('toast_success', 'Login Successfully');
            return $this->redirect('/counter', navigate: true);
        }
        return $this->redirect('/login', navigate: true);
    }

    public function render()
    {
        return view('livewire.login');
    }
}
