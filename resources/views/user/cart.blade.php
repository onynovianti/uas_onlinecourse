@extends('partials.main_user')

@section('konten')
<div class="breadcrumb-area breadcrumb-padding-6">
    <div class="container">
        <div class="breadcrumb-content text-center" style="margin-top: -10%">
            <div class="breadcrumb-title">
                <h2>My Courses </h2>
            </div>
            <ul>
                <li>
                    <a href="/user">HOME</a>
                </li>
                <li>
                    >
                </li>
                <li>MY COURSES </li>
            </ul>
        </div>
    </div>
</div>
<div class="cart-area pb-130">
    <div class="container">
        <div class="row pb-120">
            <div class="col-12">
                    <div class="cart-table-content">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="width-thumbnail"></th>
                                        <th class="width-name">Course</th>
                                        <th class="width-price"> Short Description</th>
                                        <th class="width-quantity">Enroll At</th>
                                        <th class="width-subtotal">Price</th>
                                        <th class="width-remove"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($course as $c)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <img width="200" height="100" src="{{ asset('storage/uploads/course/'.$c->gambar) }}" alt=""></a>
                                        </td>
                                        <td class="product-name">
                                            <h5><a href="product-details.html">{{ $c->title }}</a></h5>
                                        </td>
                                        <td class="product-price">{{ $c->short_description }}</td>
                                        <td class="cart-quality"> {{ $c->created_at }}
                                        </td>
                                        <td class="product-total"><span>{{ $c->price }}</span></td>
                                        <td class="product-remove"><a href="/materibelajar/{{ $c->id }}"><i class="las la-eye"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection