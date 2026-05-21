<div class="alert alert-{{ $type}}" role="alert">
 
  @isset($tittle)
      <h4 class="alert-heading">{{ $tittle }}</h4>
  <hr>
  @endisset
  @if ($slot->isEmpty())
      <p>This is default Contant,if slot is empty</p>
  @else
      {{$slot}}
  @endif
</div>