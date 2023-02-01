<!DOCTYPE html>
<html lang="en">
@include("components.theme_color_dark")
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ $links['mobileCss'] }}">
    <script src="{{ $links['mobileJs'] }}"></script>
    <title>Ted</title>
</head>
<body>
    <div class="header-welcome">
        @include("components.app_name")
    </div>
    <div class="vert-flex">
        <div class="vert-flex-content">
            <div class="container">
                <div class="display-flex-align p-relative">
                    <!-- <span class="material-symbols-sharp prices-icon">
                    swap_horiz
                    </span> -->
                    <div class="w-100 padding price-day">
                        <span>Day</span><br>
                        <span class="heavy">R 50.00</span><br>
                        <span class="text-small">06:00 AM - 20:00 PM</span>
                    </div>
                    <div class="w-100 padding price-night">
                        <span>Night</span><br>
                        <span class="heavy">R 100.00</span><br>
                        <span class="text-small">20:00 PM - 06:00 AM</span>
                    </div>
                </div>
            </div>
            <div class="welcome-bottom container">
                <div class="text-align-center">
                    <span>Featured in</span>
                </div>
                <div class="breaker"></div>
                <div class="featured display-flex-space-between">
                    <div class="text-align-center">
                        <span class="material-symbols-sharp">
                        route
                        </span><br>
                        <span>Rides</span>
                    </div>
                    <div class="text-align-center">
                        <span class="material-symbols-sharp">
                        inventory_2
                        </span><br>
                        <span>Deliveries</span>
                    </div>
                    <div class="text-align-center">
                        <span class="material-symbols-sharp">
                        merge_type
                        </span><br>
                        <span>Outskirts</span>
                    </div>
                    <div class="text-align-center">
                        <span class="material-symbols-sharp">
                        business_center
                        </span><br>
                        <span>Staff</span>
                    </div>
                </div>
                <div class="breaker"></div>
                <div class="display-flex-space-between mid-gap">
                    <div>
                        <span class="text-mid">Get started</span><br>
                        <span class="text-small">Get a discount on your first ride on the App</span>
                    </div>
                    <span class="material-symbols-sharp action-icon" onclick="redirect('/mapbox')">
                        east
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>