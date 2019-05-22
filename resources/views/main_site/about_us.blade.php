@extends('layouts.main_layout')

@section('content')
    <!--/banner-bottom-w3ls-->
    <section class="banner-bottom-w3ls py-md-5 py-4" id="about">
        <div class="container">
            <div class="inner-sec-wthreelayouts py-md-5 py-4">
                <div class="row">
                    <div class="col-lg-6 about-img">
                        <img src="{{ asset('/img/1.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 about-right">
                        <h3>About Us</h3>
                        <h4>Showcase your work in a new way</h4>
                        <p class="my-4">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum. </p>
                        <!--/about-in-->
                        <div class="row">
                            <div class="col-lg-6 about-in text-left">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fas fa-anchor"></i>
                                        <h5 class="card-title"> Branch 1</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur elit
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 about-in text-left">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="far fa-map"></i>
                                        <h5 class="card-title"> Branch 2</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur elit
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--/about-in-->

                    </div>
                </div>
                <!--/services-grids-->
                <div class="service-mid-sec mt-lg-5 mt-4">
                    <div class="middle-serve-content py-md-5 py-4">
                        <div class="row middle-grids">
                            <div class="col-lg-4 about-in middle-grid-info text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="far fa-lightbulb"></i>
                                        <h5 class="card-title">What we do</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 about-in middle-grid-info text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fas fa-signal"></i>
                                        <h5 class="card-title"> Our Strategy</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 about-in middle-grid-info text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="far fa-clone"></i>
                                        <h5 class="card-title"> Our Projects</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//services-grids-->
                <!--/progress-->
           
                <!--//progress-->
            </div>
        </div>
    </section>
    <!--//banner-bottom-w3ls-->
@endsection