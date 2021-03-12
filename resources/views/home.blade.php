<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Molisana: pasta semole e farine di qualità</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/it/thumb/4/41/Logo_PASTA_LA_MOLISANA.png/1200px-Logo_PASTA_LA_MOLISANA.png">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
<body>
  <div id="root">
    <header>
      @include('parts.header')
    </header>
    <main>
      <div class="section">
        <div class="subsec lunga">
          <h2>LE LUNGHE</h2>
          @foreach ($array as $key => $item)
          @if ($item["tipo"] == "lunga")
          <div class="product-box">
              <a href="/products/{{$key + 1}}"><img src="{{$item["src"]}}" alt=""></a>
          </div>        
          @endif
          @endforeach 
        </div>
        <div class="subsec corta">
          <h2>LE CORTE</h2>
          @foreach ($array as $key => $item)
          @if ($item["tipo"] == "corta")
          <div class="product-box">
              <a href="/products/{{$key + 1}}"><img src="{{$item["src"]}}" alt=""></a>
          </div>        
          @endif
          @endforeach 
        </div>
        <div class="subsec cortissima">
          <h2>LE CORTISSIME</h2>
          @foreach ($array as $key => $item)
          @if ($item["tipo"] == "cortissima")
          <div class="product-box">
              <a href="/products/{{$key + 1}}"><img src="{{$item["src"]}}" alt=""></a>
          </div>        
          @endif
        @endforeach 
        </div>
      </div>
    </main>
   <footer>
    @include('parts.footer')
   </footer>
 </div>
</body>
</html>