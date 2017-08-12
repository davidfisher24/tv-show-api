@extends('layout')
@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Search TV Shows with TV Maze:
            </div>

            <form action="search" method="get">
                <label for="search">Search:</label>
                <input type="text" placeholder="Look for a TV show" name="search">
                <input type="submit" text="GO">
            </form>

        </div>
    </div>
    
@stop