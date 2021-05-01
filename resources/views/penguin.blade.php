@extends('layouts.master')


@section('content')


    <div class="container">

        <p>
            <a href="/">
                ‹ Back to Projects</a>
        </p>

        <div class="row">
            <div class="col-8 col-md-8 col-lg-5">
                <p>
                <h4>drawings<br> with css.</h4>
                <h6>HTML / CSS
                </h6>
                <h7>—</h7>
                </p>


                <h5>Manipulating css figures to create something amazing.</h5>

                <p>
                    With basic figures you can create almost everything!
                    The challenge for this project was recreating children's drawing. Final result? a cute drawing.
                </p>
            </div>
        </div>



        <div class="cocoen w-100">
            <img  src="/pictures/penguin-draw.jpg">
            <img src="/pictures/penguin-draw2.jpg">
        </div>


        <div class="row">
            <div class="col-md-4 col-6 pt-5">
                <div class="row">
                    <div class="col">
                        <h6>Duration</h6>
                        <h7>—</h7>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <p>
                                    Two Weeks

                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 pt-5">
                <div class="row">
                    <div class="col">
                        <h6>RESOURCES</h6>
                        <h7>—</h7>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>
                            <a href="https://github.com/itselfcg/nyan-penguin"
                               target="_blank">Github</a>,
                            <a href="https://codepen.io/itselfcg/full/gOProLd"
                               target="_blank">Codepen</a>
                        </p>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
