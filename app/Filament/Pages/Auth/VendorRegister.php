<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Auth\Register as BaseRegister;
use Filament\Http\Responses\Auth\Contracts\RegistrationResponse;
use Filament\Notifications\Notification;
use App\Models\User;
use App\Models\Role;

class VendorRegister extends BaseRegister
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->reactive()
                ->afterStateUpdated(fn($state) => ($this->name = $state)),
            TextInput::make('email')
                ->required()
                ->email()
                ->maxLength(255)
                ->reactive()
                ->afterStateUpdated(fn($state) => ($this->email = $state)),
            $this->getPasswordFormComponent()
                ->reactive()
                ->afterStateUpdated(fn($state) => ($this->password = $state)),
            $this->getPasswordConfirmationFormComponent()
                ->reactive()
                ->afterStateUpdated(fn($state) => ($this->password_confirmation = $state)),
        ]);
    }

    public function register(): ?RegistrationResponse
    {
        $vendorRoleId = User::getRoleIdByName('vendor');

        // Create the user with the retrieved role ID
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'role_id' => $vendorRoleId, // Assign the role ID directly
        ]);
    
      
        // Notify the user of successful registration
        Notification::make()
            ->title('Registration Successful')
            ->success()
            ->send();
    
        return app(RegistrationResponse::class);
    }
}