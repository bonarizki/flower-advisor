<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.min.css" rel="stylesheet" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1050;
            /* Higher than Bootstrap modal z-index */
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <title>Register</title>

    {{-- Rechapta v3 --}}
    {!! RecaptchaV3::initJs() !!}

</head>

<body>
    <!-- Spinner Overlay -->
    <div class="overlay" id="spinner" hidden>
        <div class="spinner-border text-light" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form class="mx-1 mx-md-4" id="form">
                                        {!! RecaptchaV3::field('register') !!}
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-1">
                                                <input type="text" id="name" name="name" class="form-control"
                                                    required />
                                                <label class="form-label" for="name">Your Name</label>
                                                <div class="invalid-feedback pt-3" id="name-error"></div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="text" id="email" name="email" class="form-control"
                                                    required />
                                                <label class="form-label" for="email">Your Email</label>
                                                <div class="invalid-feedback pt-3" id="email-error"></div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="password" id="password" name="password"
                                                    class="form-control form-control-lg" required />
                                                <label class="form-label" for="password">Password</label>
                                                <div class="invalid-feedback pt-3" id="password-error"></div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="password" id="repeat-password" name="repeat-password"
                                                    class="form-control" required />
                                                <label class="form-label" for="repeat-password2">Repeat your
                                                    password</label>
                                                <div class="invalid-feedback pt-3" id="repeat-password-error">test</div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-primary btn-lg" onclick="register()">Register</button>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <p class="text-center fw-bold mx-3 mb-0 text-muted"> Already have an account? <a href="{{ url('/') }}">Login Here</a></p>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.umd.min.js"></script>

    {{-- jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        register = () => {
            // alert("test");
            $.ajax({
                type: "post",
                url: "{{ url('register') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: $('#form').serialize(),
                beforeSend: function() {
                    console.log("cek")
                    // setting a timeout
                    $("#spinner").attr("hidden", false);

                },
                success: (res) => {
                    Swal.fire({
                        title: `Good job! ${res.data.name}`,
                        text: res.message,
                        icon: "success"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ url('/') }}";
                        }
                    });
                },
                error: (res) => {
                    let data = res.responseJSON.errors;

                    if (data.email) {
                        $('#email').removeClass('is-valid');
                        $('#email').addClass('is-invalid');
                        $('#email-error').text(data.email[0])
                        $('#email-error').addClass('invalid-feedback')
                        $('#email-error').removeClass('valid-feedback')

                    } else {
                        $('#email').removeClass('is-invalid');
                        $('#email').addClass('is-valid');
                        $('#email-error').text('Looks good!')
                        $('#email-error').addClass('valid-feedback')
                        $('#email-error').removeClass('invalid-feedback')
                    }

                    if (data.name) {
                        $('#name').removeClass('is-valid');
                        $('#name').addClass('is-invalid');
                        $('#name-error').text(data.name[0])
                        $('#name-error').addClass('invalid-feedback')
                        $('#name-error').removeClass('valid-feedback')

                    } else {
                        $('#name').removeClass('is-invalid');
                        $('#name').addClass('is-valid');
                        $('#name-error').text('Looks good!')
                        $('#name-error').addClass('valid-feedback')
                        $('#name-error').removeClass('invalid-feedback')
                    }

                    if (data.password) {
                        $('#password').removeClass('is-valid');
                        $('#password').addClass('is-invalid');
                        $('#password-error').text(data.password[0])
                        $('#password-error').addClass('invalid-feedback')
                        $('#password-error').removeClass('valid-feedback')

                    } else {
                        $('#password').removeClass('is-invalid');
                        $('#password').addClass('is-valid');
                        $('#password-error').text('Looks good!')
                        $('#password-error').addClass('valid-feedback')
                        $('#password-error').removeClass('invalid-feedback')
                    }



                    if (data['repeat-password']) {
                        $('#repeat-password-error').text(data['repeat-password'][0])
                        $('#repeat-password').removeClass('is-valid');
                        $('#repeat-password').addClass('is-invalid');
                        $('#repeat-password-error').addClass('invalid-feedback')
                        $('#repeat-password-error').removeClass('valid-feedback')
                    } else {
                        $('#repeat-password').removeClass('is-invalid');
                        $('#repeat-password').addClass('is-valid');
                        $('#repeat-password-error').text('Looks good!')
                        $('#repeat-password-error').addClass('valid-feedback')
                        $('#repeat-password-error').removeClass('invalid-feedback')
                    }

                },
                complete: () => {
                    $("#spinner").attr("hidden", true);
                }
            });
        }
    </script>

</body>


</html>
