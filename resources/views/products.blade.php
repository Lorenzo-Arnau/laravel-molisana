<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Molisana</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/it/thumb/4/41/Logo_PASTA_LA_MOLISANA.png/1200px-Logo_PASTA_LA_MOLISANA.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css" integrity="sha512-QfDd74mlg8afgSqm3Vq2Q65e9b3xMhJB4GZ9OcHDVy1hZ6pqBJPWWnMsKDXM7NINoKqJANNGBuVRIpIJ5dogfA==" crossorigin="anonymous" />
</head>
<body>
  <div id="root">
    <header>
      @include('parts.header')
    </header>
    <main>
      <div class="products-wrapper">

      @include('parts.arrowleft')

      <img src="{{ $array[$idProduct - 1]['src-h']}}" alt="">
      <img src="{{ $array[$idProduct - 1]['src-p']}}" alt="">
      <span class="titolo-prodotto">{{ $array[$idProduct - 1]['titolo']}}</span>

      @include('parts.arrowright')

      <div class="descrizione">{!!$array[$idProduct - 1]['descrizione']!!}</div>
      </div>
    </main>
   <footer>
    @include('parts.footer')
   </footer>
 </div>
</body>
</html>
