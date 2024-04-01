<section>
    <div class="form-box">
        <div class="form-value">
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div class="inputbox">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="inputbox">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="inputbox">
                    <label for="password_confirmation">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button>{{ __('Reset Password') }}</button>
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
    font-size: 18px;
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
    background: linear-gradient(80deg, rgb(255, 114, 142), rgb(255, 160, 99));
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    transition: background 0.3s ease;
}

@media screen and (max-width: 480px) {
    .form-box {
        width: 100%;
        border-radius: 0px;
    }
}

</style>