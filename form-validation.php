<?php include 'header.php' ?>
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->

<div class="row page-header">
    <div class="col-lg-6 align-self-center ">
        <h2>Form Validations</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Form</a></li>
            <li class="breadcrumb-item active">Form Validations</li>
        </ol>
    </div>
</div>

<section class="main-content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header card-default">
                    Basic Steps
                </div>
                <div class="card-body">
                    <form id="signupForm" method="post" class="form-horizontal" action="#">
                        <div class="form-group">
                            <label for="firstname">First name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" />
                        </div>

                        <div class="form-group">
                            <label for="lastname">Last name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" />
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" />
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                        </div>

                        <div class="form-group">
                            <label for="confirm_password">Confirm password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password" />
                        </div>

                        <div class="form-group">
                            <div class="checkbox checkbox-primary margin-r-5">

                                <input type="checkbox" id="checkbox2 agree" name="agree" value="agree" />
                                <label for="checkbox2 agree"> Please agree to our policy</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header card-default">
                    Using feedback icons
                </div>
                <div class="card-body">
                    <form id="signupForm1" method="post" class="form-horizontal" action="#">

                        <div class="form-group">
                            <label for="firstname1">First name</label>
                            <input type="text" class="form-control" id="firstname1" name="firstname1" placeholder="First name" />
                        </div>

                        <div class="form-group">
                            <label for="lastname1">Last name</label>
                            <input type="text" class="form-control" id="lastname1" name="lastname1" placeholder="Last name" />
                        </div>

                        <div class="form-group">
                            <label for="username1">Username</label>
                            <input type="text" class="form-control" id="username1" name="username1" placeholder="Username" />
                        </div>

                        <div class="form-group">
                            <label for="email1">Email</label>
                            <input type="text" class="form-control" id="email1" name="email1" placeholder="Email" />
                        </div>

                        <div class="form-group">
                            <label for="password1">Password</label>
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Password" />
                        </div>

                        <div class="form-group">
                            <label for="confirm_password1">Confirm password</label>
                            <input type="password" class="form-control " id="confirm_password1" name="confirm_password1" placeholder="Confirm password" />
                        </div>


                        <div class="form-group">

                            <div class="checkbox checkbox-primary margin-r-5">
                                <input type="checkbox" id="agree1" name="agree1" value="agree" />
                                <label for="agree1">Please agree to our policy</label>
                            </div>

                        </div>

                        <div class="form-group">

                            <button type="submit" class="btn btn-primary" name="signup1" value="Sign up">Sign up</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>