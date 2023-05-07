<?php include('includes/header.php'); ?>
<br><br><br><br>
<div class="page-content">
    <!-- Page Heading Box ==== -->
    <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
        <div class="container mt-5">
            <div class="page-banner-entry">
                <h1 class="text-light">TrainerFarm Financing</h1>
                <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#schedule_modal">Schedule a Call</button>
            </div>
        </div>
    </div>
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="index.php">Home</a></li>
                <li>Corporate Training</li>                
                <li>Financing</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="content-block mt-5 mb-5">
            <h1 class="text-primary">Financing</h1>
            <img src="assets/images/banner/bg-3.jpg" alt="">
            <br><br>
            <p>Financing in TrainerFarm bootcamp refers to the options available to students to pay for their bootcamp education. Bootcamps are short-term, intensive training programs designed to prepare students for a career in a specific field, such as web development, data science, or cybersecurity.</p>

            <br>
            <p>To help students pay for their education, TrainerFarm offer financing options such as:</p>
            
            <div class="heading-bx left">
                <h2 class="title-head">Loans:</h2>
                <p>TrainerFarm offer loans to students. These loans may have lower interest rates and more flexible repayment terms than traditional loans.</p>
            </div>

            <div class="heading-bx left">
                <h2 class="title-head">Income Share Agreements (ISAs):</h2>
                <p>With an ISA, students agree to pay a percentage of their income for a set period of time after they graduate and start working in their chosen field. This option may be particularly attractive for students who cannot afford to pay tuition upfront.</p>
            </div>

            <div class="heading-bx left">
                <h2 class="title-head">Scholarships and Grants:</h2>
                <p>TrainerFarm offer scholarships or grants to students based on merit, financial need, or diversity. These can help reduce the cost of tuition or provide additional financial support for living expenses.</p>
            </div>

            <div class="heading-bx left">
                <h2 class="title-head">Employer Sponsorship:</h2>
                <p>Some employers may be willing to pay for their employees' bootcamp education as a way to invest in their skills and development.</p>
            </div>

            <hr>
            <p>TrainerFarm financing options can help make bootcamps more accessible to a wider range of students who may not be able to afford the cost of tuition upfront. However, it is important to carefully review the terms and conditions of any financing option.</p>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#schedule_modal">Schedule a Call</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade schedule_modal" id="schedule_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <br><br><br>
        <div class="modal-dialog" role="document">
            <div class="container" style="padding: 30px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Schedule a Call</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form role="search" method="post" class="mb-3">
                            <input name="fullname" class="form-control" placeholder="First name" type="text"><br>
                            <input name="phone" class="form-control" placeholder="Phone Number" type="tel"><br>
                            <input name="email" class="form-control" placeholder="Email" type="email"><br>
                            <br>
                            <button type="submit" class="btn btn-block btn-primary">Submit</button>
                        </form>
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