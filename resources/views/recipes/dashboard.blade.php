@extends('layouts.app')

@section('content')
    <div class="container content">
        {{ $pagination }}

    @foreach($recipes as $recipe)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ url('/recipes/' . $recipe->getIdentifier()) }}"><h5>{{ $recipe->getTitle() }}</h5></a>
                </div>
                <div class="panel-body">
                    {{ $recipe->getDescription() }}
                </div>

                <div class="panel-footer"></div>
            </div>
        @endforeach

        {{ $pagination }}

    </div>
@endsection
