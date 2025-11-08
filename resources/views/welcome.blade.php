<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f8f8f8;
        }
        .container {
            text-align: center;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Your Laravel Application!</h1>
        <p>This is a sample welcome page using Laravel Blade.</p>

        {{-- Example of displaying a variable passed from a route or controller --}}
        @if(isset($name))
            <p>Hello, {{ $name }}!</p>
        @else
            <p>Feel free to explore.</p>
        @endif

        {{-- Example of a simple loop --}}
        @php
            $items = ['Item 1', 'Item 2', 'Item 3'];
        @endphp
        @if(!empty($items))
            <h2>Some Items:</h2>
            <ul>
                @foreach($items as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>