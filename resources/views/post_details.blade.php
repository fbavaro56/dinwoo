@extends('layouts.web')
@section('content')
    <div role="main" class="main">
        <div class="container">
            <div class="row" style="margin-top: 100px">
                <div class="col-md-12">
                    <?php echo $post->content?>
                </div>
            </div>
        </div>
        {{--@include('partials.posts_grid')--}}
        @include('partials.destinies_buttons')
    </div>

@endsection