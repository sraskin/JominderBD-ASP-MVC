@extends('master')

@section('content')
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="../../../images/img_1.jpg" alt="Building 1"
                         style="width:1140px;height:300px">

                    <div class="carousel-caption">
                        <h3>Building 1</h3>

                        <p>This is the Building 1 details.</p>
                    </div>
                </div>

                <div class="item">
                    <img class="img-responsive" src="../../../images/img_2.jpg" alt="Building 2"
                         style="width:1140px;height:300px">

                    <div class="carousel-caption">
                        <h3>Building 2</h3>

                        <p>This is the Building 2 details.</p>
                    </div>
                </div>

                <div class="item">
                    <img class="img-responsive" src="../../../images/img_3.jpg" alt="Building 3r"
                         style="width:1140px;height:300px">

                    <div class="carousel-caption">
                        <h3>Building 3</h3>

                        <p>This is the Building 3 details.</p>
                    </div>
                </div>

                <div class="item">
                    <img class="img-responsive" src="../../../images/img_4.jpg" alt="Building 4"
                         style="width:1140px;height:300px">

                    <div class="carousel-caption">
                        <h3>Building 4</h3>

                        <p>This is the Building 4 details.</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@stop

@section('footer')
@stop

