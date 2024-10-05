@props(['left'=>null, 'right'=>null, 'message'=>''])

<th scope="col" class="px-6 py-3 {{$left ? 'rounded-tl-lg' : ''}} {{$right ? 'rounded-tr-lg' : ''}}">
    {{$message}}
</th>