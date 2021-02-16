<?php include 'header.php' ?>
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->

<div class="row page-header">
    <div class="col-lg-6 align-self-center ">
        <h2>Form Wizard</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Form</a></li>
            <li class="breadcrumb-item active">Form Wizard</li>
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
                    <div id="example-basic">
                        <h3>Step</h3>
                        <section>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </section>
                        <h3>Step</h3>
                        <section>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                        </section>
                        <h3>Step</h3>
                        <section>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header card-default">
                    Basic Form Steps
                </div>
                <div class="card-body">
                    <form id="example-form" action="#">
                        <div>
                            <h3>Account</h3>
                            <section>
                                <label for="userName">Username *</label>
                                <input id="userName" name="userName" type="text" class="required">
                                <label for="password">Password *</label>
                                <input id="password" name="password" type="text" class="required">
                                <label for="confirm">Confirm Password *</label>
                                <input id="confirm" name="confirm" type="text" class="required">
                                <p>(*) Mandatory</p>
                            </section>
                            <h3>Profile</h3>
                            <section>
                                <label for="name">First name *</label>
                                <input id="name" name="name" type="text" class="required">
                                <label for="surname">Last name *</label>
                                <input id="surname" name="surname" type="text" class="required">
                                <label for="email">Email *</label>
                                <input id="email" name="email" type="text" class="required email">
                                <label for="address">Address</label>
                                <input id="address" name="address" type="text">
                                <p>(*) Mandatory</p>
                            </section>
                            <h3>Hints</h3>
                            <section>
                                <ul>
                                    <li>Foo</li>
                                    <li>Bar</li>
                                    <li>Foobar</li>
                                </ul>
                            </section>
                            <h3>Finish</h3>
                            <section>
                                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                            </section>
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
                    Vertical Steps
                </div>
                <div class="card-body">
                    <div id="example-vertical">
                        <h3>Keyboard</h3>
                        <section>
                            <p>Try the keyboard navigation by clicking arrow left or right!</p>
                        </section>
                        <h3>Effects</h3>
                        <section>
                            <p>Wonderful transition effects.</p>
                        </section>
                        <h3>Pager</h3>
                        <section>
                            <p>The next and previous buttons help you to navigate through your content.</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>