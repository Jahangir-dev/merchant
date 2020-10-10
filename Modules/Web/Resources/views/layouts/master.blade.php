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
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/prettyPhoto.css')}}">

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    @notifyCss
</head>

    <body class="sl-home">


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
    @include('notify::messages')

        <x:notify-messages />
        @notifyJs
<style type="text/css">
    .w-full {
        position: absolute !important;
        bottom: 30px !important;
    }
    .owl-carousel {

        z-index: 0 !important;
    }
</style>
        {{-- Laravel Mix - JS File --}}
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
    <script src="{{asset('frontend/js/vendor/countdown.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


    <script type="text/javascript">
        $( document ).ready(function getCartItems() {
            getCartItem()
            getWishList()
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
                    alertify.success(response.message);
                    getCartItem()
                }
            })
        }
        function cartItemDecrement(e) {
            let self = this
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
                        alertify.success(response.message);
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
                        alertify.success(response.message);
                        getCartItem()
                    }
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
                        alertify.success(response.message);
                        getCartItem()
                    }
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

        function checkPromo() {
            let promoCode = document.querySelector('#promo').value
            if(promoCode === '') {
                alertify.error('Enter promocode');
                return
            }
            $.ajax({
                url: '/customer/checkPromo',
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                    code: promoCode,
                },
                success: function(response){
                    if (response.type === 'success') {
                        console.log(response)
                            let keys = Object. keys(response.discountable_products)
                            keys.forEach(function (key) {
                                let product = response.discountable_products[key]
                                let quantity = response.items[product.id].quantity
                                let discount = ((product.price / 100) * response.discount) * quantity
                                let total = document.querySelector('#checkout-total-price').textContent
                                document.querySelector('#checkout-total-price').textContent = parseInt(total - discount)
                                document.querySelector('#total_price').value = parseInt(total - discount)
                            })

                        alertify.success(response.message);
                        // getCartItemDiscounted()
                    }
                    else{

                        alertify.error(response.message);
                    }
                }
            })
        }

        function getCartItem() {
            $.ajax({
                url: 'getCartItems',
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response){
                    document.querySelector('#cart-items-total').textContent = response.total
                    let keys = Object. keys(response.items)
                    let item = ''
                    let total_price = 0
                    let li = ''
                    let tr =
                        `<thead>
                                    <tr>
                                        <th scope="col">{{ translateText('Name') }}</th>
                                        <th scope="col">{{ translateText('Price') }}</th>
                                        <th scope="col">{{ translateText('Quantity') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>`
                    keys.forEach(function (key){
                        item = response.items[key]
                        total_price += parseFloat(item.price) * parseInt(item.quantity)
                        console.log(total_price)
                        if (item.quantity === 0) {
                            $('#tr-'+key).remove();
                        }

                        li += `<li id="`+ key +`">
                            <img src="{{asset("storage/`+item.attributes[0]+`")}}" alt="Image Description" style="width:50px !important">
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



                        tr += `<tr id="`+key+`">
                                        <td data-label="Details">`+ item.name+`</td>
                                        <td data-label="Price">`+item.price+`</td>
                                        <td data-label="Amount">
                                            <form class="sl-vlaue-btn">
                                                <a href="javascript:void(0);" data-id="`+key+`" data-quantity="`+item.quantity+`" onclick="cartItemDecrement(this)" class="sl-input-decrement">-</a>
                                                <input class="sl-input-number" type="number" value="`+item.quantity+`" min="0" max="1000">
                                                <a href="javascript:void(0);" data-id="`+key+`" data-quantity="`+item.quantity+`"  onclick="cartItemIncrement(this)" class="sl-input-increment">+</a>
                                            </form>
                                        </td>
                                    </tr>`
                    })
                    tr += `<tr>
                                <td>Your total is :</td>
                                <td><span class="border p-2" id="checkout-total-price">`+total_price+`</span></td>
                                <td></td>
                            </tr>`
                    document.querySelector('#cart-items-total').textContent = response.total
                    document.querySelector('#cart-total-price').textContent = total_price

                    document.querySelector('#cart-items-list').innerHTML = li
                    if (document.querySelector('#checkout-cart-item')) {
                        document.querySelector('#checkout-cart-item').innerHTML = tr
                    }
                }

            })
        }
        function getCartItemDiscounted() {
            $.ajax({
                url: 'getCartItemDiscounted',
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response){
                    document.querySelector('#cart-items-total').textContent = response.total
                    let keys = Object. keys(response.items)
                    let item = ''
                    let total_price = 0
                    let li = ''
                    let tr =
                        `<thead>
                                    <tr>
                                        <th scope="col">{{ translateText('Name') }}</th>
                                        <th scope="col">{{ translateText('Price') }}</th>
                                        <th scope="col">{{ translateText('Quantity') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>`
                    keys.forEach(function (key){
                        item = response.items[key]
                        total_price += parseFloat(item.price) * parseInt(item.quantity)
                        if (item.quantity === 0) {
                            $('#tr-'+key).remove();
                        }

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



                        tr += `<tr id="`+key+`">
                                        <td data-label="Details">`+ item.name+`</td>
                                        <td data-label="Price">`+item.price+`</td>
                                        <td data-label="Amount">
                                            <form class="sl-vlaue-btn">
                                                <a href="javascript:void(0);" data-id="`+key+`" data-quantity="`+item.quantity+`" onclick="cartItemDecrement(this)" class="sl-input-decrement">-</a>
                                                <input class="sl-input-number" type="number" value="`+item.quantity+`" min="0" max="1000">
                                                <a href="javascript:void(0);" data-id="`+key+`" data-quantity="`+item.quantity+`"  onclick="cartItemIncrement(this)" class="sl-input-increment">+</a>
                                            </form>
                                        </td>
                                    </tr>`
                    })
                    tr += `<tr>
                                <td>Your total is :</td>
                                <td><span class="border p-2" id="checkout-total-price">`+total_price+`</span></td>
                                <td></td>
                            </tr>`
                    document.querySelector('#cart-items-total').textContent = response.total
                    document.querySelector('#cart-items-list').innerHTML = li
                    document.querySelector('#checkout-cart-item').innerHTML = tr
                    document.querySelector('#cart-total-price').textContent = total_price
                }

            })
        }

        function addToWishList(id) {
            $.ajax({
                url: 'addToWishList',
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                },
                success: function(response){
                    if (response.type === 'added') {
                        alertify.success(response.message);

                        getWishList()
                    }
                    else if (response.type === 'removed') {
                        alertify.success(response.message);
                        getWishList()
                    }
                    else if (response.type === 'error') {
                        alertify.message(response.message);
                    }
                }
            })
        }
        function getWishList() {
            let ele = document.querySelectorAll('.sl-liked')
            if(ele !== null){
                ele.forEach(function (e){
                    e.classList.remove('sl-liked')
                })
            }
            $.ajax({
                url: 'getWishList',
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response){
                    if (response.type === "not null") {
                        response.list.forEach(function (l){
                            if (document.querySelector('#wist-list-'+l)){
                                document.querySelector('#wist-list-'+l).classList.add('sl-liked')
                            }
                        })
                    }
                }
            })
        }
  </script>
    </body>
</html>
