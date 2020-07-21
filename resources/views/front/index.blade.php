@extends('layouts.front.app')

@section('og')
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
    <meta property="og:image" itemprop="image" content="">

@endsection

@section('content')
    @include('layouts.front.home-slider')
    @if($config->is_open == 1)
        @foreach($cats as $cat)
            @if($cat->products->isNotEmpty() && $cat->status == 1)
                <section class="new-product t100 home">
                    <div class="container">
                        <div class="section-title b50" id="{{$cat->slug}}">

                            <h2>{{ $cat->name }}</h2>

                        </div>
                        <p class="text-center">
                            <a href="{{ route('cart.index') }}" title="View Cart" class="btn btn-success product-info">
                                Ver carrinho de compras
                            </a>
                        </p>
                        <br/>
                        @include('front.products.product-list', ['products' => $cat->products->where('status', 1),
                                                                 'category_slug'=>$cat->slug])
                        <div id="browse-all-btn"> <a class="btn btn-default browse-all-btn" href="{{ route('front.category.slug', $cat->slug) }}" role="button">Ver todos os ítens do produtor</a></div>
                    </div>
                </section>
            @endif
            <hr>
        @endforeach
        @else
            @include('front.closed')
        @endif
{{--    @include('mailchimp::mailchimp')--}}
@endsection