@section('title')
    Аавторизація
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
        <div class="mb-4 mt-4 text-sm text-gray-600 ">
            {{ __('Забули свій пароль? Нема проблем. Просто повідомте нам свою електронну адресу, і ми надішлемо вам електронною поштою посилання для скидання пароля, за яким ви зможете вибрати новий.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                    <div class="input_block_reset">
                        <div class="label_block">
                            <x-input-label for="email" :value="__('Email')" />
                        </div>
                    <x-text-input id="email" class="block mt-1 w-full input_line" type="email" name="email" :value="old('email')" required autofocus />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="btn_reset_container">
                    <x-primary-button class="button_login">
                        <div class="btn_login">
                            <span>{{ __('Відправити') }}</span>
                        </div>
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
