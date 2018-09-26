<div class="container appear-animation animated fadeInUp" style="margin-top: 50px">
    <div class="row mb-5">
        {{--publicacion--}}

        @foreach($posts as $post)
            <div class="col-md-3" style="margin-bottom: 45px">
                <a href="{{url('posts/ver/'.$post->title)}}" style="text-decoration: none">
                    <div class="item-post magazine-item">
                        <div class="img-container">
                            <img class="item-img img-responsive" src="{{url('uploads/'.$post->img)}}" alt="">
                        </div>
                        <div class="item-content">
                            <div style="height: 150px;overflow: hidden">
                                <h4 class="item-title">{{$post->title}}</h4>
                                <div style="margin-top: -15px; margin-bottom: 20px">
                                    <span class="label label-default">{{\App\Category::find($post->category_id)->name}}</span>
                                    <span class="label label-default">{{\App\Destiny::find($post->destiny_id)->name}}</span>
                                </div>
                                <span class="item-text">
                                 {{$post->desc}}
                            </span>
                            </div>
                            <div class="row">
                                <div class="col-xs-7">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </div>
                                <div class="col-xs-5 text-right price">
                                    225€
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
    <div class="row text-center">
        {{$posts->links()}}
    </div>
</div>