<div class="product-page-custom event">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-3">
            <div class="product-main-image ">
                <img src="images/{{$product->image}}" class="img-responsive photo" alt="{{$product->image}}">
            </div>

        </div>
        <div class="col-md-6 col-sm-6 col-xs-9">
            <h3 style="color:darkred">{{ $product->name }}</h3>

            <div class="price-availability-block clearfix">
                <div class="price">
                    <div class="address">
                        <p><B style="color: #003bb3">Brand:</B> {{ $product->brand }}.</p>
                        <p><B style="color: #003bb3">Origin Name:</B> {{ $product->origin_name }}</p>
                        <p><B style="color: #003bb3">Color:</B> {{ $product->color }}</p>
                        <p><B style="color: #003bb3">Type:</B> {{ $product->type }}</p>
                        <p><B style="color: #003bb3">Size:</B> {{ $product->size }}</p>
                        <p><B style="color: #003bb3">Price:</B> ${{ $product->price }}</p>
                    </div>
                </div>
            </div>

            <div class="description">
                <p>{{ $product->details }}</p>
            </div>

        </div>
        <div class="sticker sticker-sale"></div>
    </div>
</div>

