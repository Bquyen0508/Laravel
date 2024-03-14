<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title> unicode </title> --}}
</head>

<body>
    @extends('layouts.client')
    {{-- @section('content')
        <h1>Home page</h1>
    @endsection --}}

    @section('title')
        {{ $title }}
    @endsection

    @section('content')
        <section>
            <h1>Thêm sản phẩm</h1>
            <form action="{{ route('post-add') }}" method="post" id='product-form'>

                <div class="alert alert-danger text-center mgs">
                </div>

                <div class="mb-3">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Tên sản phẩm..."
                        value={{ old('product_name') }}>
                    <span style="color:red;" class="product_name_error"></span>

                </div>
                <div class="mb-3">
                    <label for="">Gía sản phẩm</label>
                    <input type="text" class="form-control" name="product_price" placeholder="Gía sản phẩm..."
                        value={{ old('product_price') }}>

                    <span style="color:red;" class="error product_price_error"></span>

                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                @csrf
            </form>
        </section>
    @endsection

    @section('js')
        <script>
            $(document).ready(function() {
                $('#product-form').on('submit', function(e) {
                    e.preventDefault();
                    let productName = $('input[name="product_name"]').val().trim();
                    let productPrice = $('input[name="product_price"]').val().trim();
                    let actionUrl = $(this).attr('action');
                    let csrfToken = $(this).find('input[name="_token"]').val();
                    console.log(csrfToken);
                    $('.error').text('')
                    $.ajax({
                        url: actionUrl,
                        type: 'POST',
                        data: {
                            product_name: productName,
                            product_price: productPrice,
                            _token: csrfToken
                        },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                        },
                        error: function(error) {
                            $('.mgs').show();
                            let responseJSON = error.responseJSON.errors;
                            console.log(responseJSON);

                            if (Object.keys(responseJSON).length > 0) {
                                $('mgs').text(responseJSON.mgs);
                                for (let key in responseJSON) {
                                    $('.' + key + '_error').text(responseJSON[key][0]);
                                }
                            }

                        }
                    });
                });
            });
        </script>
    @endsection

</body>

</html>
