<section>
    <div class="form-box">
        <div class="form-value">
            {{-- <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="inputbox">
                    <!-- <ion-icon name="mail-outline"></ion-icon>  -->
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <!-- Password -->
                <div class="inputbox">
                    <!-- <ion-icon name="mail-outline"></ion-icon>  -->
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required />
                </div>

                <!-- Remember Me -->
                <div style="color: white">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" name="remember">
                        <span>{{ __('Remember me') }}</span>
                    </label>
                </div><br>

                <div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a><br>
                    @endif

                    <button>{{ __('Log in') }}</button>
                </div>
            </form>
        </div>
    </div>
</section>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

section {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;
    background: url("/imgs/a1.jpg") no-repeat;

    background-position: center;
    background-size: cover;
}

.form-box {
    max-width: 500px;
    width: 100%;
    backdrop-filter: blur(10px) brightness(80%);
    padding: 30px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.form-value {
    text-align: center;
}

.inputbox {
    position: relative;
    margin-bottom: 20px;
}

.inputbox label {
    display: block;
    color: #fff;
    font-size: 25px;
    margin-bottom: 5px;
    font-family: roboto;
}

.inputbox input {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: none;
    border-bottom: 2px solid #fff;
    background: transparent;
    color: #fff;
    outline: none;
}



button {
    width: 100%;
    padding: 10px;
    font-size: 18px;
    background:linear-gradient(80deg,rgb(255, 114, 142),rgb(255, 160, 99));
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    transition: background 0.3s ease;
}

a {
    display: block;
    color: white;
    text-decoration: none;
    margin-top: 10px;
    font-size: 22px;
}

a:hover {
    text-decoration: underline;
}
@media screen and (max-width: 480px) {
        .form-box {
            width: 100%;
            border-radius: 0px;
        }
    }

</style>