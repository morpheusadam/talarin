<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Auth extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $loginEmail;
    public $loginPassword;
    public $showRegister = false;
    public $isLoggedIn = false;

    public function mount()
   {
       // Check if the JWT token exists in the session
       if (session()->has('jwt_token')) {
           $this->isLoggedIn = true; // Set logged in state
       }
    }

    public function Register()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Prepare the data for the API request
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->password_confirmation,
        ];
        // Create a Guzzle client
        $client = new Client();

        try {
            // Send the POST request to the API
            $response = $client->post('http://talarin.local/api/register', [
                'json' => $data,
            ]);

            $responseBody = json_decode($response->getBody(), true);
            // Use PHPFlasher to flash the success message
            flash()->success(
                $responseBody['message'] ?? 'Registration successful!',
                ['timeout' => 3000, 'position' => 'bottom-left']
            );
            $this->reset(); // Reset form fields after successful registration
            $this->showRegister = false; // Switch to login form
        } catch (RequestException $e) {
            // Handle the error
            $responseBody = json_decode($e->getResponse()->getBody(), true);
            $errorMessage = $responseBody['message'] ?? 'Registration failed.';

            // Use PHPFlasher to flash the error message
            flash()->error($errorMessage, [
                'timeout' => 3000,
                'position' => 'bottom-left',
            ]);
        }
    }

    public function login()
    {
        $this->validate([
            'loginEmail' => 'required|string|email|max:255',
            'loginPassword' => 'required|string',
        ]);

        // Prepare the data for the API request
        $data = [
            'email' => $this->loginEmail,
            'password' => $this->loginPassword,
        ];
        // Create a Guzzle client
        $client = new Client();

        try {
            // Send the POST request to the API
            $response = $client->post('http://talarin.local/api/login', [
                'json' => $data,
            ]);

            $responseBody = json_decode($response->getBody(), true);
            // Use PHPFlasher to flash the success message
            flash()->success($responseBody['message'] ?? 'Login successful!', [
                'timeout' => 3000,
                'position' => 'bottom-left',
            ]);
            // Store the JWT token in session
            session(['jwt_token' => $responseBody['token']]); // Store the token in session
            //       dd(session()->all());

            $this->isLoggedIn = true; // Set logged in state
            return redirect()->to('/home'); // Redirect to the main page after successful login
        } catch (RequestException $e) {
            // Handle the error
            $responseBody = json_decode($e->getResponse()->getBody(), true);
            $errorMessage = $responseBody['message'] ?? 'Login failed.';

            // Use PHPFlasher to flash the error message
            flash()->error($errorMessage, [
                'timeout' => 3000,
                'position' => 'bottom-left',
            ]);
        }
    }

    public function logout()
    {
        // Clear the JWT token from the session
        session()->forget('jwt_token');
        $this->isLoggedIn = false; // Reset logged in state
        flash()->success('Logout successful!', [
            'timeout' => 3000,
            'position' => 'bottom-left',
        ]);
        return redirect()->to('/'); // Redirect to the home page or login page
    }

    public function render()
    {
        return view('pages.auth');
    }
}
