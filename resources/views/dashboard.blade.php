@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <h2>Add Quote</h2>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/create') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">First Name</label>
                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                            <label for="lastName" class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('quote') ? ' has-error' : '' }}">
                            <label for="quote" class="col-md-4 control-label">quote</label>
                            <div class="col-md-6">
                                <input id="quote" type="text" class="form-control" name="quote" value="{{ old('quote') }}" required autofocus>
                                @if ($errors->has('quote'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">Date</label>
                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}" required autofocus>
                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                    <h2>Quotes</h2>

                    @if($quotes)
                        @foreach($quotes as $quote)
                            <blockquote>
                                {{ $quote->quote }}
                                <footer>
                                    {{ $quote->firstName }}
                                    {{ $quote->lastName }}
                                    ({{ $quote->date }})
                                </footer>
                                <a href="delete/{{$quote->id }}" class="quoteDelete">Delete</a>
                            </blockquote>
                        @endforeach
                    @else
                        <p>There are no quotes, add some!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
