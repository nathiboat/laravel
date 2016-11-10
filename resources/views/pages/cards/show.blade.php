@extends('base.base')

@section('content')
    <h1>{{ $card->title }}</h1>
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <ul class="list-group">
                @foreach($card->notes as $note)
                    <li class="list-group-item">
                        {{ $note->body }}
                        <a href="#" class="pull-right">{{ $note->user->name }}</a>
                    </li>
                @endforeach
            </ul>
            <hr>
            <h3>Add a new Node</h3>
            <form method="POST" action="/cards/{{ $card->id }}/notes">
                {{ csrf_field() }}

                <div class="form-group">
                   <textarea name="body" id="" class="form-control">{{ old('body') }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Node</button>
                </div>
            </form>
            @if(count($errors))
                <ul>
                    @foreach($errors->all as $error )
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@stop