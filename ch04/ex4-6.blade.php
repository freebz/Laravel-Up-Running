<!-- 예제 4-6 @while과 @endwhile -->

@while ($item = array_pop($items))
    {{ $item->orSomething() }}<br>
@endwhile
