@extends('layout')
@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Search TV Shows with TV Maze
            </div>

            <form action="search" method="get">
                <label class="label" for="search">Search:</label>
                <input class="input" type="text" placeholder="Look for a TV show" name="search">
                <input class="submit" type="submit" text="GO">
            </form>

            @if($error)
                {{$error}}
            @endif

        </div>
    </div>
    
@stop