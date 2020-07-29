@extends(' layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Anime</h1>
                <form action="/admin/AnimeName/Edit" method="POST">
                    @csrf
                    <input type="hidden" name="animeid" id="animeid" value="{{ $anime->_id }}">
                    <div class="form-group">
                        <label for="anime">Anime</label>
                        <input type="text" class="form-control" id="anime" name="anime" value="{{ $anime->anime }}">
                    </div>
                    <div class="form-group">
                        <label for="animeurl">Anime URL</label>
                        <!-- <select name="animeurl" id="animeurl"> -->
                            <textarea class="form-control" name="animeurl" id="animeurl" cols="30" rows="5">{{ $anime->anime_url }}</textarea>
                        <!-- </select> -->
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="genero">Gender</label>
                            <select class="form-control" name="genero" id="genero">
                                <option value="0">Select Gender...</option>
                                @foreach ($generos as $genero)
                                <option value="{{ $genero->_id }}" {{ $genero->_id == $anim->genero_id ? 'selected' : ''}}>{{ $genero->genero_id}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="capitulos">Chapters</label>
                            <input classs="form-control" type="number" name="capitulos" id="capitulos" value="{{ $anime->episodes}}">
                        </div>
                    </div>
                    
                    <button class="btn btn-primary" type="submit">Edit</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
