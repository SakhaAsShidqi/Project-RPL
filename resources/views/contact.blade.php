<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<style>
    
</style>
<body>
<div class="contact_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Contact Us</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="map_container">
                    <div class="map">
                        <iframe src="https://maps.google.com/maps?q=bogor&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="360" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form>
                    <input type="text" placeholder="Your Name">
                    <input type="email" placeholder="Your Email">
                    <input type="text" class="message-box" placeholder="Message">
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
