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
<div class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-box">
                    <img src="{{ asset('images/about-img.jpg') }}" alt="About Us">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <h2>About Us</h2>
                    <p>Welcome to our website. We are dedicated to providing excellent services and building lasting relationships.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>




