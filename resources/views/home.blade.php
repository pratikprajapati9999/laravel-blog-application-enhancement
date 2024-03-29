@extends('layouts.app')

@section('body')

    <div class="container py-4">
        <div class="row">
            
            <div class="col-md-12">

                @each('partials.post', $posts, 'post', 'partials.empty-post')

                {{ $posts->appends(request()->only('search'))->links() }}

            </div>
        </div>
    </div>
    
    
@endsection