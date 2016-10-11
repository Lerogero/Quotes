@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <blockquote>
                {{ $quote->quote }}
                <footer>
                    {{ $quote->firstName }}
                    {{ $quote->lastName }}
                    ({{ $quote->date }})
                </footer>
            </blockquote>
        </div>
    </div>
@endsection