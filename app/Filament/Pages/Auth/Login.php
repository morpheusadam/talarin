<?php

namespace App\Filament\Pages\Auth;

use App\Http\Controllers\AuthHelper;
use Filament\Pages\Auth\Login as BaseAuth;
use Filament\Forms\Form;
use Filament\Forms;
use Illuminate\Support\Facades\Auth;

class Login extends BaseAuth
{
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->email(),
                Forms\Components\TextInput::make('password')
                    ->label('Password')
                    ->required()
                    ->password(),
                // Add a submit button if needed
            ]);
    }

    public function login(array $data)
    {
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            $user = Auth::user();
            $authHelper = new AuthHelper();
            $role = $authHelper->WhatsRole($user);

            switch ($role) {
                case 'admin':
                    return redirect()->intended('http://talarintheme.local/admin');
                case 'vendor':
                    return redirect()->intended('http://talarintheme.local/vendor');
                case 'client':
                    return redirect()->intended('http://talarintheme.local/client');
                default:
                    // Handle case where no role is found, if necessary
                    break;
            }
        }

        // Authentication failed...
        session()->flash('error', 'Invalid credentials.');
    }
}
