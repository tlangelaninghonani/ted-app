<!DOCTYPE html>
<html lang="en">
@include("components.theme_color")
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ $links['mobileCss'] }}">
    <script src="{{ $links['mobileJs'] }}"></script>
    <title>Ted</title>
</head>
<body>
    <div class="home-design-top"></div>
    <div class="home-design-left"></div>
    <div class="welcome-ini-design display-flex-center">
        <!-- <img src="/background.svg" class="home-design-background" alt=""> -->
        <div>
            @include("components.app_name")
            <div class="breaker"></div>
            <span class="slogan">Leading <br> transportation <br> service <br> in <br> Giyani</span>
        </div>
    </div>
    <div class="home-design-right"></div>
    <div class="home-design-bottom"></div>
    <script>
        setTimeout(() => {
            redirect("/sign_in")
        }, 5000);
    </script>
</body>
</html>