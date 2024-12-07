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

<!-- Profile and Logout Menus, aligned in a row -->
<div class="user-menu flex items-center space-x-4 ml-auto">

<!-- Conditionally display auth options -->
@if(Auth::check())
        <!-- Profile Menu -->
        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
            <div class="user-name">
                <a href="{{ route('profile.edit') }}" >{{ Auth::user()->name }}</a>
            </div>
        </button>

        <!-- Logout Menu -->
        <div >
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>

        @else
            <!-- Login Button -->
            <a href="{{ route('login') }}" class="px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                Login
            </a>
        @endif

    </div>
            
</header>

<style>
.user-menu {
  position: relative;
  display: flex;  /* Use flexbox for horizontal alignment */
  align-items: center;  /* Align items vertically centered */
  justify-content: flex-end;  /* Push items to the rightmost edge */
}

.user-menu button,
.user-menu a {
  margin-right: 16px;  /* Space between profile button and logout/login button */
  color: #ff6666;
}

.logout{
    width: 70px;
}

a{
    color: #ff6666;
    text-decoration: none;
}
</style>