@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h2>
        Train codes ITALO:
    </h2>
    <div>
        <ul>
            @foreach ($trains_italo as $train)
                <li>
                    {{$train->train_code}}
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection