<div class="product-page-custom event">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-3">
            <div class="product-main-image ">
                <img src="images/{{$product->image}}" class="img-responsive photo" alt="{{$product->image}}">
            </div>

        </div>
        <div class="col-md-6 col-sm-6 col-xs-9">
            <h3>{{ $product->name }}</h3>

            <div class="price-availability-block clearfix">
                <div class="price">
                    <div class="product-page-options">
                        <div class="pull-left">
                            <label class="control-label">Tickets:</label>
                        </div>
                    </div>
                    <div class="address">
                        <p>Brand: {{ $product->brand }}.</p>
                        <p>Origin Name: {{ $product->origin_name }}</p>
                        <p>Color: {{ $product->color }}</p>
                        <p>Type: {{ $product->type }}</p>
                        <p>Size: {{ $product->size }}</p>
                        <p>Price: ${{ $product->price }}</p>
                    </div>
                </div>
            </div>

            <div class="description">
                <p>{{ $product->details }}</p>
            </div>
            <div class="product-page-cart">

                <a href="#" class="btn btn-default color-custom">More
                    details</a>
            </div>
        </div>
        <div class="sticker sticker-sale"></div>
    </div>
</div>

