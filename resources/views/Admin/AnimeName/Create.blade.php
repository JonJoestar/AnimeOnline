@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create New Anime</h1>
                <form action="/admin/AnimeOnline/Create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="anime">Anime</label>
                        <input type="text" class="form-control" id="anime" name="anime">
                    </div>
                    <div class="form-group">
                        <label for="animeurl">Anime URL</label>
                        <!-- <select name="animeurl" id="animeurl"> -->
                            <textarea class="form-control" name="animeurl" id="animeurl" cols="30" rows="5"></textarea>
                        <!-- </select> -->
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="genero">Gender</label>
                            <select class="form-control" name="genero" id="genero">
                                <option value="0">Select Gender...</option>
                                @foreach($generos as $genero)
                                    <option value="{{ $genero->_id }}">{{ $genero->genero }}</option>
                                @endforeach
                                <!-- <option value="5ee2b3f1d553b02acca435fe">Fantasy & Action</option> -->
                            </select>
                        </div>
                        <div class="form-group col-md-16">
                            <label for="capitulos">Chapters</label>
                            <input classs="form-control" type="number" name="capitulos" id="capitulos">
                        </div>
                    </div>
                    
                    <button class="btn btn-success" type="submit">Create</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
