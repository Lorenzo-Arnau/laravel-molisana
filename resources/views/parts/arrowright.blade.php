<span class="arrow-right">
    @if (($idProduct) == count($array))
      <a href="/products/1">
    @else
      <a href="/products/{{$idProduct + 1}}">
    @endif
      <i class="fas fa-chevron-right"></i>
    </a></span>