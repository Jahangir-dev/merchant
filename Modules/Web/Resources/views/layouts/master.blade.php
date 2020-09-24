<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Groupon Hk</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('frontend/apple-touch-icon.html')}}">
    <link rel="icon" href="{{asset('frontend/images/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/lightpick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/tipso.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/prettyPhoto.css')}}">
    @notifyCss
</head>

    <body class="sl-home">
    @include('notify::messages')


    <!-- Preloader Start -->
    <div class="preloader-outer">
        <div class="sl-preloader-holder">
            <img src="{{asset('frontend/images/loader.png')}}" alt="loader img">
            <div class="sl-loader"></div>
        </div>
    </div>
    <!-- Preloader End -->
    <!-- HEADER START -->
    @include('web::layouts.header')
    <!-- HEADER END -->

    <!-- MAIN START -->
        @yield('content')
    <!-- MAIN END -->
    <!-- FOOTER START -->
    @include('web::layouts.footer')
    <!-- FOOTER END -->
        {{-- Laravel Mix - JS File --}}
    <x:notify-messages />
    @notifyJs
        {{-- <script src="{{ mix('js/web.js') }}"></script> --}}
    <script src="{{asset('frontend/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/jquery-library.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/appear.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/countTo.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/gmap3.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/select2.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/readmore.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/jquery-ui.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/lightpick.j')}}s"></script>
    <script src="{{asset('frontend/js/vendor/tipso.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/jquery.ui.touch-punch.js')}}"></script>

    <script src="{{asset('frontend/js/vendor/prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/jquery.ui.touch-punch.js')}}"></script>

    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script type="text/javascript">
        $( document ).ready(function getCartItems() {
            getCartItem()
        });
        function myFunction(product) {
            $.ajax({
                url: 'addToCart',
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                    product: product
                },
                success: function(response){
                    document.querySelector('#cart-items-total').textContent = response.total
                    getCartItem()
                }
            })
        }
        function cartItemDecrement(e) {
            let self = this
            console.log('decrement ', $(e).attr("data-id"), $(e).attr("data-quantity"))
            let item_id = $(e).attr("data-id")
            let quantity = $(e).attr("data-quantity")
            $.ajax({
                url: 'decrementCartItem',
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                    item_id: item_id,
                    quantity: quantity,
                },
                success: function(response){
                    if (response.type === 'success') {
                        getCartItem()
                    }
                }
            })

        }
        function cartItemIncrement(e) {
            let self = this
            let item_id = $(e).attr("data-id")
            let quantity = $(e).attr("data-quantity")
            $.ajax({
                url: 'incrementCartItem',
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                    item_id: item_id,
                    quantity: quantity,
                },
                success: function(response){
                    if (response.type === 'success') {
                        getCartItem()
                    }
                    console.log(response)
                }
            })
        }
        function cartItemDelete(e) {
            let self = this
            let item_id = $(e).attr("data-id")
            let quantity = $(e).attr("data-quantity")
            $.ajax({
                url: 'cartItemDelete',
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                    item_id: item_id,
                    quantity: quantity,
                },
                success: function(response){
                    if (response.type === 'success') {
                        getCartItem()
                    }
                    console.log(response)
                }
            })
        }

        $('.target').on('change',function(){
            var target = $(this).val();
            $.ajax({
                url:"{{url('/setTarget')}}",
                type:"POST",
                dataType:'json',
                data:{"_token": "{{ csrf_token() }}","target":target},
                success: function(data) {
                    location.reload();
                    },
                error: function(e) {

                }
            });
        });
        function getCartItem() {
            $.ajax({
                url: 'getCartItems',
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response){
                    console.log(response)
                    document.querySelector('#cart-items-total').textContent = response.total
                    let keys = Object. keys(response.items)
                    let item = ''
                    let total_price = 0
                    let li = ''
                    keys.forEach(function (key){
                        console.log(response.items[key])
                        item = response.items[key]
                        total_price += parseFloat(item.price)

                        li += `<li id="`+ key +`">
                            <img src="{{asset('frontend/images/index/cart/img-03.png')}}" alt="Image Description">
                            <div class="sl-dropdown__cart__description">
                                <a class="sl-cart-title" href="javascript:void(0);">`+ item.name+`</a>
                                <span class="sl-cart-price">`+item.price+`</span>
                                <a class="sl-cart-delete" data-id="`+key+`" data-quantity="`+item.quantity+`" onclick="cartItemDelete(this)" href="javascript:void(0);">Delete Item</a>
                            </div>
                            <form class="sl-vlaue-btn">
                                <a href="javascript:void(0);" data-id="`+key+`" data-quantity="`+item.quantity+`" onclick="cartItemDecrement(this)" class="sl-input-decrement">-</a>
                                <input class="sl-input-number" type="number" value="`+item.quantity+`" min="0" max="1000">
                                <a href="javascript:void(0);" data-id="`+key+`" data-quantity="`+item.quantity+`"  onclick="cartItemIncrement(this)" class="sl-input-increment">+</a>
                            </form>
                        </li>`
                    })
                    document.querySelector('#cart-items-total').textContent = response.total
                    document.querySelector('#cart-items-list').innerHTML = li
                    document.querySelector('#cart-total-price').textContent = total_price
                }

            })
        }
  </script>
    </body>
</html>
