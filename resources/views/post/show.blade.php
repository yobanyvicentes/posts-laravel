@extends('layouts.app')

@section('template_title')
    {{ $post->name ?? 'Show Post' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Post</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $post->name }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $post->category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $post->description }}
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            {{ $post->state }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
