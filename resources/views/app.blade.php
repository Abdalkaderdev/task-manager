<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Task Manager</title>
    {{-- Add any additional CSS or meta tags here --}}
</head>
<body>

    <header>
        <h1>Your Task Manager</h1>
        {{-- Add any header content here --}}
    </header>

    <main>
        @yield('content') {{-- This is where the content of each specific view will be injected --}}
    </main>

    <footer>
        {{-- Add any footer content here --}}
    </footer>

    {{-- Add any additional JavaScript or scripts here --}}
</body>
</html>
