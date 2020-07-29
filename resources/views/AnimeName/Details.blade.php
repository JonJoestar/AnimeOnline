@extends(' layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="card-body">
                <h5 class="card-title">{{ $anime->name }} </h5>
                <h6 class="card-subtitle mb-2 text-muted">$product->anime_url</h6>
                <p class="card-text">{{ $product->Genero_id->description}} </p>
            </div>
            </div>
        </div>
    </div>
@endsection