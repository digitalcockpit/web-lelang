<?= $this->extend('layouts/admin') ?>
<?= $this->section('pagestyles') ?>
<!-- START: Page CSS-->
<link rel="stylesheet"  href="<?php echo base_url('dist/vendors/quill/quill.snow.css'); ?>">
<!-- END: Page CSS-->
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- START: Breadcrumbs-->
    <div class="row ">
        <div class="col-12  align-self-center">
            <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                <div class="w-sm-100 mr-auto"><h4 class="mb-0">App Mail</h4></div>

                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">App</li>
                    <li class="breadcrumb-item active"><a href="#">Mail</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- END: Breadcrumbs-->

    <!-- START: Card Data-->
    <div class="row">
        <div class="col-12 col-lg-3 col-xl-2 mb-4 mt-3 pr-lg-0 flip-menu">
            <a href="#" class="d-inline-block d-lg-none mt-1 flip-menu-close"><i class="icon-close"></i></a>
            <div class="card border h-100 mail-menu-section ">
                <div class="media d-block text-center  p-3">
                    <a href="#" class="bg-primary w-100 d-block py-2 px-2 rounded text-white" data-toggle="modal" data-target="#composeemail">
                        <i class="icon-plus align-middle text-white"></i> <span>Compose Email</span>
                    </a>
                </div>

                <!-- Compose Email -->
                <div class="modal fade" id="composeemail">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    <i class="icon-pencil"></i> New Email
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="icon-close"></i>
                                </button>
                            </div>

                            <form>
                                <div class="modal-body">  
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="To.">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="CC.">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject.">
                                    </div>
                                    <div class="form-group">
                                        <div id="snow-container" class="height-175"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="file">
                                            <input type="file" id="file" aria-label="File browser example">
                                            <span class="file-custom"></span>
                                        </label>
                                    </div> </div>                                         
                                <div class="modal-footer">                                                 
                                    <button type="submit" class="btn btn-primary send-email">Send</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>


                <ul class="list-unstyled inbox-nav  mb-0 mt-2 mail-menu">
                    <li class="nav-item"><a href="#" data-mailtype="inbox" class="nav-link active"><i class="icon-envelope pr-2"></i> Inbox <span class="ml-auto badge badge-pill badge-success bg-success">8</span></a></li>
                    <li class="nav-item"><a href="#" data-mailtype="sent" class="nav-link"><i class="icon-paper-plane pr-2"></i> Send Mail</a></li>
                    <li class="nav-item"><a href="#" data-mailtype="draft" class="nav-link"><i class="icon-pencil pr-2"></i> Draft</a></li>
                    <li class="nav-item"><a href="#" data-mailtype="archive" class="nav-link"><i class="icon-folder-alt pr-2"></i> Archive</a></li>
                    <li class="nav-item"><a href="#" data-mailtype="trash" class="nav-link"><i class="icon-trash pr-2"></i> Trash</a></li>
                </ul>
                <div class="eagle-divider"></div>
                <div class="card-header py-1 mt-4">                                 
                    <h6 class="mb-0">Labels</h6>
                </div>
                <ul class="nav flex-column font-weight-bold mt-3 mail-label" id="myTab1" role="tablist">
                    <li class="nav-item  px-3">
                        <a class="nav-link text-primary" data-label="business-mail" href="#" >
                            <i class="icon-pin"></i> Business
                        </a>
                    </li>
                    <li class="nav-item  px-3">
                        <a class="nav-link text-danger" data-label="private-mail" href="#" >
                            <i class="icon-pin"></i> Private
                        </a>
                    </li>
                    <li class="nav-item  px-3">
                        <a class="nav-link text-warning" data-label="social-mail" href="#">
                            <i class="icon-pin"></i> Social
                        </a>
                    </li>
                    <li class="nav-item  px-3 ">
                        <a class="nav-link text-success" data-label="personal-mail" href="#">
                            <i class="icon-pin"></i> Personal
                        </a>
                    </li>
                    <li class="nav-item px-3 ">
                        <a class="nav-link text-info" data-label="work-mail" href="#">
                            <i class="icon-pin"></i> Work
                        </a>
                    </li>

                </ul>

            </div>
        </div>
        <div class="col-12 col-lg-9 col-xl-10 mb-4 mt-3 pl-lg-0">
            <div class="card border  h-100 mail-list-section">
                <div class="view-email">
                    <div class="card-body">
                        <a href="#" class="bg-primary float-left mr-3  py-1 px-2 rounded text-white back-to-email" >
                            Back
                        </a>
                        <h5 class="view-subject mb-3">Mail Subject</h5>
                        <div class="media mb-5 mt-5">
                            <div class="align-self-center">
                                <img src="dist/images/author1.jpg" alt="" class="img-fluid rounded-circle d-flex mr-3" width="40">
                            </div>
                            <div class="media-body">
                                <h6 class="mb-0 view-author">Jeanette R. Brooks</h6>  
                                <small class="view-date">Today at 10:31 Pm</small>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p>It was popularised in the 1960s with the release Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                        <p>There are many variations of passages of Lorem IpsumLorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of.</p>
                        <div class="eagle-divider my-3"></div>
                        <p><i class="fa fa-paperclip pr-2"></i> Attachment 2</p>
                        <div class="row megnify-popup">
                            <div class="col-12 col-sm-6 col-xl-3 mb-4 mb-sm-0">
                                <div class="card eagle-border-light text-center">
                                    <a class="btn-gallery" href="dist/images/post1.jpg"><img src="dist/images/post1.jpg" alt="" class="img-fluid rounded-top"></a>
                                    <div class="card-body py-2">
                                        Profile Pic ( 1.69 mb )
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="card eagle-border-light text-center">
                                    <a class="btn-gallery" href="dist/images/post2.jpg"><img src="dist/images/post2.jpg" alt="" class="img-fluid rounded-top"></a>
                                    <div class="card-body py-2">
                                        Profile Pic ( 1 mb )
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header border-bottom p-2 d-flex">
                    <a href="#" class="d-inline-block d-lg-none flip-menu-toggle"><i class="icon-menu"></i></a>
                    <input type="text" class="form-control border-0  w-100 h-100 mail-search" placeholder="Search ...">
                </div>
                <div class="card-body p-0">
                    <div class="row m-0 border-bottom theme-border">
                        <div class="col-12 px-2 py-3 d-flex mail-toolbar">
                            <div class="check d-inline-block mr-3">
                                <label class="chkbox">All
                                    <input name="all" value="" type="checkbox" class="checkall">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <a href="#" class="ml-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-bell"></i></a>
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right bulk-mail-type">
                                <a class="dropdown-item" href="#" data-mailtype="business-mail" ><span class="dot bg-primary"></span> Business</a>
                                <a class="dropdown-item" href="#" data-mailtype="private-mail"><span class="dot bg-danger"></span> Private</a>
                                <a class="dropdown-item" href="#" data-mailtype="social-mail"><span class="dot bg-warning"></span> Social</a>
                                <a class="dropdown-item" href="#" data-mailtype="personal-mail"><span class="dot bg-success"></span> Personal</a>
                                <a class="dropdown-item" href="#" data-mailtype="work-mail"><span class="dot bg-info"></span> Work</a>
                            </div>
                            <a href="#" class="bulk-star"><i class="icon-star"></i></a>                                        
                            <div>
                                <a href="#" class="mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-right mail-bulk-action">
                                    <a class="dropdown-item mailread" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                    <a class="dropdown-item mailunread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                    <a class="dropdown-item delete" href="#"><i class="icon-trash"></i> Delete</a>                                        
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="scrollertodo">
                        <ul class="mail-app list-unstyled">
                            <li class="py-3 px-2 mail-item inbox unread personal-mail starred important">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Nathan S. Johnson</span> 
                                        <p class="mail-subject">Aenean ligula porttitor consequat vitae eleifend enim.</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="pill-link"> <i class="icon-link mr-3"></i> </div>
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">June 15 at 07:10am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 px-2 mail-item inbox starred private-mail">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Roger L. Arteaga</span> 
                                        <p class="mail-subject">Do You Know Iko Uwais, Justin Beiber on twitter?</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">June 8 at 07:10am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </li>
                            <li class=" py-3 px-2 mail-item inbox unread important social-mail">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Robert B. Peterson</span> 
                                        <p class="mail-subject">Meeting Reminder Ut enim ad minim veniam, quis nostrud exercitation...</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="pill-link"> <i class="icon-link mr-3"></i> </div>
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">June 7 at 17:10am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="py-3 px-2 mail-item inbox unread starred business-mail">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Dorothy J. Robinson</span> 
                                        <p class="mail-subject">Hi, John how are u today?</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">June 6 at 08:15am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 px-2 mail-item inbox important work-mail">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Marcus N. Shields</span> 
                                        <p class="mail-subject">Follow more blogs and have more fun</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 16 at 07:33am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </li>
                            <li class="py-3 px-2 mail-item inbox">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Beth M. Hargrove</span> 
                                        <p class="mail-subject">We're transferring money from PayPal to your bank</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="pill-link"> <i class="icon-link mr-3"></i> </div>
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 14 at 09:23am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                       
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="py-3 px-2 mail-item inbox starred important personal-mail">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Nathan S. Johnson</span> 
                                        <p class="mail-subject">Aenean ligula porttitor consequat vitae eleifend enim.</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 12 at 09:23am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>      
                            <li class="py-3 px-2 mail-item inbox important">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Robert B. Peterson</span> 
                                        <p class="mail-subject">Do business like Mister Rogers</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 11 at 09:23am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>                                           

                            </li>
                            <li class="py-3 px-2 mail-item inbox starred work-mail">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Abexon Dixon</span> 
                                        <p class="mail-subject">If you've already tried business, don't read this. It'll break your heart</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 10 at 19:43am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>                                           

                            </li>
                            <li class="py-3 px-2 mail-item inbox">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Ray Sin</span> 
                                        <p class="mail-subject">business! NOW!</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 12 at 09:23am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                   
                                            </div>
                                        </div>
                                    </div>
                                </div>                                           

                            </li>
                            <li class="py-3 px-2 mail-item inbox starred important">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Peter</span> 
                                        <p class="mail-subject">A toast to business</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 12 at 09:23am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                       
                                            </div>
                                        </div>
                                    </div>
                                </div>                                           

                            </li>
                            <li class="py-3 px-2 mail-item inbox important">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Nathan S. Johnson</span> 
                                        <p class="mail-subject">Aenean ligula porttitor consequat vitae eleifend enim.</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 12 at 09:23am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>                                           

                            </li>
                            <li class="py-3 px-2 mail-item inbox starred">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">kelvin</span> 
                                        <p class="mail-subject">4 questions answered about business</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 12 at 09:23am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>                                           

                            </li>
                            <li class="py-3 px-2 mail-item inbox important">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Nathan S. Johnson</span> 
                                        <p class="mail-subject">Aenean ligula porttitor consequat vitae eleifend enim.</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 12 at 09:23am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                       
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </li>


                            <li class="py-3 px-2 mail-item sent starred important">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Peter</span> 
                                        <p class="mail-subject">A toast to business</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 12 at 09:23am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                     
                                            </div>
                                        </div>
                                    </div>
                                </div>                                           

                            </li>
                            <li class="py-3 px-2 mail-item sent important">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Nathan S. Johnson</span> 
                                        <p class="mail-subject">Aenean ligula porttitor consequat vitae eleifend enim.</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 12 at 09:23am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>                                           

                            </li>
                            <li class="py-3 px-2 mail-item sent starred">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">kelvin</span> 
                                        <p class="mail-subject">4 questions answered about business</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 12 at 09:23am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                       
                                            </div>
                                        </div>
                                    </div>
                                </div>                                           

                            </li>
                            <li class="py-3 px-2 mail-item sent important">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Nathan S. Johnson</span> 
                                        <p class="mail-subject">Aenean ligula porttitor consequat vitae eleifend enim.</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 12 at 09:23am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                     
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </li>



                            <li class="py-3 px-2 mail-item draft starred important personal-mail">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Nathan S. Johnson</span> 
                                        <p class="mail-subject">Aenean ligula porttitor consequat vitae eleifend enim.</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 12 at 09:23am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>      
                            <li class="py-3 px-2 mail-item draft important">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Robert B. Peterson</span> 
                                        <p class="mail-subject">Do business like Mister Rogers</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 11 at 09:23am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                       
                                            </div>
                                        </div>
                                    </div>
                                </div>                                           

                            </li>



                            <li class="py-3 px-2 mail-item archive unread personal-mail starred important">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Nathan S. Johnson</span> 
                                        <p class="mail-subject">Aenean ligula porttitor consequat vitae eleifend enim.</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="pill-link"> <i class="icon-link mr-3"></i> </div>
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">June 15 at 07:10am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 px-2 mail-item archive starred private-mail">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">Roger L. Arteaga</span> 
                                        <p class="mail-subject">Do You Know Iko Uwais, Justin Beiber on twitter?</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">June 8 at 07:10am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </li>

                            <li class="py-3 px-2 mail-item trash starred">
                                <div class="d-flex align-self-center align-middle">
                                    <label class="chkbox">
                                        <input type="checkbox" >
                                        <span class="checkmark small"></span>
                                    </label>
                                    <div class="mail-content d-md-flex w-100">
                                        <span class="mail-type-icon">
                                            <i class="icon-star mr-1"></i> 
                                            <i class="icon-exclamation mr-2"></i>
                                        </span>
                                        <span class="mail-user">kelvin</span> 
                                        <p class="mail-subject">4 questions answered about business</p>                                               
                                        <div class="d-flex mt-3 mt-md-0 ml-auto">
                                            <div class="ml-md-auto mr-3 dot primary"></div>
                                            <p class="ml-auto mail-date mb-0">May 12 at 09:23am</p>
                                            <a href="#" class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options-vertical"></i></a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right">
                                                <a class="dropdown-item single-read" href="#" ><i class="icon-book-open"></i> Mark as Read</a>
                                                <a class="dropdown-item single-unread" href="#"><i class="icon-notebook"></i> Mark as unread</a>
                                                <a class="dropdown-item single-delete" href="#"><i class="icon-trash"></i> Delete</a>                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>                                           

                            </li>


                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END: Card DATA-->
<?= $this->endSection() ?>
<?= $this->section('pagescript') ?>
<!-- START: Page JS-->
<script src="<?php echo base_url('dist/vendors/quill/quill.min.js'); ?>"></script>  
<script src="<?php echo base_url('dist/js/mail.script.js'); ?>"></script>  
<!-- END: Page JS-->
<?= $this->endSection() ?>