@extends('layouts.master')

@section('content')

<div class="row">
  <div class="">

    <h3>Total users {{ $users->total() }}</h3>

    <ul class="list-group">
      @foreach($users as $user)
        <li class="list-group-item" style="margin-top:20px;">
          <span>{{ $user->name }}</span>
          <span class="pull-right clearfix">Joined ({{ $user->created_at->diffForHumans() }})
            <button class="btn btn-xs btn-primary">Follow</button>
          </span>


        </li>
        @endforeach
        {{ $users->links() }}
    </ul>
  </div>
</div>

@endsection
