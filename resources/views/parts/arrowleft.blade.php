<span class="arrow-left">
    @if (($idProduct) == 1)
      <a href="/products/{{count($array)}}">
    @else
      <a href="/products/{{$idProduct - 1}}">
    @endif
      <i class="fas fa-chevron-left"></i>
    </a></span>