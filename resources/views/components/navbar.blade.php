<nav style="background-color:rgb(29, 75, 55); padding: 15px 25px; display: flex; justify-content: space-between; align-items: center; border-radius: 8px;">
    <a href="/" style="display: inline-block; padding: 10px 10px;">
        <img src="{{ asset('images/logo.png') }}" alt="Farm2Plate Logo" style="max-width: 50px; height: auto; border-radius: 8px;">
    </a>
    <div>
        <a href="{{ url('/landing-page') }}" style="color: #FFFFFF; padding: 12px 18px; text-decoration: none; font-size: 18px; font-weight: 600; margin-right: 10px; border-radius: 6px; transition: background-color 0.3s ease; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">Home</a>
        <a href="{{ route('about') }}" style="color: #FFFFFF; padding: 12px 18px; text-decoration: none; font-size: 18px; font-weight: 600; margin-right: 10px; border-radius: 6px; transition: background-color 0.3s ease; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">About</a>
        <a href="{{ route('recipes.index') }}" style="color: #FFFFFF; padding: 12px 18px; text-decoration: none; font-size: 18px; font-weight: 600; margin-right: 10px; border-radius: 6px; transition: background-color 0.3s ease; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">Recipes</a>
        <a href="{{ route('community.index') }}" style="color: #FFFFFF; padding: 12px 18px; text-decoration: none; font-size: 18px; font-weight: 600; margin-right: 10px; border-radius: 6px; transition: background-color 0.3s ease; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">The Community</a>
    </div>
    <div style="display: flex; align-items: center;">
        <!-- Cart Icon and Count -->
        <a href="{{ Auth::check() ? route('cart.index') : route('login') }}" 
           style="color: #FFFFFF; padding: 12px 18px; text-decoration: none; font-size: 18px; font-weight: 600; margin-right: 10px; border-radius: 6px; display: flex; align-items: center; position: relative;">
            <i class="fa fa-shopping-cart" style="font-size: 24px;"></i>
            <span class="cart-count" style="position: absolute; top: -8px; right: -8px; background-color: red; color: white; font-size: 14px; padding: 5px 10px; border-radius: 50%;">{{ session('cart') ? count(session('cart')) : 0 }}</span>
        </a>

        @if(Auth::check())
            <!-- User Name and Dropdown -->
            <div style="position: relative;">
                <span style="color: white; font-size: 18px; font-weight: 600; margin-right: 10px; cursor: pointer;" onclick="toggleDropdown()">
                    Hello, {{ Auth::user()->name }}
                </span>
                <!-- Dropdown Menu -->
                <div id="user-dropdown" style="display: none; position: absolute; top: 30px; right: 0; background-color: rgb(32, 83, 124); border-radius: 6px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" style="color: white; padding: 12px 18px; text-decoration: none; font-size: 18px; font-weight: 600; border-radius: 6px; background-color: rgb(32, 83, 124); transition: background-color 0.3s ease; width: 100%; box-sizing: border-box;">Logout</button>
                    </form>
                </div>
            </div>
        @else
            <a href="/login" style="color: white; padding: 12px 18px; text-decoration: none; font-size: 18px; font-weight: 600; margin-right: 10px; border-radius: 6px; background-color: #6C9A8B; transition: background-color 0.3s ease; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">Login</a>
        @endif
    </div>
</nav>

<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('user-dropdown');
        dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
    }
</script>
