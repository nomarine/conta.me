@foreach($records as $bill => $info)
    <p>
        Record #{{$bill}}<br>
        Description: {{$info->description}}<br>
        Cost: {{$info->total_value}}<br>
        Category: {{$info->title}}<br>
    </p>
@endforeach

<p>Total de registros: {{ $total }}</p>