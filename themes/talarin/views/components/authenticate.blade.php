<div>
    <div style="background-image: url('{{ asset('talarin/img/background/wedding-back.jpg') }}'); background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: center; align-items: center;">
        <div class="form-box" style="border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 10px; padding: 20px; width: 400px; background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px);"> <!-- شیشه‌ای کردن فرم -->

            <!-- Flash Messages -->
            @if (session()->has('message'))
                <div class="alert alert-success mt-3" role="alert" id="flash-message">
                    {{ session('message') }}
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger mt-3" role="alert" id="flash-error">
                    {{ session('error') }}
                </div>
            @endif

            @if ($isLoggedIn)
                <!-- Logged In Message -->
                <div class="alert alert-info mt-3" role="alert">
                    شما قبلاً وارد شده‌اید. برای خروج دکمه زیر را بزنید.
                </div>
                <button wire:click="logout" class="btn btn-danger">خروج</button>
            @else
                <!-- Conditional Rendering of Forms -->
                @if ($showRegister)
                    <!-- Registration Form -->
                    <form wire:submit.prevent="Register">
                        <div class="mb-3">
                            <label for="name" class="form-label">نام</label>
                            <input type="text" class="form-control" id="name" wire:model="name" required>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">ایمیل</label>
                            <input type="email" class="form-control" id="email" wire:model="email" required>
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">رمز عبور</label>
                            <input type="password" class="form-control" id="password" wire:model="password" required>
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">تأیید رمز عبور</label>
                            <input type="password" class="form-control" id="password_confirmation" wire:model="password_confirmation" required>
                            @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">ثبت نام</button>

                        <div class="mt-3">
                            <p>قبلاً ثبت نام کرده‌اید؟ <a href="#" wire:click.prevent="$set('showRegister', false)">به ورود بروید</a></p>
                        </div>
                    </form>
                @else
                    <!-- Login Form -->
                    <form wire:submit.prevent="login" class="mt-4">
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">ایمیل</label>
                            <input type="email" class="form-control" id="loginEmail" wire:model="loginEmail" required>
                            @error('loginEmail') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">رمز عبور</label>
                            <input type="password" class="form-control" id="loginPassword" wire:model="loginPassword" required>
                            @error('loginPassword') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-success">ورود</button>

                        <div class="mt-3">
                            <p>میخواهید ثبت نام کنید؟ <a href="#" wire:click.prevent="$set('showRegister', true)">به ثبت نام بروید</a></p>
                        </div>
                    </form>
                @endif
            @endif
        </div> <!-- Closing the form box -->
    </div>

</div>
