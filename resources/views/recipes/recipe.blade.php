@extends('layouts.app')

@section('content')
    <div class="container content">
        @if(is_null($recipe))
            <div>No recipes right now</div>
        @else
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5 class="text-center">{{ $recipe->getTitle() }}</h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-7">
                        @foreach($recipe->getIngredients() as $ingredient)
                            <div class="col-xs-4">Name: {{ $ingredient['title'] }}</div>
                            <div class="col-xs-4">Quantity: {{ $ingredient['quantity'] }}</div>
                            <div class="col-xs-4">Price: {{ $ingredient['price'] }}</div>
                        @endforeach
                        </div>
                        <div class="col-xs-5">
                            {{ $recipe->getDescription() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer"></div>
        @endif
    </div>
@endsection