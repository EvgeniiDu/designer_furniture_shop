@section('title')
    Відновлення пароля
@endsection

<x-guest-layout>
    <div class="auth_header">
        <div class="header_block">
            <div class="block">
                <img src="{{asset('assets/images/arrow_icon.png')}}" alt="">
                <span>Відновлення пароля</span>
            </div>
        </div>
    </div>
    <div class="_container auth_container_reset">
        <div class="reset_block">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                        <div class="input_block_reset">
                                <div class="label_block">
                                     <x-input-label for="email" :value="__('Email')" />
                                </div>
                            <x-text-input id="email" class="block mt-1 w-full input_line" type="email" name="email" :value="old('email', $request->email)" required autofocus />

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                    <!-- Password -->
                    <div class="mt-4 input_block_reset">
                        <div class="label_block">
                            <x-input-label for="password" :value="__('Пароль')" />
                        </div>
                        <x-text-input id="password" class="block mt-1 w-full input_line" type="password" name="password" required />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4 input_block_reset">
                        <div class="label_block">
                            <x-input-label for="password_confirmation" :value="__('Повторіть пароль')" />
                        </div>
                        <x-text-input id="password_confirmation" class="block mt-1 w-full input_line"
                                            type="password"
                                            name="password_confirmation" required />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="btn_reset_container">
                        <x-primary-button class="button_login">
                            <div class="btn_login">
                                <span>{{ __('Cкинути пароль') }}</span>
                            </div>
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
</x-guest-layout>
