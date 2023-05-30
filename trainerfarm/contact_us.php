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
    .icon{
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
        <?php ?>
        <div class="alert alert-success alert-dismissible mt-3 d-none">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Your form has been submitted, we'll get back to you soon :)
        </div>
        <?php ?>

        <div class="content-block mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 col-sm-6 box">
                    <i class="fa-solid fa-phone icon"></i>
                    <h3>Sale/Support</h3>
                    <a href="tel:+(202) 946-5008">(202) 946-5008</a>
                </div>
                <div class="col-md-3 col-sm-6 box" data-toggle="modal" data-target="#chat_with_us_modal">
                    <i class="fa-solid fa-comments icon"></i>
                    <h3>Chat with Us</h3>
                </div>
                <div class="col-md-3 col-sm-6 box" data-toggle="modal" data-target="#ask_ques_modal_2">
                    <i class="fa-solid fa-question icon"></i>
                    <h3>Ask a Question</h3>
                </div>
                <div class="col-md-3 col-sm-6 box" data-toggle="modal" data-target="#email_modal">
                    <i class="fa-solid fa-envelope icon"></i>
                    <h3>Email Support</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- chat_with_us_modal modal -->
    <div class="modal fade" id="chat_with_us_modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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
                            <form method="POST">
                                <input type="hidden" class="form-control chat_with_us_modal_user_name" value="">
                                <input type="hidden" class="form-control chat_with_us_modal_user_surname" value="">
                                <input type="hidden" class="form-control chat_with_us_modal_user_phone" value="">

                                <div class="row">
                                    <div class="col">
                                        <input type="email" class="form-control chat_with_us_modal_user_email" placeholder="Email Address">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <textarea class="form-control chat_with_us_modal_user_message" placeholder="Message..."></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary chat_with_us_modal_form">Send</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ask_ques_modal_2 modal -->
    <div class="modal fade" id="ask_ques_modal_2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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
                            <form method="post">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control ask_ques_modal_2_user_name" placeholder="First name">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control ask_ques_modal_2_user_surname" placeholder="Last name">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <input type="email" class="form-control ask_ques_modal_2_user_email" placeholder="Email Address">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <input type="phone" class="form-control ask_ques_modal_2_user_phone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <textarea class="form-control ask_ques_modal_2_user_message" placeholder="Your Comments..."></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary ask_ques_modal_2_form">Submit</button>
                        <button type="button" name="ques_form" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                            <form method="POST">
                                <input type="hidden" class="form-control email_modal_user_surname" value="">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Full Name:</label>
                                        <input type="text" class="form-control email_modal_user_name" placeholder="Your full name">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Email Address:</label>
                                        <input type="email" class="form-control email_modal_user_email" placeholder="Your Email Address">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Phone Number:</label>
                                        <input type="phone" class="form-control email_modal_user_phone" placeholder="Your Phone Number">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Put Your Comments Here:</label>
                                        <textarea class="form-control email_modal_user_message" placeholder="Your Comments..."></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary email_modal_form">Send</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/contact.js"></script>
<script type="text/javascript" language="javascript">  
    $(document).ready(function () {
        $('body').on('click', '.chat_with_us_modal_form', function (e) {
            var user_name           = $('.chat_with_us_modal_user_name').val();
            var user_surname        = $('.chat_with_us_modal_user_surname').val();
            var user_email          = $('.chat_with_us_modal_user_email').val();
            var user_phone          = $('.chat_with_us_modal_user_phone').val();
            var user_message        = $('.chat_with_us_modal_user_message').val();
            var notification_type   = 'Chat';
            
            $.ajax({
                url: 'notification_submit.php',
                type: 'POST',
                data:"user_email="+user_email+'&user_phone='+user_phone+'&user_message='+user_message+'&notification_type='+notification_type+'&user_name='+user_name+'&user_surname='+user_surname, 
                success: function(data) {
                    alert('chat_with_us_modal_form');
			        $('.alert-dismissible').removeClass('d-none');
                    $("#chat_with_us_modal").modal('hide');
                },
                error: function(xhr, status, error) {
                    alert('Error.');
                    console.error(xhr);
                }
            });
        });
    });
</script> 
<script type="text/javascript" language="javascript">  
    $(document).ready(function () {
        $('body').on('click', '.ask_ques_modal_2_form', function (e) {
            var user_name               = $('.ask_ques_modal_2_user_name').val();
            var user_surname            = $('.ask_ques_modal_2_user_surname').val();
            var user_email              = $('.ask_ques_modal_2_user_email').val();
            var user_phone              = $('.ask_ques_modal_2_user_phone').val();
            var user_message            = $('.ask_ques_modal_2_user_message').val();
            var notification_type       = 'Ask a Question';
            
            $.ajax({
                url: 'notification_submit.php',
                type: 'POST',
                data:"user_email="+user_email+'&user_phone='+user_phone+'&user_message='+user_message+'&notification_type='+notification_type+'&user_name='+user_name+'&user_surname='+user_surname, 
                success: function(data) {
                    alert('ask_ques_modal_2_form');
			        $('.alert-dismissible').removeClass('d-none');
                    $("#ask_ques_modal_2").modal('hide');
                },
                error: function(xhr, status, error) {
                    alert('Error.');
                    console.error(xhr);
                }
            });
        });
    });
</script> 
<script type="text/javascript" language="javascript">  
    $(document).ready(function () {
        $('body').on('click', '.email_modal_form', function (e) {
            var user_name           = $('.email_modal_user_name').val();
            var user_surname        = $('.email_modal_user_surname').val();
            var user_email          = $('.email_modal_user_email').val();
            var user_phone          = $('.email_modal_user_phone').val();
            var user_message        = $('.email_modal_user_message').val();
            var notification_type   = 'Email Support';
            
            $.ajax({
                url: 'notification_submit.php',
                type: 'POST',
                data:"user_email="+user_email+'&user_phone='+user_phone+'&user_message='+user_message+'&notification_type='+notification_type+'&user_name='+user_name+'&user_surname='+user_surname, 
                success: function(data) {
                    alert('email_modal_form');
			        $('.alert-dismissible').removeClass('d-none');
                    $("#email_modal").modal('hide');
                },
                error: function(xhr, status, error) {
                    alert('Error.');
                    console.error(xhr);
                }
            });
        });
    });
</script> 
<?php include('includes/footer.php'); ?>