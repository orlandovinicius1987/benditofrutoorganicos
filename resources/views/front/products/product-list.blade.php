@if(!empty($products) && !collect($products)->isEmpty())
    @if(session()->has('message'))
        <div class="box no-border">
            <div class="box-tools">
                <p class="alert alert-success alert-dismissible">
                    {{ session()->get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </p>
            </div>
        </div>
    @endif
    <ul class="row text-center list-unstyled">
        @foreach($products as $product)
            {{--<div class="col-md-3 col-sm-6 col-xs-12 product-list" id="{{$product->slug}}">--}}
                {{--<div class="single-product">--}}
                    {{--<div class="product">--}}
                        {{--@if(isset($product->cover))--}}
                            {{--<img src="{{ asset("storage/$product->cover") }}" alt="{{ $product->name }}"--}}
                                 {{--class="img-thumbnail">--}}
                        {{--@endif--}}
                    {{--</div>--}}

                    {{--<div class="product-text">--}}
                        {{--<h4>{{ $product->name }}</h4>--}}
                        {{--<p>--}}
                            {{--{{ config('cart.currency') }}--}}
                            {{--@if(!is_null($product->attributes->where('default', 1)->first()))--}}
                                {{--@if(!is_null($product->attributes->where('default', 1)->first()->sale_price))--}}
                                    {{--{{ number_format($product->attributes->where('default', 1)->first()->sale_price, 2) }}--}}
                                    {{--<p class="text text-danger">Sale!</p>--}}
                                {{--@else--}}
                                    {{--{{ number_format($product->attributes->where('default', 1)->first()->price, 2) }}--}}
                                {{--@endif--}}
                            {{--@else--}}
                                {{--{{ number_format($product->price, 2) }}--}}
                            {{--@endif--}}
                        {{--</p>--}}
                                {{--<form action="{{ route('cart.store') }}" class="form-inline" method="post">--}}
                                    {{--{{ csrf_field() }}--}}
                                    {{--<input type="hidden" name="quantity" value="1" />--}}
                                    {{--<input type="hidden" name="product" value="{{ $product->id }}">--}}
                                    {{--@isset($category_slug)--}}
                                        {{--<input type="hidden" name="category_slug" value="{{ $category_slug }}">--}}
                                    {{--@endif--}}
                                    {{--<button id="add-to-cart-btn" type="submit" class="btn btn-warning"--}}
                                            {{--@if($product->quantity < 1)--}}
                                            {{--disabled--}}
                                            {{--@endif--}}
                                            {{--data-toggle="modal" data-target="#cart-modal"> <i class="fa fa-cart-plus"></i>--}}
                                        {{--@if($product->quantity < 1)--}}
                                            {{--ESGOTADO--}}
                                        {{--@else--}}
                                            {{--Comprar--}}
                                        {{--@endif--}}
                                    {{--</button>--}}
                                    {{--<a class="btn btn-primary product-info" href="{{ route('front.get.product', str_slug($product->slug)) }}"> <i class="fa fa-link"></i> Detalhes</a> </li>--}}
                                {{--</form>--}}


                    {{--</div>--}}
                    {{--<!-- Modal -->--}}
                    {{--<div class="modal fade" id="myModal_{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">--}}
                        {{--<div class="modal-dialog" role="document">--}}
                            {{--<div class="modal-content">--}}
                                {{--@include('layouts.front.product')--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}



                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset("storage/$product->cover") }}" alt="Colorlib Template">

                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3>{{$product->name}}</h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="price-sale">R$ {{$product->price}}</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <form action="{{ route('cart.store') }}" class="form-inline" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="quantity" value="1" />
                                            <input type="hidden" name="product" value="{{ $product->id }}">
                                        <a href="{{ route('front.get.product', str_slug($product->slug)) }}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>

                                            <button id="add-to-cart-btn" type="submit" class="btn btn-success">
                                            <span><i class="ion-ios-cart"></i></span>
                                            </button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        @endforeach
        @if($products instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left">{{ $products->links() }}</div>
                </div>
            </div>
        @endif
    </ul>
@else
    <p class="alert alert-warning">No products yet.</p>
@endif