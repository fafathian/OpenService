@extends('layouts.app')

@section('content')

<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">{{ ('Loundry dan Galon') }}</h1>
            <p class="lead fw-normal text-white-50 mb-0">{{ ('Catalog loundry dan galon sekitar UMY') }}</p>
        </div>
    </div>
</header>
<section class="py-5">
    <form class="form-inline my-2 my-lg-0 justify-content-center" method="get" action="/">
        <input name="cari" class="form-control w-25 mr-sm-2" id="search" placeholder="cari">
        <button type="submit" class="btn btn-outline-secondary my-2 my-sm-0">Cari</button>
    </form>
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

            @foreach($data_service as $serv)
            <div class="col mb-5">


                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{$serv->image}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-2">
                        <a href="home/detail/{{$serv->id}}">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><b>{{$serv->name}}</b></h5>

                                <hr style="border-top: 3px solid;">
                                <p>{{$serv->kategory}}</p>
                                <!-- Product price-->
                                <p>{{$serv->alamat}}</p>



                            </div>
                        </a>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="home/detail/{{$serv->id}}">Detail</a></div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>


</section>

<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">{{ __('Copyright OpenService 3B 2021') }}</p>
    </div>
</footer>
<!-- Footer-->
@endsection