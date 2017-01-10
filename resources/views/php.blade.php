@extends('layouts.Lmain')
@section('content')
<div style='float:left;color:white;margin-top:15%;margin-left:20%'>
    @foreach($phpProjects as $phpProj)
    <div style="clear:left;float:left;margin-bottom:50px">
        <a href="{{$phpProj->href}}" target="_blank">
            <div style='clear:left;float:left;font-size:200%;border-bottom:1px double #00CED1;margin-bottom:10px;color:#00CED1;width:200px'>
                {{$phpProj->name}}
            </div>
            <div style='clear:left;float:left;background-image:url("{{asset($phpProj->img)}}");width:500px;height:300px;background-size: cover;border:1px double white'>

            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection