<div {!! $attributes !!}>
  @if (!empty($value))
    {!! HTML::mailto($value, $value) !!}
  @endif
  {!! $append !!}

  @if($small)
    <small class="clearfix">{!! $small !!}</small>
  @endif
</div>
