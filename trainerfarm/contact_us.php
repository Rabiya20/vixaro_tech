<?php include('includes/header.php'); ?>
<style>
    .box{
        height: 150px;
        border: 2px solid var(--orange-primary);
        border-radius: 20px;
        box-shadow: 5px 5px 5px var(--blue-primary);
        background-color: #fff;
    }
    h3{
        color: var(--blue-primary);
    }
    i{
        color: var(--orange-primary);
        font-size: 25px;
    }
</style>
<br><br><br><br>
<div class="page-content">
    <!-- Page Heading Box ==== -->
    <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
        <div class="container mt-5">
            <div class="page-banner-entry">
                <h1 class="text-light">Contact Us</h1>
                <br>
            </div>
        </div>
    </div>
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="content-block mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 col-sm-6 box">
                    <i class="fa-solid fa-phone"></i>
                    <h3>Sale/Support</h3>
                    <a href="tel:+92 000-000-0000">000-000-0000</a>
                </div>
                <div class="col-md-3 col-sm-6 box" data-toggle="modal" data-target="#chat_modal">
                    <i class="fa-solid fa-comments"></i>
                    <h3>Chat with Us</h3>
                </div>
                <div class="col-md-3 col-sm-6 box" data-toggle="modal" data-target="#ask_ques_modal">
                    <i class="fa-solid fa-question"></i>
                    <h3>Ask a Question</h3>
                </div>
                <div class="col-md-3 col-sm-6 box" data-toggle="modal" data-target="#email_modal">
                    <i class="fa-solid fa-envelope"></i>
                    <h3>Email Support</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- chat_modal modal -->
    <div class="modal fade" id="chat_modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <br><br><br><br><br>
        <div class="modal-dialog modal-lg">
            <div class="container">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="myModalLabel">Chat with Us</h2>
                        <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <h3 class="text-primary">Kindly Drop Your Message Here!!</h3>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <textarea class="form-control" placeholder="Message..."></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <input type="submit" class="btn btn-primary form-control" placeholder="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- ask_ques_modal modal -->
    <div class="modal fade" id="ask_ques_modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <br><br><br><br><br>
        <div class="modal-dialog modal-lg">
            <div class="container">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="myModalLabel">Ask a Question</h2>
                        <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <input type="phone" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <textarea class="form-control" placeholder="Your Comments..."></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <input type="submit" class="btn btn-primary form-control" placeholder="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- email_modal modal -->
    <div class="modal fade" id="email_modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <br><br><br><br><br>
        <div class="modal-dialog modal-lg">
            <div class="container">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="myModalLabel">Email Support</h2>
                        <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Full Name:</label>
                                        <input type="text" class="form-control" placeholder="Your full name">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Email Address:</label>
                                        <input type="email" class="form-control" placeholder="Your Email Address">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Phone Number:</label>
                                        <input type="phone" class="form-control" placeholder="Your Phone Number">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Put Your Comments Here:</label>
                                        <textarea class="form-control" placeholder="Your Comments..."></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <input type="submit" class="btn btn-primary form-control" placeholder="Send">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>