@extends('layout')
 @section('content')

    <div class="flex-center position-ref full-height">


        <div class="content" id="results">
            <div class=" title m-b-md">
                Results
            </div>

            <div v-if="list" class="m-b-md">
                @if(count($shows))
                <ul>
                @foreach ($shows as $show)
                    <li>{{ $show["name"] }}&nbsp;&nbsp;&nbsp;{{ $show["score"] }}</li>
                @endforeach
                </ul>
                @else
                <p>No results have been found</p>
                @endif
            </div>

            <div v-if="json" class="m-b-md">
                <span> {!! json_encode($shows) !!} </span>
                <textarea class="rawJson hideJsonClipboard">{!! json_encode($shows) !!}</textarea>
            </div>

            @if(count($shows))
            <button v-on:click="toggle">
                <span v-if="list">Show raw json</span>
                <span v-if="json">Show List</span>
            </button>

            <button v-on:click="copyJson" v-if="json" >
                <span>Copy json</span>
            </button>
            @endif

            <form action="search" method="get" class="m-t-md">
                <input class="input" type="text" placeholder="Search Again" name="search">
                <input class="submit" type="submit" text="GO">
            </form>

            <div class="links m-t-md">
                <a  href='{!! url('/'); !!}'>Home</a>
            </div>

        </div>
    </div>

@stop