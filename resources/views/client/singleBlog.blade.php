@extends('layouts.mainapp')
@section('content')


    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>News</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- section -->
    <div class="section layout_padding">
        <div class="container">

            <div class="row">
                <div class="col-md-8">
                    <div class=""></div>
                    <h1 class="text-center text text-bold text-dark h1">{{ $blog->title }} </h1>

                    <h2 class="text text-dark">{{ $blog->subtitle }} <span class="float-right text text-primary h6">Author
                            <span class="text text-capitalize">{{ $blog->user->name }}</span> </span> </h2>
                    <div>
                        <img class="img-responsive" src="/storage/blog/{{ $blog->image }}" alt="{{ $blog->subtitle }}" />
                    </div>
                    <div>
                        @php
                        echo $blog->body
                        @endphp
                        <div>

                            @forelse ($blog['comments'] as $comment)

                                <ul class="m-1 list-group ">
                                    <li class="list-group-item ">
                                        <div class="text text-primary text-capitalize">{{ $comment['name'] }}</div>
                                        <div>{{ $comment->body }}</div>
                                    </li>
                                </ul>
                            @empty
                                <ul>
                                    <li class="text text-primary ">
                                        Be the first Person to comment
                                    </li>
                                </ul>

                            @endforelse
                            <div style="background-color: #c0c77f; color:#000;   ">
                                <div>
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-hidden="true">&times;</button>
                                            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                            {{ $error }}
                                        </div>
                                    @endforeach

                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-hidden="true">&times;</button>
                                            <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                            {{ session('success') }}
                                        </div>

                                    @endif
                                </div>

                                <form action="{{ route('comment.post', $blog) }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input required id="name" value="{{ old('name') }}" class="form-control" type="text"
                                            name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email</label>
                                        <input required id="email" value="{{ old('value') }}" class="form-control"
                                            type="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="body">What is in your mind?</label>
                                        <textarea required placeholder="What is in your mind?" class="form-control"
                                            name="body" id="" rows="3">{{ old('body') }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div>Top 5 news</div>
                    <div>
                        @forelse ($topFiveBlog as $single)
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="{{ route('blog.single', $single->slug) }}">{{ $single->title }}
                                    </h5>
                                    </a>

                                    <p class="card-text">
                                        <img class="img-responsive" width="100" height="40"
                                            src="/storage/blog/{{ $single->image }}" alt="{{ $single->subtitle }}" />

                                    </p>
                                    <span class="float-right text text-secondary">
                                        comments {{ $single->comments_count }}
                                    </span>
                                </div>
                            </div>

                        @empty

                        @endforelse
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- end section -->

@endsection
