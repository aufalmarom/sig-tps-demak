@extends('dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Recap Datas</h1>
</div>


<div class="row">
    <div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Data Maps</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <iframe width="100%" height="520" frameborder="0" src="https://rizqiur.carto.com/builder/e7ab25ea-af82-4422-9f03-890f560a5dae/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
        </div>
    </div>
    </div>
</div>

@endsection
