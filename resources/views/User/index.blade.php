@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fa fa-users" aria-hidden="true"></i>ユーザー紹介</h1>
    </div>
    @foreach ($itmes as $item)
        <div class="row ml-1">
            <div class="card col-md-3 col-sm-12 mr-1 mt-2" style="width: 18rem;">
                @if (empty($item->image_url))
                    <img class="card-img-top" src="/storage/user_none.png" alt="Card image cap" class="rounded-circle">
                @else
                    <img class="card-img-top" src="{{ $item->image_url }}" alt="Card image cap" class="rounded-circle">
                @endif
                <div class="card-body">
                    <p class="card-text">名前:{{ $item->name }}</p>
                </div>
            </div>
        </div>
    @endforeach


@endsection
