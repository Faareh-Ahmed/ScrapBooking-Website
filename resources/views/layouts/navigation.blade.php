<header>
    <div class="logo">
        <img src="{{ asset('images/Designer.png') }}" alt="logo" />
    </div>
    <!-- Hidden Checkbox Input -->
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <!-- Label for the Checkbox as Hamburger Icon -->
    <label for="nav-toggle" class="nav-toggle-label">
        <span></span>
    </label>
    <!-- Navigation Menu -->
    <nav>
        <ul>
            <li><a href="{{ route('dashboard') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('announcements') }}">Announcements</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li class="color-picker-dropdown">
                <button id="color-picker-btn">
                    🎨 <!-- Color picker icon -->
                </button>
                <!-- Dropdown Content -->
                <div id="color-picker-dropdown" class="dropdown-content"> 
                    <label for="body-color">Body Color:</label>
                    <input type="color" id="body-color" value="#FFF5EE">
                    <label for="footer-color">Footer Color:</label>
                    <input type="color" id="footer-color" value="#953553">
                    <button onclick="applyColors()">Apply</button>
                    <button onclick="resetColors()">Reset</button>
                </div>
            </li>
            <li class="font-style-picker-dropdown">
                <button id="font-style-picker-btn">🖋️</button>
                <div id="font-style-dropdown" class="dropdown-content">
                    <label for="font-style">Font Style:</label>
                    <select id="font-style">
                        <option value="normal">Normal</option>
                        <option value="italic">Italic</option>
                        <option value="bold">Bold</option>
                    </select>

                    <label for="font-color">Font Color:</label>
                    <input type="color" id="font-color" value="#ff6666" />

                    <br>
                    <label for="section-select">Apply to: </label>
                    <select id="section-select">
                        <option value="header">Header</option>
                        <option value="main">Body</option>
                        <option value="footer">Footer</option>
                    </select>

                    <br>
                    <button onclick="applyTextStyle()">Apply</button>
                    <button onclick="resetTextStyle()">Reset</button>
                </div>
            </li>
        </ul>
</nav>

    <!-- Settings Dropdown -->
    <div class="hidden sm:flex sm:items-center sm:ms-6">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    <div>{{ Auth::user()->name }}</div>

                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>
</header>
