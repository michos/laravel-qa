@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="d-flex align-items-center">
                            <h2>{{$question->title}}</h2>

                            <div class="ml-auto">
                                <a href="{{route('questions.index')}}" class="btn btn-outline-primary">Back to Questions</a>
                             </div>
                        </div>
                    </div>
                    <hr>
                    <div class="media">
                        <div class="d-flex flex-column vote-controls">
                            <a href="" title="this Question is Useful" class="vote-up">
                                <i class="fas fa-caret-up fa-3x"></i>
                            </a>
                            <span class="votes-count">
                                123
                            </span>
                            <a href="" title="this Question is not Useful" class="vote-down off">
                                    <i class="fas fa-caret-down fa-3x"></i>
                            </a>
                            <a href="" title="Mark as Favourite" class="favourite mt-2 favourited">
                                    <i class="fas fa-star fa-2x"></i>
                            </a>
                            <span class="favourites-count">
                                112
                            </span>
                        </div>
                        <div class="media-body">
                            {!! $question->body_html !!}
                            <div class="float-right">
                                <span class="text-muted">
                                    Asked {{$question->created_date}}
                                </span>
                                <div class="media mt-2">
                                    <a href="{{ $question->user->url }}" class="pr-2">
                                    <img src="{{ $question->user->avatar}}" alt="">
                                    </a>
                                    <div class="media-body mt-1">
                                    <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>{{$question->answers_count ." " . str_plural('Answer',$question->answers_count )}}</h2>
                    </div>
                    <hr>
                    @foreach ($question->answers as $answer)
                        <div class="media">
                                <div class="d-flex flex-column vote-controls">
                                        <a href="" title="this Answer is Useful" class="vote-up">
                                            <i class="fas fa-caret-up fa-3x"></i>
                                        </a>
                                        <span class="votes-count">
                                            123
                                        </span>
                                        <a href="" title="this Answer is not Useful" class="vote-down off">
                                                <i class="fas fa-caret-down fa-3x"></i>
                                        </a>
                                        <a href="" title="Mark answers as Best Answer" class="vote-accepted mt-2">
                                                <i class="fas fa-check fa-2x"></i>
                                        </a>

                                    </div>
                            <div class="media-body">
                                {!!$answer->body_html!!}
                                <hr>
                                <div class="float-right">
                                        <span class="text-muted mt-4" >
                                            Answered {{$answer->created_date}}
                                        </span>
                                        <div class="media mt-2">
                                            <a href="{{ $answer->user->url }}" class="pr-2">
                                            <img src="{{ $answer->user->avatar}}" alt="">
                                            </a>
                                            <div class="media-body mt-1">
                                            <a href="{{$answer->user->url}}">{{$answer->user->name}}</a>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
