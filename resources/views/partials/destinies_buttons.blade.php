<section class="section section-default section-no-border">
    <div class="container">
        @foreach(\App\Destiny::all() as $destiny)
            <a href="" class="btn btn-primary btn-lg text-dark btn-padding">{{$destiny->name}}</a>
        @endforeach
    </div>
</section>