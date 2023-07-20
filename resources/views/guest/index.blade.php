@extends('layouts.app')
@section('content')
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <h2>Projects</h2>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <ul class="list-unstyled">
                @foreach ($projects as $project)
                    <li>{{ $project->title }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
