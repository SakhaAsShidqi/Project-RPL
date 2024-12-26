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
<div class="service_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Our Services</h2>
            <p>Here are the services we offer to our clients.</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('images/s1.png') }}" alt="Service 1">
                    </div>
                    <div class="detail-box">
                        <h5>Service 1</h5>
                        <p>Description of Service 1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('images/s2.png') }}" alt="Service 2">
                    </div>
                    <div class="detail-box">
                        <h5>Service 2</h5>
                        <p>Description of Service 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('images/s3.png') }}" alt="Service 3">
                    </div>
                    <div class="detail-box">
                        <h5>Service 3</h5>
                        <p>Description of Service 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>




