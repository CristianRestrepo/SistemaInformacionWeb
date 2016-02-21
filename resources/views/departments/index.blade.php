@foreach($departments as $d)
    {!!$d->name  !!}
    <br>
    {!! $d->description !!}
@endforeach