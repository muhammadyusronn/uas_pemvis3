<footer class="footer">
    <span>Copyright &copy; 2018 FixedPlus</span>
</footer>

</section>
<!-- ============================================================== -->
<!-- 						Content End		 						-->
<!-- ============================================================== -->


<!-- Common Plugins -->
<script src="assets/lib/jquery/dist/jquery.min.js"></script>
<script src="assets/lib/bootstrap/js/popper.min.js"></script>
<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/lib/pace/pace.min.js"></script>
<script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
<script src="assets/lib/metisMenu/metisMenu.min.js"></script>
<script src="assets/js/custom.js"></script>


<!--Chart Script-->
<script src="assets/lib/chartjs/chart.min.js"></script>
<script src="assets/lib/chartjs/chartjs-sass.js"></script>

<!--Vetor Map Script-->
<script src="assets/lib/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/lib/vectormap/jquery-jvectormap-us-aea-en.js"></script>

<!-- Chart C3 -->
<script src="assets/lib/chart-c3/d3.min.js"></script>
<script src="assets/lib/chart-c3/c3.min.js"></script>

<!-- Custom JS -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
<script src="assets/js/script.js"></script>


<!-- Datatables-->
<script src="assets/lib/datatables/jquery.dataTables.min.js"></script>
<script src="assets/lib/datatables/dataTables.responsive.min.js"></script>

<script src="assets/lib/datatables/dataTables.buttons.min.js"></script>
<script src="assets/lib/datatables/jszip.min.js"></script>
<script src="assets/lib/datatables/pdfmake.min.js"></script>
<script src="assets/lib/datatables/vfs_fonts.js"></script>
<script src="assets/lib/datatables/buttons.html5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#datatable').dataTable();

        $('#datatable2').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });

        $('#datatable3').DataTable({
            "scrollY": "400px",
            "scrollCollapse": true,
            "paging": false
        });
    });
</script>

<!-- Validations -->
<script type="text/javascript" src="assets/lib/jquery-validate/jquery.validate.js"></script>
<script type="text/javascript">
    $.validator.setDefaults({
        submitHandler: function() {
            alert("submitted!");
        }
    });

    $(document).ready(function() {
        $("#signupForm").validate({
            rules: {
                firstname: "required",
                lastname: "required",
                username: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                },
                agree: "required"
            },
            messages: {
                firstname: "Please enter your firstname",
                lastname: "Please enter your lastname",
                username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
                email: "Please enter a valid email address",
                agree: "Please accept our policy"
            },
            errorElement: "em",
            errorPlacement: function(error, element) {
                // Add the `help-block` class to the error element
                error.addClass("help-block");

                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                } else {
                    error.insertAfter(element);
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).parents(".form-group").addClass("has-error").removeClass("has-success");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents(".form-group").addClass("has-success").removeClass("has-error");
            }
        });

        $("#signupForm1").validate({
            rules: {
                firstname1: "required",
                lastname1: "required",
                username1: {
                    required: true,
                    minlength: 2
                },
                password1: {
                    required: true,
                    minlength: 5
                },
                confirm_password1: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password1"
                },
                email1: {
                    required: true,
                    email: true
                },
                agree1: "required",
                kontak: "required"
            },
            messages: {
                firstname1: "Masukan Nama Anda!",
                lastname1: "Please enter your lastname",
                username1: {
                    required: "Masukan username anda!",
                    minlength: "Username minimal terdiri dari 2 karakter!"
                },
                password1: {
                    required: "Masukan password!",
                    minlength: "Password minimal terdiri dari 5 karakter"
                },
                confirm_password1: {
                    required: "Masukan Password!",
                    minlength: "Password minimal terdiri dari 5 karakter",
                    equalTo: "Masukan password sama dengan diatas!"
                },
                email1: "Please enter a valid email address",
                agree1: "Please accept our policy",
                kontak: "Masukan kontak anda!"
            },
            errorElement: "em",
            errorPlacement: function(error, element) {
                // Add the `help-block` class to the error element
                error.addClass("help-block");

                // Add `has-feedback` class to the parent div.form-group
                // in order to add icons to inputs
                element.parents(".form-group").addClass("has-feedback");

                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                } else {
                    error.insertAfter(element);
                }

                // Add the span element, if doesn't exists, and apply the icon classes to it.
                if (!element.next("input")[0]) {
                    $('input').addClass("form-control-danger").removeClass("form-control-success");
                }
            },
            success: function(label, element) {
                // Add the span element, if doesn't exists, and apply the icon classes to it.
                if (!$(element).next("input")[0]) {
                    $('input').addClass("form-control-success").removeClass("form-control-danger");
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).parents(".form-group").addClass("has-danger").removeClass("has-success");
                $('input').addClass("form-control-danger").removeClass("form-control-success");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents(".form-group ").addClass("has-success").removeClass("has-danger");
                $('input').addClass("form-control-success").removeClass("form-control-danger");
            }
        });
    });
</script>

<!-- Jquery Steps -->
<script src="assets/lib/jquery-steps/jquery.steps.min.js"></script>
<script src="assets/lib/jquery-validate/jquery.validate.min.js"></script>
<script>
    $("#example-basic").steps({
        headerTag: "h3",
        bodyTag: "section",

        autoFocus: true
    });

    $("#example-vertical").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        stepsOrientation: "vertical"
    });

    //steps with form
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    });
</script>

</body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-5/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Jan 2021 09:36:19 GMT -->

</html>