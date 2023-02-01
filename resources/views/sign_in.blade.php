<!DOCTYPE html>
<html lang="en">
@include("components.theme_color_white")
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ $links['mobileCss'] }}">
    <script src="{{ $links['mobileJs'] }}"></script>
    <title>Ted</title>
</head>
<body>
    <div class="centered display-flex-center">
        <div class="w-100">
            <div>
                <div>
                    @include("components.app_name")
                    <div class="breaker"></div>
                    <span class="slogan">Leading <br> transportation <br> service <br> in <br> Giyani</span>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="input-contain" id="phonenumbercontain">
                <div>
                    <span class="input-disabled input-placeholder" id="phonenumberplaceholder">Phone number</span>
                    <input type="number" name="phonenumber" id="phonenumber" maxlength="13" placeholder="Phone number">
                </div>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-space-between">
                <span>Create an account</span>
                <button class="button-width-auto" onclick="redirect('/home')">
                    <span class="my-font-align ">Continue</span>
                    <span class="material-symbols-sharp">
                    east
                    </span>
                </button>
            </div>
        </div>
    </div>
    <script>
        showHidePlaceHolder(document.querySelector("#phonenumber"), 'phonenumberplaceholder', 'phonenumbercontain');
    </script>
</body>
</html>