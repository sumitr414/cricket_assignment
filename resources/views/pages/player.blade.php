@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header-top"><h2>{{($team->name)?$team->name."'s  Players list":''}}</h2></div>
                    <table class="table table-hover">
                        <thead>
                        <tr class="card-header">
                            <th >#</th>
                            <th >Name</th>
                            <th >Image</th>
                            <th >Jersey No</th>
                            <th >Country</th>
                            <th >Matches</th>
                            <th >Runs</th>
                            <th >Highest Score</th>
                            <th >50s</th>
                            <th >100s</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(($team->players->toArray()))
                            @foreach($team->players as $key=>$player)
                                <tr>
                                    <td >{{$key+1}}</td>
                                    <td> {{$player->name??''}}</td>
                                    <td><img src="{{ asset('images/'.$player->imageUri??'') }}" height="40px" class="img-class" ></td>
                                    <td> {{$player->playerJerseyNo ??''}}</td>
                                    <td> {{$player->country ??''}}</td>
                                    <td> {{$player->matches ??''}}</td>
                                    <td> {{$player->runs ??''}}</td>
                                    <td> {{$player->highestScore ??''}}</td>
                                    <td> {{$player->fifties ??''}}</td>
                                    <td> {{$player->hundreds ??''}}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td align="center" colspan="10">Players Not Found</td></tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
