@extends('layouts.app')

@section ('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4">
                                {{--@foreach ($users as $user) {--}}
                                {{--{{$user->avatar}}--}}
                                {{--}--}}
                                {{--@endforeach--}}
                            </div>
                            <div class="col-md-4">
                                @foreach ($users as $user) {
                                {{$user->name}}
                                {{$user->email}}
                                }
                                @endforeach

                            </div>
                            <div class="col-md-4">
                                @foreach ($users as $user) {
                                {{$user->localisation}}
                                }
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection
