@extends('layouts.app')

@section('content')
    <div class="container"> 

    @if (session('mssg')) ! == null)
    <div class="alert alert-{{ session('alerttype')}} alert-dismissible fade show" role="alert">
            {{ session('mssg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <h1>Animes</h1>
                <a class="text-right" href="/admin/AnimeName/Create">Create New Anime</a>
            </div>
            <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Anime</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Anime URL</th>
                    <th scope="col">Chapters</th>
                    <th scop="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($anime as $anim)
                    <tr>
                        <th scope="row">{{ $loop->index +1 }}</th>
                        <td>{{ $anim["anime"] }}</td>
                        <td>{{ $anim["Genero_id"]}} </td>
                        <td>{{ $anim["anime_url"] }}</td>   
                        <td>{{ $anim["episodes"] }}</td>
                        <td>
                            <a href="/admin/AnimeName/{{ $anim['_id'] }} ">Details</a> |
                            <a href="/admin/AnimeName/Edit/{{ $anim->_id }}">Edit</a> |
                            <a href="/admin/AnimeName/Delete/{{ $anim->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
