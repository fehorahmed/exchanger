@extends('forntend.layout.main')

@section('content')

<!-- Start Pricing section
		=========================================== -->
        <section class="pricing-table section" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="title text-center">
                            <h4>Easy Pricing</h4>
                            <h2>Pricing.</h2>
                            <span class="border"></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque,
                                obcaecati atque sit!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="nav nav-pills mb-6 pricing-tab justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                    aria-controls="pills-home" aria-selected="true">Buy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Sell</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="pricing-item">
                                            <h3>Get 0.112 ETH</h3>
                                            <div class="pricing-body">
                                                <div class="price">
                                                    <span>€803</span>
                                                    <span class="sup">95</span>
                                                </div>
                                                <div class="progress" data-percent="45%">
                                                    <div class="progress-bar"></div>
                                                </div>
                                                <p>You get 0.0364727 Bitcoins</p>
                                                <a class="btn btn-main" href="#">Buy</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="pricing-item">
                                            <h3>Get 0.112 ETH</h3>
                                            <div class="pricing-body">
                                                <div class="price">
                                                    <span>€283</span>
                                                    <span class="sup">15</span>
                                                </div>
                                                <div class="progress" data-percent="60%">
                                                    <div class="progress-bar"></div>
                                                </div>
                                                <p>You get 0.0364727 Bitcoins</p>
                                                <a class="btn btn-main" href="#">Buy</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="pricing-item">
                                            <h3>Get 0.112 ETH</h3>
                                            <div class="pricing-body">
                                                <div class="price">
                                                    <span>€122</span>
                                                    <span class="sup">00</span>
                                                </div>
                                                <div class="progress" data-percent="75%">
                                                    <div class="progress-bar"></div>
                                                </div>
                                                <p>You get 0.0364727 Bitcoins</p>
                                                <a class="btn btn-main" href="#">Buy</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="pricing-item">
                                            <h3>Get 0.112 ETH</h3>
                                            <div class="pricing-body">
                                                <div class="price">
                                                    <span>€803</span>
                                                    <span class="sup">95</span>
                                                </div>
                                                <div class="progress" data-percent="45%">
                                                    <div class="progress-bar"></div>
                                                </div>
                                                <p>You get 0.0364727 Bitcoins</p>
                                                <a class="btn btn-main" href="#">Sell</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="pricing-item">
                                            <h3>Get 0.112 ETH</h3>
                                            <div class="pricing-body">
                                                <div class="price">
                                                    <span>€283</span>
                                                    <span class="sup">15</span>
                                                </div>
                                                <div class="progress" data-percent="60%">
                                                    <div class="progress-bar"></div>
                                                </div>
                                                <p>You get 0.0364727 Bitcoins</p>
                                                <a class="btn btn-main" href="#">Sell</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="pricing-item">
                                            <h3>Get 0.112 ETH</h3>
                                            <div class="pricing-body">
                                                <div class="price">
                                                    <span>€122</span>
                                                    <span class="sup">00</span>
                                                </div>
                                                <div class="progress" data-percent="75%">
                                                    <div class="progress-bar"></div>
                                                </div>
                                                <p>You get 0.0364727 Bitcoins</p>
                                                <a class="btn btn-main" href="#">Sell</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-pricing text-center mt-30">
                            <p>The price will be recalculated in 27 seconds</p>
                            <p><a href="">How is the price calculated ?</a></p>
                        </div>
                    </div>
                </div>
                <form class="custom-pricing-form">
                    <h3 class="text-center">You can also input a custom amount:</h3>
                    <div class="form-row justify-content-center">
                        <div class="col-md-4">
                            <select name="first_value" onchange="test()" class="form-control mb-2" id="first_value">
                                <option value="" >select one</option>
                                <option value="1">BKAS</option>
                                <option value="2">ROCKET</option>
                            </select>
                            <input type="text" onkeyup="test()" class="form-control mb-2" id="inlineFormInput" placeholder="0">
                        </div>
                        <div class="col-md-4">
                            <select name="second_value" onchange="test()" class="form-control mb-2" id="second_value">
                                <option value="1">BKAS</option>
                                <option value="2">ROCKET</option>
                            </select>
                            <input type="text" readonly class="form-control mb-2" id="inlineFormInput2" placeholder="0">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-main mb-2">Buy</button>
                        </div>
                    </div>
                </form>
            </div> <!-- End container -->
        </section> <!-- End section -->
@endsection

@section('script')
<script>

function test(){

    function per(num, z){
        return (z / 100) * num;
       // return 0.02;
    }

//bkas==1
//roket==2

    var x= document.getElementById('first_value').value;
    var first= document.getElementById('inlineFormInput').value;
    var y= document.getElementById('second_value').value;

    if(x==1 && y==1){
         var c= first- per( first , 2);

        document.getElementById('inlineFormInput2').value=c;
    }else if(x==1 && y==2){
        var c= first- per( first , 4);

        document.getElementById('inlineFormInput2').value=c;
    }else if(x==2 && y==1){
        var c= first- per( first , 4);

        document.getElementById('inlineFormInput2').value=c;
    }else if(x==2 && y==2){
        var c= first- per( first , 2);

        document.getElementById('inlineFormInput2').value=c;
    }





}

</script>
@endsection

