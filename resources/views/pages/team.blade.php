@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header-top"><h2>Teams</h2></div>
                    <table class="table table-hover">
                        <thead>
                        <tr class="card-header">
                            <th >#</th>
                            <th >Name</th>
                            <th >Flag</th>
                            <th >Club</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if($teams->toArray())
                              @foreach($teams as $key=>$team)
                                    <tr>
                                        <td scope="row">{{$key+1}}</td>
                                         <td><a href="{{ route('players',[base64_encode($team->id)])}}">{{$team->name ??''}}</a></td>
                                         <td><a href="{{ route('players',[base64_encode($team->id)])}}"><img src="{{asset('images/'.$team->logoUri ??'')}}" height="20px" class="img-class"></a></td>
                                        <td><a href="{{ route('players',[base64_encode($team->id)])}}">{{$team->club ??''}}</a></td>
                                    </tr>
                              @endforeach
                            @else
                                <tr><td align="center" colspan="4">Team Not Found</td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
