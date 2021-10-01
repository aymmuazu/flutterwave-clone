<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Flutterwave</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <h3>Buy Movie Tickets N500.00</h3>
        <form method="POST" action="{{ route('pay') }}" id="paymentForm">
            {{ csrf_field() }}

            <input name="name" placeholder="Name" />
            <input name="email" type="email" placeholder="Your Email" />
            <input name="phone" type="tel" placeholder="Phone number" />

            <input type="submit" value="Buy" />
        </form>
    </body>
</html>
