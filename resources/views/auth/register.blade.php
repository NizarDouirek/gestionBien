<section>
    <div class="form-box">
        <div class="form-value">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="inputbox">
                    <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <label for="name">Name</label>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="inputbox">
                    <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <label for="email">Email</label>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="inputbox">
                    <input id="password" type="password" name="password" required autocomplete="new-password" />
                    <label for="password">Password</label>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="inputbox">
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <label for="password_confirmation">Confirm Password</label>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a><br><br>
                    <button>{{ __('Register') }}</button>
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
    height: 500px;
    padding: 50px;
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
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    color: #fff;
    font-size: 1.3em;
    pointer-events: none;
    transition: 0.5s;
    
}

.inputbox input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1.2em;
    padding: 0 35px 0 5px;
    border-bottom: 1px solid #fff;
}

input:focus~label,
input:valid~label {
    top: -5px;
}

button {
    width: 100%;
        height: 50px; 
        border-radius: 25px;
        background:linear-gradient(80deg,rgb(255, 114, 142),rgb(255, 160, 99));
        border: none;
        outline: none;
        color: white;
        letter-spacing: 0.1cm;
        font-family: roboto;
        cursor: pointer;
        font-size: 1.4em;
        font-weight: 600;
}

a {
    display: block;
    color: rgba(209, 200, 200, 0.691);
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