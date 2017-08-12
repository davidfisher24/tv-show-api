@extends('layout')
 @section('content')

    <div class="flex-center position-ref full-height">


        <div class="content">
            <div class=" title m-b-md">
                Results:
            </div>

            
            @if(count($shows))
            <ul>
            @foreach ($shows as $show)
                <li>{{ $show["name"] }}  {{ $show["score"] }}</li>
            @endforeach
            </ul>
            @else
            <p>No results have been found</p>
            @endif

            <form action="search" method="get">
                <input type="text" placeholder="Search Again" name="search">
                <input type="submit" text="GO">
            </form>

            <div class="links">
                <a  href='{!! url('/'); !!}'>Home</a>
            </div>

        </div>
    </div>

@stop