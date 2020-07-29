@extends(' layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete Anime</h1>
                <form action="/admin/AnimeName/Delete" method="POST">
                @csrf
                @method("DELETE")
                    <input type="hidden" name="animeid" id="animeid" value="{{ $anime->_id }}">
                    <div class="form-group">
                        <label for="anime">Anime</label>
                        <input type="text" class="form-control" id="anime" name="anime" value="{{ $anime->anime }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="animeurl">Anime URL</label>
                        <!-- <select name="animeurl" id="animeurl"> -->
                            <textarea class="form-control" name="anime_url" id="anime_url" cols="30" rows="5" disabled>{{ $anime->anime_url }}</textarea>
                        <!-- </select> -->
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="genero">Gender</label>
                            <select class="form-control" name="genero" id="genero" disabled>
                                <option value="0">Select Gender...</option>
                                @foreach($generos as $genero)
                                <option value="{{ $genero->_id}}"{{ $genero->_id == $anim->Genero_id ? 'selected' : '' }}>{{ $genero->Genero_id}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-16">
                            <label for="capitulos">Chapters</label>
                            <input classs="form-control" type="number" name="capitulos" id="capitulos" value="{{ $anime->episodes }}" disabled>
                        </div>
                    </div>
                    
                    <button class="btn btn-default" type="button">Cancel</button>
                    <!-- <button class="btn btn-danger" type="submit">Delete</button> -->
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btndanger-" data-toggle="modal" data-target="#MdlDeleteConfirmation">
                        Delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="MdlDeleteConfirmation" tabindex="-1" role="dialog" aria-labelledby="MdlDeleteConfirmationLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h5 class="modal-title" id="MdlDeleteConfirmationLabel">Delete Anime</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are sure about that? This can not be reverted.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection
