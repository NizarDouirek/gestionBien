<section>
    <div class="form-box">
        <div class="form-value">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div class="inputbox">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex justify-end mt-4">
                    <button class="btn-confirm">{{ __('Confirm') }}</button>
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

.btn-confirm {
    width: auto;
    padding: 10px 20px;
    font-size: 18px;
    background: linear-gradient(80deg, rgb(255, 114, 142), rgb(255, 160, 99));
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    transition: background 0.3s ease;
}

.btn-confirm:hover {
    background: linear-gradient(80deg, rgb(255, 160, 99), rgb(255, 114, 142));
}

@media screen and (max-width: 480px) {
    .form-box {
        width: 100%;
        border-radius: 0px;
    }
}

</style>