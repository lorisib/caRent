@extends('layouts.front')
@section('title', 'cart')

@section('content')
<section class="vh-100  bg-light">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            @if(count(Cart::getContent()) <= 0)
            <section class="vh-100  bg-light">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <p><span class="h2">Shopping Cart </span><span class="h4">(1 item in your cart)</span></p>
                <div class="card mb-4">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <img src="https://lh3.googleusercontent.com/RkEqInQwPIEM5Kt76wwdYWI4VbK2jfscBxsktHBkUG6pSk9FNIpSFlHwV7molYNKWfyZUtNsu6rO6EcGzOijBMd6patFkx2ahcjgT9bUyQbJ-vb3HLU-yi9oc8rYAuMyrZoeN_MWGfpeWBKjeIY5ZMkYDP7tGLdVB4RJ8Dquod0Vfb2kw3dyutgdFR_viub3PCt3c77hbdyoXofr5Shcvpsz-iAgQ_M-knRWRyR2trxHh5Llpey7-BTiFO-fAucas6ZY2MYt1E5meHcf3aaweKhv5i3WcwiPWg2A88no1xIHYbcFTwB5ESDayvA6Y-Fr1CCANnAIVyYLDnuFagFN61X28Lazst6310lnJEGy_QykTS68myOOAD44Wi8srr25rAlSNF0c1PP8gUB5bm9FV10_XDQSd77bfdcHUhUU185q1aqe1r8kKH6onpW3phNzvY3_p-drNWz146JHVuxypU4YI1oTk3Dzmo7h1c1LwdAaEFm6VfPO6_A7qAWv4my2dN-aZV-ysEcCJzYN7PafnHhBLbnQeFV2ATZR9z5BkduBGnt_cfiqPJWPA172PjyGgjGzWKbFu1T8vbRt7UdDte21Jaui5V_DG_4HLdD_XSMFakOWRFBjRT-yrOvw7m3ufskMU_JrNtOEGxxBI0jvrK7Ihvv_rNW5nkvIgzr6qdp3NxnuF1ZFSvpgvXvcN3ReOwdp5oPzx8oKZVtDZCXCTtiLzYJXHg4YiQWkTLRB29I3ReOFn7e6RckVkvmM9BcHunWqUhZE-zM9CkDa9S0XN_kIczsAdAFqFMuSIzcSjqzOr3pwDT_zo6JeSb_kqySo1cT7FPNKlf4v3b4ZUv3q2I5D2LaoqPyyALTSFsotBOpddS-oT6UjyRiZl9Gli5gIdS6tHp22qBjCw8fi7wmX_ZMXmaC_-dlO8Mlp9TVLttm4fIJP=w1743-h980-no?authuser=0"class="img-fluid" alt="Generic placeholder image">
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="small text-muted mb-4 pb-2">Name</p>
                                    <p class="lead fw-normal mb-0">BMW m340i</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="small text-muted mb-4 pb-2">Num. of days</p>
                                    <a href=""class="btn btn-sm btn-primary text-enter">- </a>
                                    <p class="lead fw-normal mb-0">1</p> 
                                    <a href=""class="btn btn-sm btn-primary">+</a>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="small text-muted mb-4 pb-2">Price</p>
                                    <p class="lead fw-normal mb-0">$799</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="small text-muted mb-4 pb-2">Total</p>
                                    <p class="lead fw-normal mb-0">$799</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5">
                    <div class="card-body p-4">
                        <div class="float-end">
                            <p class="mb-0 me-5 d-flex align-items-center"><span class="small text-muted me-2">Order total:</span> <span class="lead fw-normal">$799</span></p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-sm btn-primary text-enter m-2" onclick="return comfirm('Are you sure');"><h5>dissmis order</h5></button>
                </div>
            </div>
            <div class="checkout my-5">
                <h3 class="mt-5">checkout</h3>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="fullname">fullname</label>
                <input type="text" name="fullname" id="fullname" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="fullname">email</label>
                <input type="text" name="email" id="email" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="fullname">address</label>
                <input type="text" name="addres" id="addres" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="fullname">phone</label>
                <input type="text" name="phone" id="phone" class="form-control" required/>
            </div>
            <button type="button" class="btn btn-sm btn-primary text-enter m-2" onclick="return comfirm('Are you sure');"><h5>chechkout</h5></button>
        </form>

    </div>
</div>

        </div>
    </div>
    
</section>




            @else
            <div class="alert alert-warning" role="alert">your cart is empty!</div>

            @endif
        </div>
    </div>
</section>




@endsection                