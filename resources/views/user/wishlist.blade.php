@extends('partials.main_user')

@section('konten')
<div class="breadcrumb-area breadcrumb-padding-6">
    <div class="container">
        <div class="breadcrumb-content text-center" style="margin-top: -10%">
            <div class="breadcrumb-title">
                <h2>Wishlist </h2>
            </div>
            <ul>
                <li>
                    <a href="/user">HOME</a>
                </li>
                <li>
                    >
                </li>
                <li>WISHLIST </li>
            </ul>
        </div>
    </div>
</div>
<div class="wishlist-area bg-white pb-130">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="wishlist-table-content">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="width-remove"></th>
                                        <th class="width-thumbnail"></th>
                                        <th class="width-name">Product</th>
                                        <th class="width-price"> Unit price </th>
                                        <th class="width-stock-status"> Stock status </th>
                                        <th class="width-wishlist-cart"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-remove"><a href="#">×</a></td>
                                        <td class="product-thumbnail">
                                            <a href="product-details.html"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                                        </td>
                                        <td class="product-name">
                                            <h5><a href="product-details.html">Cara Portable Air Compressor</a></h5>
                                        </td>
                                        <td class="product-price"><span class="amount">$120.00</span></td>
                                        <td class="stock-status">
                                            <span><i class="las la-check"></i> In Stock</span>
                                        </td>
                                        <td class="wishlist-cart"><a href="#">Add to Cart</a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-remove"><a href="#">×</a></td>
                                        <td class="product-thumbnail">
                                            <a href="product-details.html"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                                        </td>
                                        <td class="product-name">
                                            <h5><a href="product-details.html">Cara Portable Air Compressor</a></h5>
                                        </td>
                                        <td class="product-price"><span class="amount">$120.00</span></td>
                                        <td class="stock-status">
                                            <span><i class="las la-check"></i> In Stock</span>
                                        </td>
                                        <td class="wishlist-cart"><a href="#">Add to Cart</a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-remove"><a href="#">×</a></td>
                                        <td class="product-thumbnail">
                                            <a href="product-details.html"><img src="assets/images/cart/cart-3.jpg" alt=""></a>
                                        </td>
                                        <td class="product-name">
                                            <h5><a href="product-details.html">Cara Portable Air Compressor</a></h5>
                                        </td>
                                        <td class="product-price"><span class="amount">$120.00</span></td>
                                        <td class="stock-status">
                                            <span><i class="las la-check"></i> In Stock</span>
                                        </td>
                                        <td class="wishlist-cart"><a href="#">Add to Cart</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection