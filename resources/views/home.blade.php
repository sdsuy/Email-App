@extends('layouts.app')

@section('content')
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900">
        {{ __('Dashboard') }}
      </h1>
    </div>
  </header>
  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        @if (session('status'))
            <div class="" role="">
                {{ session('status') }}
            </div>
        @endif

        {{ __('You are logged in!') }}
    </div>
  </main>
</div>
@endsection
