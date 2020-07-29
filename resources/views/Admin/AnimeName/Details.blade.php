@extends(' layouts.app')

@section('content')
    <div class="container">
    @if (session('mssg')) !== null)
        <div class="alert alert-{{ session('alerttype')}} alert-dismissible fade show" role="alert">
            {{ session('mssg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <h1>Anime Details</h1>
                <div class="card">
                <input type="hidden" name="animeid" id="animeid">
                    <div class="card-body">
                        <h5 class="card-title">{{ $anim->anime }}</h5>
                        <p class="card-text">
                            <b>Anime URL:</b> {{ $anim->anime_url}}
                            <br>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <b>Chapters: </b>{{ $anim->episodes }} 
                        </li>
                        <li class="list-group-item"><b>Gender: </b>{{ $anim->Genero_id }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/AnimeName/Edit/{{ $anim->_id }}" class="card-link">Edit</a>
                        <a href="/admin/AnimeName/Delete/{{ $anim->_id }}" class="card-link">Delete</a>
                    </div>

                    </div>
            </div>
        </div>
    </div>
@endsection
