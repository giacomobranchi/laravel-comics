<div class="row">
    @foreach ($products as $index => $product)
    <div class="col-2">   
        <div class="p-2">
            <div class="card_header" 
                style="background-position: top; background-size: cover; background-repeat: no-repeat; background-image: url({{$product['thumb']}})">

            </div>
            <div class=" text-white py-2">
                <div class="upper">{{ $product['series'] }}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>