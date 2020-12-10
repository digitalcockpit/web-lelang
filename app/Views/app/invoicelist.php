<?= $this->extend('layouts/admin') ?>
<?= $this->section('pagestyles') ?>
<!-- START: Page CSS-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<!-- END: Page CSS-->
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- START: Breadcrumbs-->
<div class="row ">
    <div class="col-12  align-self-center">
        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
            <div class="w-sm-100 mr-auto"><h4 class="mb-0">App Invoice List</h4></div>

            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">App</li>
                <li class="breadcrumb-item active"><a href="#">Invoice List</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END: Breadcrumbs-->

<!-- Edit Invoice -->
<div class="modal fade" id="editinvoice">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="icon-pencil"></i> Edit Invoice
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="icon-close"></i>
                </button>
            </div>
            <form class="edit-invoice-form">
                <div class="modal-body">                                               

                    <div class="form-group">
                        <label for="due-date" class="col-form-label">Due Date</label>
                        <input type="text" id="due-date" class="form-control" required="" >      
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-form-label">Status</label>
                        <select class="form-control" id="status">
                            <option value="generated-invoice">Generated</option>
                            <option value="paid-invoice">Paid</option>
                            <option value="pending-invoice">Pending</option>
                            <option value="canceled-invoice">Canceled</option>                                                           
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden"  id="edit-date">
                    <button type="submit" class="btn btn-primary add-todo">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- START: Card Data-->
<div class="row row-eq-height">
    <div class="col-12 col-lg-2 mt-3 todo-menu-bar flip-menu pr-lg-0">
        <a href="#" class="d-inline-block d-lg-none mt-1 flip-menu-close"><i class="icon-close"></i></a>
        <div class="card border h-100 invoice-menu-section">

            <ul class="nav flex-column invoice-menu">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-invoicetype="invoice">
                        <i class="fas fa-list-alt"></i> All
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-invoicetype="paid-invoice">
                        <i class="fas fa-money-check-alt"></i> Paid
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-invoicetype="pending-invoice">
                        <i class="far fa-money-bill-alt"></i> Pending
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="#" data-invoicetype="canceled-invoice">
                        <i class="far fa-window-close"></i> Canceled
                    </a>
                </li>                               

            </ul>         

        </div>  
    </div>
    <div class="col-12 col-lg-10 mt-3 pl-lg-0">
        <div class="card border h-100 invoice-list-section">

            <div class="view-invoice">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="card border-0">
                            <div class="card-header d-flex justify-content-between align-items-center">                               
                                <a href="#" class="bg-primary float-left mr-3  py-1 px-2 rounded text-white back-to-invoice">
                                    Back
                                </a><h4 class="card-title">Invoice# <span class="inv-no"></span></h4>                               
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td><address>
                                                    <strong>Your Store</strong><br>
                                                    2940 Rainbow Road Alhambra, CA 91801 California </address>
                                                <b>Telephone:</b> 123456789<br>
                                                <b>E-Mail:</b> demo@demo.com<br>
                                                <b>Web Site:</b> <a href="#">http://abc.com</a></td>
                                            <td><b>Date Added:</b> 26/09/2016<br>
                                                <b>Order ID:</b> 3135<br>
                                                <b>Payment Method:</b> Cash On Delivery<br>
                                                <b>Shipping Method:</b> Flat Shipping Rate<br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="card border-0">
                            <div class="card-body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td style="width: 50%;"><b>To</b></td>
                                            <td style="width: 50%;"><b>Ship To (if different address)</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><address>
                                                    2940  Rainbow Road<br>Alhambra, CA<br>91801 California </address></td>
                                            <td><address>
                                                    1424  Brown Avenue<br>Knoxville, TN<br>91801 Tennessee </address></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="card border-0">
                            <div class="card-body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td><b>Product</b></td>
                                            <td><b>Model</b></td>
                                            <td class="text-right"><b>Quantity</b></td>
                                            <td class="text-right"><b>Unit Price</b></td>
                                            <td class="text-right"><b>Total</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>HP LP3065 <br>
                                                &nbsp;<small> - Delivery Date: 2011-04-22</small>
                                            </td>
                                            <td>Product 21</td>
                                            <td class="text-right">1</td>
                                            <td class="text-right">$122.00</td>
                                            <td class="text-right">$122.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right" colspan="4"><b>Sub-Total</b></td>
                                            <td class="text-right">$100.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right" colspan="4"><b>Flat Shipping Rate</b></td>
                                            <td class="text-right">$5.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right" colspan="4"><b>Eco Tax (-2.00)</b></td>
                                            <td class="text-right">$4.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right" colspan="4"><b>VAT (20%)</b></td>
                                            <td class="text-right">$21.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right" colspan="4"><b>Total</b></td>
                                            <td class="text-right">$130.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="card redial-border-light redial-shadow">
                            <div class="card-body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td><b>Comment</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>This is comment section</td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card-header border-bottom p-1 d-flex">
                <a href="#" class="d-inline-block d-lg-none flip-menu-toggle"><i class="icon-menu"></i></a>
                <input type="text" class="form-control border-0 p-2 w-100 h-100 invoice-search" placeholder="Search ...">                               
            </div>
            <div class="card-body p-0">
                <div class="invoices list">

                    <div class="invoice"> 
                        <div class="invoice-content" data-status="generated-invoice">                                               
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Number: </p>
                                <p class="invoice-no">000001</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Client: </p>
                                <p class="cliname">Addison Nichols</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Date: </p>
                                <p class="invocie-date">20 June 2020</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Due Date: </p>
                                <p class="invoice-due-date">30 June 2020</p>
                            </div>
                            <div class="invoice-status-info">
                                <p class="mb-0 small">Status </p>
                                <p class="invoice-status"></p>
                            </div>
                            <div class="line-h-1 h5">   
                                <a class="text-success edit-invoice" href="#" data-toggle="modal" data-target="#editinvoice"><i class="icon-pencil"></i></a>
                                <a class="text-danger delete-invoice" href="#"><i class="icon-trash"></i></a>                                 
                            </div>
                        </div>
                    </div>
                    <div class="invoice paid-invoice" data-status="paid-invoice"> 
                        <div class="invoice-content">                                               
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Number: </p>
                                <p class="invoice-no">000002</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Client: </p>
                                <p class="cliname">Albert Watkins</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Date: </p>
                                <p class="invocie-date">02 June 2020</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Due Date: </p>
                                <p class="invoice-due-date">10 June 2020</p>
                            </div>
                            <div class="invoice-status-info">
                                <p class="mb-0 small">Status </p>
                                <p class="invoice-status"></p>
                            </div>
                            <div class="line-h-1 h5">   
                                <a class="text-success edit-invoice" href="#" data-toggle="modal" data-target="#editinvoice"><i class="icon-pencil"></i></a>
                                <a class="text-danger delete-invoice" href="#"><i class="icon-trash"></i></a>                                 
                            </div>
                        </div>
                    </div>
                    <div class="invoice pending-invoice" data-status="pending-invoice"> 
                        <div class="invoice-content">                                               
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Number: </p>
                                <p class="invoice-no">000003</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Client: </p>
                                <p class="cliname">Johnny Fernandez</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Date: </p>
                                <p class="invocie-date">28 May 2020</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Due Date: </p>
                                <p class="invoice-due-date">30 May 2020</p>
                            </div>
                            <div class="invoice-status-info">
                                <p class="mb-0 small">Status </p>
                                <p class="invoice-status"></p>
                            </div>
                            <div class="line-h-1 h5">   
                                <a class="text-success edit-invoice" href="#" data-toggle="modal" data-target="#editinvoice"><i class="icon-pencil"></i></a>
                                <a class="text-danger delete-invoice" href="#"><i class="icon-trash"></i></a>                                 
                            </div>
                        </div>
                    </div>
                    <div class="invoice canceled-invoice" data-status="canceled-invoice"> 
                        <div class="invoice-content">                                               
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Number: </p>
                                <p class="invoice-no">000004</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Client: </p>
                                <p class="cliname">Gilbert Edwards</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Date: </p>
                                <p class="invocie-date">12 May 2020</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Due Date: </p>
                                <p class="invoice-due-date">15 May 2020</p>
                            </div>
                            <div class="invoice-status-info">
                                <p class="mb-0 small">Status </p>
                                <p class="invoice-status"></p>
                            </div>
                            <div class="line-h-1 h5">   
                                <a class="text-success edit-invoice" href="#" data-toggle="modal" data-target="#editinvoice"><i class="icon-pencil"></i></a>
                                <a class="text-danger delete-invoice" href="#"><i class="icon-trash"></i></a>                                 
                            </div>
                        </div>
                    </div>
                    <div class="invoice" data-status="generated-invoice"> 
                        <div class="invoice-content">                                               
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Number: </p>
                                <p class="invoice-no">000005</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Client: </p>
                                <p class="cliname">Norman Hill</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Date: </p>
                                <p class="invocie-date">22 April 2020</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Due Date: </p>
                                <p class="invoice-due-date">30 April 2020</p>
                            </div>
                            <div class="invoice-status-info">
                                <p class="mb-0 small">Status </p>
                                <p class="invoice-status"></p>
                            </div>
                            <div class="line-h-1 h5">   
                                <a class="text-success edit-invoice" href="#" data-toggle="modal" data-target="#editinvoice"><i class="icon-pencil"></i></a>
                                <a class="text-danger delete-invoice" href="#"><i class="icon-trash"></i></a>                                 
                            </div>
                        </div>
                    </div>
                    <div class="invoice pending-invoice" data-status="pending-invoice"> 
                        <div class="invoice-content">                                               
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Number: </p>
                                <p class="invoice-no">000006</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Client: </p>
                                <p class="cliname">Samantha Murphy</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Date: </p>
                                <p class="invocie-date">13 April 2020</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Due Date: </p>
                                <p class="invoice-due-date">18 April 2020</p>
                            </div>
                            <div class="invoice-status-info">
                                <p class="mb-0 small">Status </p>
                                <p class="invoice-status"></p>
                            </div>
                            <div class="line-h-1 h5">   
                                <a class="text-success edit-invoice" href="#" data-toggle="modal" data-target="#editinvoice"><i class="icon-pencil"></i></a>
                                <a class="text-danger delete-invoice" href="#"><i class="icon-trash"></i></a>                                 
                            </div>
                        </div>
                    </div>
                    <div class="invoice paid-invoice" data-status="paid-invoice"> 
                        <div class="invoice-content">                                               
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Number: </p>
                                <p class="invoice-no">000007</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Client: </p>
                                <p class="cliname">Addison Nichols</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Date: </p>
                                <p class="invocie-date">20 June 2020</p>
                            </div>
                            <div class="invoice-info">
                                <p class="mb-0 small">Invoice Due Date: </p>
                                <p class="invoice-due-date">30 June 2020</p>
                            </div>
                            <div class="invoice-status-info">
                                <p class="mb-0 small">Status </p>
                                <p class="invoice-status"></p>
                            </div>
                            <div class="line-h-1 h5">   
                                <a class="text-success edit-invoice" href="#" data-toggle="modal" data-target="#editinvoice"><i class="icon-pencil"></i></a>
                                <a class="text-danger delete-invoice" href="#"><i class="icon-trash"></i></a>                                 
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
<?= $this->section('pagescript') ?>
<!-- START: Page JS-->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="<?php echo base_url('dist/js/app.invoicelist.js'); ?>"></script>  
<!-- END: Page JS-->
<?= $this->endSection() ?>