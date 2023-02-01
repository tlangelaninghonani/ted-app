<!DOCTYPE html>
<html lang="en">
@include('components.theme_color')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ $links['mobileCss'] }}">
    <script src="{{ $links['mobileJs'] }}"></script>
    <title>Ted</title>
</head>
<style>
    #container {
      width: 600px;
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }
 
    .circle {
    border-radius: 50%;
    background-color: #E50914;
    width: 48px;
    height: 48px;
    position: absolute;
    opacity: 0;
    animation: scaleIn 2s infinite;
    }

@keyframes scaleIn {
  from {
    transform: scale(.5);
    opacity: 1;
  }
  to {
    transform: scale(2.5);
    opacity: 0;
  }
}
  </style>
<body>
    <div id="container">
        <div class="circle"></div>
    </div>
</body>
</html>