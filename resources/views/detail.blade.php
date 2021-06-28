@extends('layouts.app')

@section('content')
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">

        <div class="row">
            <div class="card">
                <div class="col sm-5">
                    <img src="{{asset(''. $data_services->image )}}" alt="..." />
                </div>
            </div>


            <div class="col sm-5">
                <h2 class="fw-bolder"><b>{{$data_services['name']}}</b></h2>
                <hr style="border-top: 3px solid;">
                <h5 id="out" class="fw-bolder">Kategori : {{ $data_services->kategory }}</h5>
                <hr style="border-top: 3px solid;">
                <h4 id="out" class="fw-bolder">{!! $data_services->desk !!}</h4>
                <hr style="border-top: 3px solid;">
                <h5 id="out" class="fw-bolder">{!! $data_services->alamat !!}</h5>
                <hr style="border-top: 3px solid;">
                <h5 id="out" class="fw-bolder">{{ $data_services->phone }}</h5>

            </div>
        </div>
    </div>

</section>

<!-- Footer-->
<footer class="py-5 bg-dark" style="margin-top:121px">
    <div class="container">
        <p class="m-0 text-center text-white">{{ __('Copyright OpenService 3B 2021') }}</p>
    </div>
</footer>
@endsection