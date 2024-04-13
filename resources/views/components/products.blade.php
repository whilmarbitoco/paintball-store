<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        @if (request()->path() == '/')
        <h2 class="mb-2">New Products</h2>
        @endif
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @for ($i = 0; $i < 10; $i++) <div class="col mb-5">
                <x-product id={{$i}} name="test" price="299 PHP" image="https://dummyimage.com/600x400/000/fff" />
        </div>
        @endfor
    </div>
    </div>
</section>