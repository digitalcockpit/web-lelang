<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<!-- START: Breadcrumbs-->
<div class="row ">
    <div class="col-12  align-self-center">
        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Form Wizard</h4></div>

            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Form</li>
                <li class="breadcrumb-item active"><a href="#">Wizard</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END: Breadcrumbs-->

<!-- START: Card Data-->
<div class="row">
    <div class="col-12 col-sm-12">
        <div class="row">
            <div class="col-12 col-md-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="wizard mb-4">                                            
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs d-flex mb-3">
                                <li class="nav-item mr-auto">
                                    <a class="nav-link position-relative round-tab text-left p-0 active border-0" data-toggle="tab" href="#id1"> 
                                        <i class="icon-user position-relative text-white h5 mb-3"></i>
                                        <small class="d-none d-md-block ">Personal Information</small>
                                    </a>
                                </li>
                                <li class="nav-item mx-auto">
                                    <a class="nav-link position-relative round-tab text-sm-center text-left p-0 border-0" data-toggle="tab" href="#id2"> 
                                        <i class="icon-key position-relative text-white h5 mb-3"></i>
                                        <small class="d-none d-md-block">Password Information</small>
                                    </a>
                                </li>
                                <li class="nav-item ml-auto">
                                    <a class="nav-link position-relative round-tab text-sm-right text-left p-0 border-0" data-toggle="tab" href="#id3"> 
                                        <i class="icon-credit-card position-relative text-white h5 mb-3"></i>
                                        <small class="d-none d-md-block">Confirmation</small>
                                    </a>
                                </li>
                            </ul>                                          

                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="id1">
                                    <div class="form">
                                        <div class="form-group">
                                            <label class=" ">Email address</label>
                                            <input type="text" class="form-control bg-transparent" placeholder="">
                                            <small class="form-text">You will occasionally receive account related emails.</small>
                                        </div>
                                        <div class="form-group">
                                            <label class=" ">Username</label>
                                            <input type="text" class="form-control bg-transparent" placeholder="">
                                            <small class="form-text">Only letters, numbers, and underscores are allowed.</small>
                                        </div>  
                                        <button type="button" class="btn float-right btn-primary nexttab">Next</button>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="id2">
                                    <div class="form">                                                   
                                        <div class="form-group">
                                            <label class=" ">Password</label>
                                            <input type="password" class="form-control bg-transparent" placeholder="">
                                            <small class="form-text">6-character minimum; case sensitive.</small>
                                        </div>
                                        <div class="form-group">
                                            <label class=" ">Confirm Password</label>
                                            <input type="password" class="form-control bg-transparent" placeholder="">
                                            <small class="form-text">6-character minimum; case sensitive.</small>
                                        </div>
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-primary prevtab">Previous</button>
                                            <button type="button" class="btn btn-primary nexttab ml-auto">Next</button>

                                        </div>
                                    </div>    
                                </div>
                                <div class="tab-pane fade" id="id3">
                                    <div class="form p-5 text-center">
                                        <h3>Thank you !</h3>
                                        <p>Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet.</p>
                                        <button type="button" class="btn btn-primary prevtab">Previous</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-12 col-md-6 mt-3">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="wizard dark  mb-4">                                            
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs d-flex mb-3">
                                <li class="nav-item mr-auto">
                                    <a class="nav-link position-relative round-tab text-left p-0 active border-0" data-toggle="tab" href="#id4"> 
                                        <i class="icon-user position-relative  h5 mb-3"></i>
                                        <small class="d-none d-md-block ">Personal Information</small>
                                    </a>
                                </li>
                                <li class="nav-item mx-auto">
                                    <a class="nav-link position-relative round-tab text-sm-center text-left p-0 border-0" data-toggle="tab" href="#id5"> 
                                        <i class="icon-key position-relative  h5 mb-3"></i>
                                        <small class="d-none d-md-block">Password Information</small>
                                    </a>
                                </li>
                                <li class="nav-item ml-auto">
                                    <a class="nav-link position-relative round-tab text-sm-right text-left p-0 border-0" data-toggle="tab" href="#id6"> 
                                        <i class="icon-credit-card position-relative  h5 mb-3"></i>
                                        <small class="d-none d-md-block">Confirmation</small>
                                    </a>
                                </li>
                            </ul>                                          

                            <div class="tab-content text-white">
                                <div class="tab-pane fade active show" id="id4">
                                    <div class="form">
                                        <div class="form-group">
                                            <label class=" ">Email address</label>
                                            <input type="text" class="form-control bg-transparent" placeholder="">
                                            <small class="form-text">You will occasionally receive account related emails.</small>
                                        </div>
                                        <div class="form-group">
                                            <label class=" ">Username</label>
                                            <input type="text" class="form-control bg-transparent" placeholder="">
                                            <small class="form-text">Only letters, numbers, and underscores are allowed.</small>
                                        </div>  
                                        <button type="button" class="btn float-right btn-light nexttab">Next</button>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="id5">
                                    <div class="form">                                                   
                                        <div class="form-group">
                                            <label class=" ">Password</label>
                                            <input type="password" class="form-control bg-transparent" placeholder="">
                                            <small class="form-text">6-character minimum; case sensitive.</small>
                                        </div>
                                        <div class="form-group">
                                            <label class=" ">Confirm Password</label>
                                            <input type="password" class="form-control bg-transparent" placeholder="">
                                            <small class="form-text">6-character minimum; case sensitive.</small>
                                        </div>
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-light prevtab">Previous</button>
                                            <button type="button" class="btn btn-light nexttab ml-auto">Next</button>

                                        </div>
                                    </div>    
                                </div>
                                <div class="tab-pane fade" id="id6">
                                    <div class="form p-5 text-center">
                                        <h3>Thank you !</h3>
                                        <p>Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet.</p>
                                        <button type="button" class="btn btn-light prevtab">Previous</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="wizard-tab mb-4">
                            <ul class="nav nav-tabs d-block d-sm-flex">
                                <li class="nav-item mr-auto mb-4">
                                    <a class="nav-link p-0 active" data-toggle="tab" href="#tab1"> 
                                        <div class="d-flex">
                                            <div class="mr-3 mb-0 h1">1</div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0 text-uppercase font-weight-bold">Basic</h6>
                                                Basic account info
                                            </div>
                                        </div>

                                    </a>
                                </li>
                                <li class="nav-item mr-auto mb-4">
                                    <a class="nav-link p-0" data-toggle="tab" href="#tab2">                                                    
                                        <div class="d-flex">
                                            <div class="mr-3 mb-0 h1">2</div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0 text-uppercase font-weight-bold">Account</h6>
                                                Account info
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="nav-item mb-4">
                                    <a class="nav-link p-0" data-toggle="tab" href="#tab3"> 
                                        <div class="d-flex">
                                            <div class="mr-3 h1 mb-0">3</div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0 text-uppercase font-weight-bold">Confirmation</h6>
                                                Thanks for information
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="tab1">
                                <div class="form">
                                    <div class="form-group">
                                        <label class=" ">Email address</label>
                                        <input type="text" class="form-control bg-transparent" placeholder="">
                                        <small class="form-text">You will occasionally receive account related emails.</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" ">Username</label>
                                        <input type="text" class="form-control bg-transparent" placeholder="">
                                        <small class="form-text">Only letters, numbers, and underscores are allowed.</small>
                                    </div>  
                                    <button type="button" class="btn float-right btn-primary nexttab">Next</button>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <div class="form">                                                   
                                    <div class="form-group">
                                        <label class=" ">Password</label>
                                        <input type="password" class="form-control bg-transparent" placeholder="">
                                        <small class="form-text">6-character minimum; case sensitive.</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" ">Confirm Password</label>
                                        <input type="password" class="form-control bg-transparent" placeholder="">
                                        <small class="form-text">6-character minimum; case sensitive.</small>
                                    </div>
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-primary prevtab">Previous</button>
                                        <button type="button" class="btn btn-primary nexttab ml-auto">Next</button>

                                    </div>
                                </div>    
                            </div>
                            <div class="tab-pane fade" id="tab3">
                                <div class="form p-5 text-center">
                                    <h3>Thank you !</h3>
                                    <p>Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet.</p>
                                    <button type="button" class="btn btn-primary prevtab">Previous</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-12 col-md-6 mt-3">
                <div class="card bg-primary">
                    <div class="card-body wizard-dark">

                        <ul class="nav nav-tabs d-block d-sm-flex mb-4">
                            <li class="nav-item mr-auto mb-4">
                                <a class="nav-link p-0 active" data-toggle="tab" href="#tab4"> 
                                    <div class="d-flex text-white">
                                        <div class="mr-3 mb-0 h1">1</div>
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0 text-uppercase font-weight-bold">Basic</h6>
                                            Basic account info
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="nav-item mr-auto mb-4">
                                <a class="nav-link p-0" data-toggle="tab" href="#tab5">                                                    
                                    <div class="d-flex text-white">
                                        <div class="mr-3 mb-0 h1">2</div>
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0 text-uppercase font-weight-bold">Account</h6>
                                            Account info
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item mb-4">
                                <a class="nav-link p-0" data-toggle="tab" href="#tab6"> 
                                    <div class="d-flex text-white">
                                        <div class="mr-3 h1 mb-0">3</div>
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0 text-uppercase font-weight-bold">Confirmation</h6>
                                            Thanks for information
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content text-white">
                            <div class="tab-pane fade active show" id="tab4">
                                <div class="form">
                                    <div class="form-group">
                                        <label class=" ">Email address</label>
                                        <input type="text" class="form-control bg-transparent" placeholder="">
                                        <small class="form-text">You will occasionally receive account related emails.</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" ">Username</label>
                                        <input type="text" class="form-control bg-transparent" placeholder="">
                                        <small class="form-text">Only letters, numbers, and underscores are allowed.</small>
                                    </div>  
                                    <button type="button" class="btn float-right btn-light nexttab">Next</button>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab5">
                                <div class="form">                                                   
                                    <div class="form-group">
                                        <label class=" ">Password</label>
                                        <input type="password" class="form-control bg-transparent" placeholder="">
                                        <small class="form-text">6-character minimum; case sensitive.</small>
                                    </div>
                                    <div class="form-group">
                                        <label class=" ">Confirm Password</label>
                                        <input type="password" class="form-control bg-transparent" placeholder="">
                                        <small class="form-text">6-character minimum; case sensitive.</small>
                                    </div>
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-light prevtab">Previous</button>
                                        <button type="button" class="btn btn-light nexttab ml-auto">Next</button>

                                    </div>
                                </div>    
                            </div>
                            <div class="tab-pane fade" id="tab6">
                                <div class="form p-5 text-center">
                                    <h3>Thank you !</h3>
                                    <p>Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet.</p>
                                    <button type="button" class="btn btn-light prevtab">Previous</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-12 col-md-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row p-3">
                            <ul class="col-sm-3 nav nav-tabs d-block d-sm-flex mb-4">
                                <li class="nav-item  mb-4">
                                    <a class="nav-link p-0 active" data-toggle="tab" href="#tab7"> 
                                        <div class="d-flex">
                                            <div class="mr-3 mb-0 h1">1</div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0 text-uppercase font-weight-bold">Basic</h6>
                                                Basic account info
                                            </div>
                                        </div>

                                    </a>
                                </li>
                                <li class="nav-item  mb-4">
                                    <a class="nav-link p-0" data-toggle="tab" href="#tab8">                                                    
                                        <div class="d-flex">
                                            <div class="mr-3 mb-0 h1">2</div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0 text-uppercase font-weight-bold">Account</h6>
                                                Account info
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="nav-item mb-4">
                                    <a class="nav-link p-0" data-toggle="tab" href="#tab9"> 
                                        <div class="d-flex">
                                            <div class="mr-3 h1 mb-0">3</div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0 text-uppercase font-weight-bold">Confirmation</h6>
                                                Thanks for information
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>                                       
                            <div class="tab-content col-sm-9">
                                <div class="tab-pane fade active show" id="tab7">
                                    <div class="form">
                                        <div class="form-group">
                                            <label class=" ">Email address</label>
                                            <input type="text" class="form-control bg-transparent" placeholder="">
                                            <small class="form-text">You will occasionally receive account related emails.</small>
                                        </div>
                                        <div class="form-group">
                                            <label class=" ">Username</label>
                                            <input type="text" class="form-control bg-transparent" placeholder="">
                                            <small class="form-text">Only letters, numbers, and underscores are allowed.</small>
                                        </div>  
                                        <button type="button" class="btn float-right btn-primary nexttab">Next</button>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab8">
                                    <div class="form">                                                   
                                        <div class="form-group">
                                            <label class=" ">Password</label>
                                            <input type="password" class="form-control bg-transparent" placeholder="">
                                            <small class="form-text">6-character minimum; case sensitive.</small>
                                        </div>
                                        <div class="form-group">
                                            <label class=" ">Confirm Password</label>
                                            <input type="password" class="form-control bg-transparent" placeholder="">
                                            <small class="form-text">6-character minimum; case sensitive.</small>
                                        </div>
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-primary prevtab">Previous</button>
                                            <button type="button" class="btn btn-primary nexttab ml-auto">Next</button>

                                        </div>
                                    </div>    
                                </div>
                                <div class="tab-pane fade" id="tab9">
                                    <div class="form p-5 text-center">
                                        <h3>Thank you !</h3>
                                        <p>Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet.</p>
                                        <button type="button" class="btn btn-primary prevtab">Previous</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-12 col-md-6 mt-3">
                <div class="card bg-primary">
                    <div class="card-body wizard-dark">
                        <div class="row p-3">
                            <ul class="col-sm-3 nav nav-tabs d-block d-sm-flex mb-4">
                                <li class="nav-item  mb-4">
                                    <a class="nav-link p-0 active" data-toggle="tab" href="#tab10"> 
                                        <div class="d-flex text-white">
                                            <div class="mr-3 mb-0 h1">1</div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0 text-uppercase font-weight-bold">Basic</h6>
                                                Basic account info
                                            </div>
                                        </div>

                                    </a>
                                </li>
                                <li class="nav-item  mb-4">
                                    <a class="nav-link p-0" data-toggle="tab" href="#tab11">                                                    
                                        <div class="d-flex text-white">
                                            <div class="mr-3 mb-0 h1">2</div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0 text-uppercase font-weight-bold">Account</h6>
                                                Account info
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="nav-item mb-4">
                                    <a class="nav-link p-0" data-toggle="tab" href="#tab12"> 
                                        <div class="d-flex text-white">
                                            <div class="mr-3 h1 mb-0">3</div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0 text-uppercase font-weight-bold">Confirmation</h6>
                                                Thanks for information
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>                                       
                            <div class="tab-content col-sm-9  text-white">
                                <div class="tab-pane fade active show" id="tab10">
                                    <div class="form">
                                        <div class="form-group">
                                            <label class=" ">Email address</label>
                                            <input type="text" class="form-control bg-transparent" placeholder="">
                                            <small class="form-text">You will occasionally receive account related emails.</small>
                                        </div>
                                        <div class="form-group">
                                            <label class=" ">Username</label>
                                            <input type="text" class="form-control bg-transparent" placeholder="">
                                            <small class="form-text">Only letters, numbers, and underscores are allowed.</small>
                                        </div>  
                                        <button type="button" class="btn float-right btn-light nexttab">Next</button>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab11">
                                    <div class="form">                                                   
                                        <div class="form-group">
                                            <label class=" ">Password</label>
                                            <input type="password" class="form-control bg-transparent" placeholder="">
                                            <small class="form-text">6-character minimum; case sensitive.</small>
                                        </div>
                                        <div class="form-group">
                                            <label class=" ">Confirm Password</label>
                                            <input type="password" class="form-control bg-transparent" placeholder="">
                                            <small class="form-text">6-character minimum; case sensitive.</small>
                                        </div>
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-light prevtab">Previous</button>
                                            <button type="button" class="btn btn-light nexttab ml-auto">Next</button>

                                        </div>
                                    </div>    
                                </div>
                                <div class="tab-pane fade" id="tab12">
                                    <div class="form p-5 text-center">
                                        <h3>Thank you !</h3>
                                        <p>Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet.</p>
                                        <button type="button" class="btn btn-light prevtab">Previous</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

    </div>
</div>
<!-- END: Card DATA-->
<?= $this->endSection() ?>

