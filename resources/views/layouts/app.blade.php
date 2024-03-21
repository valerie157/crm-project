<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Include any CSS files -->
</head>
<body>
    <header>
        <!-- Header content goes here -->
    </header>

    <nav>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('accounts.index') }}">Accounts</a></li>
        <li><a href="{{ route('contacts.index') }}">Contacts</a></li>
        <li><a href="{{ route('deals.index') }}">Deals</a></li>
        <li><a href="{{ route('activities.index') }}">Activities</a></li>
        
    </ul>
</nav>


    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content goes here -->
    </footer>

    <!-- Include any JavaScript files -->
</body>
</html>
