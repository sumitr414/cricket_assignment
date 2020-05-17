@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header-top"><h2>Matches</h2></div>
                    <table class="table table-hover">
                        <thead>
                        <tr class="card-header">
                            <th >#</th>
                            <th >Match Date</th>
                            <th>Team A </th>
                            <th>VS </th>
                            <th>Team B </th>
                            <th >Winner</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($matches->toArray())
                            @foreach($matches as $key=>$match)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{date('d M Y',strtotime($match->matchDate)) ??""}}</td>
                                    <td><img src="{{ asset('images/'.$match->teamADetails->logoUri ??"") }}" height="20px" class="img-class" > {{$match->teamADetails->name ??''}}  </td>
                                    <td> <span class="gap">Vs</span></td>
                                    <td><img src="{{ asset('images/'.$match->teamBDetails->logoUri ??'') }}" height="20px" class="img-class" > {{$match->teamBDetails->name ??""}}</td>
                                    <td><img src="{{ asset('images/'.$match->winnerTeam->logoUri ??'') }}" height="20px" class="img-class" > {{$match->winnerTeam->name ??""}}</td>
                                </tr>
                          @endforeach
                        @else
                            <tr><td align="center" colspan="6">Match Not Found</td></tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

