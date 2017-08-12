@extends('layout')
 @section('content')

    <div class="flex-center position-ref full-height">


        <div class="content">
            <div class=" title m-b-md">
                Results
            </div>

            
            @if(count($shows))
            <ul>
            @foreach ($shows as $show)
                <li>{{ $show["name"] }}&nbsp;&nbsp;&nbsp;{{ $show["score"] }}</li>
            @endforeach
            </ul>
            @else
            <p>No results have been found</p>
            @endif

            <form action="search" method="get">
                <input class="input" type="text" placeholder="Search Again" name="search">
                <input class="submit" type="submit" text="GO">
            </form>

            <div class="links m-t-md">
                <a  href='{!! url('/'); !!}'>Home</a>
            </div>

        </div>
    </div>

@stop