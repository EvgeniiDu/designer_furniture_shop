<div>
    <div class="auth_header">
        <div class="header_block">
            <div class="block">
                <img src="{{asset('assets/images/arrow_icon.png')}}" alt="">
                <span>Персональні дані</span>
            </div>
        </div>
    </div>
    <div class="_container profile_main_container">
        <div class="profile_data_block">
            <div class="menu_block">
                <div class="line_name">
                    <img src="{{ asset('assets/images/icon_profile.png') }}" alt="" class="icon_profile">
                    <span>{{ Auth::user()->name }} {{ Auth::user()->lastname }}</span>
                </div>
                <div class="nav_block">
                    <ul class="nav_items">
                        <li class="nav_item">
                            <img src="{{ asset('assets/images/icon_u.png') }}" alt="" class="icon_profile">
                            <span>Персональні дані</span>
                        </li>
                        <li class="mt-2 nav_item">
                            <img src="{{ asset('assets/images/icon_heart.png') }}" alt="" class="icon_profile">
                            <a href=""><span>Список обраного</span></a>
                        </li>
                        <li class="mt-2 nav_item">
                            <img src="{{ asset('assets/images/icon_folder.png') }}" alt="" class="icon_profile">
                            <a href=""><span>Ваші замовлення</span></a>
                        </li>
                        <li class="mt-5 nav_item exit">
                            <div>
                                <img src="{{ asset('assets/images/icon_exit.png') }}" alt="" class="icon_profile">
                            </div>
                            <div class="form_exit">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="/logout"
                                       onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Вихід') }}
                                    </a>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="info_block">
                <div class="line_header">
                    <span>Персональні дані</span>
                </div>
                <form wire:submit.prevent="editProfile">
                    <div class="input_block_profile">
                        <div class="input_item">
                            <div class="label_name">
                                <label for="lastname">Прізвище</label>
                            </div>
                            <input id="lastname" class="block mt-1 w-full input_line_profile" type="text" name="lastname"   wire:model.lazy="lastname" />
                            @error('lastname') <p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="input_item">
                            <div class="label_name">
                                <label for="name">Ім'я</label>
                            </div>
                            <input id="name" class="block mt-1 w-full input_line_profile" type="text" name="name" value="{{ Auth::user()->name }}"  wire:model.lazy="name"/>
                            @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="input_block_profile">
                        <div class="input_item">
                            <div class="label_name">
                                <label for="email">Email</label>
                            </div>
                            <input id="email" class="block mt-1 w-full input_line_profile" type="text" name="email" value="{{ Auth::user()->email }}"  readonly/>
                        </div>
                        <div class="input_item">
                            <div class="label_name">
                                <label for="phone">Телефон</label>
                            </div>
                            <input id="phone" class="block mt-1 w-full input_line_profile" type="text" name="phone" value="{{ Auth::user()->phone }}" wire:model.lazy="phone"/>
                            @error('phone') <p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="btn_save_edit">
                        <input type="submit" value="Зберегти">
                    </div>
                </form>
            </div>
        </div>
        <div class="logo_block_profile">
            <div class="logo_row_make">
                <img src="{{asset('assets/images/logo/m.png')}}" alt="">
                <img class="logo_text" src="{{asset('assets/images/logo/ake.png')}}" alt="">
            </div>
            <div class="logo_row_unique">
                <img src="{{asset('assets/images/logo/u.png')}}" alt="">
                <img class="logo_text" src="{{asset('assets/images/logo/nique.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
