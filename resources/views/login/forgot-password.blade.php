@extends('layout.index')

    @section('container')
        <div class="container my-5">

            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-0">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                            <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                                and we'll send you a link to reset your password!</p>
                                        </div>
                                        <form action="/login" class="user">
                                            <div class="form-group was-validated">
                                                <input type="email" class="form-control form-control-user"
                                                    aria-describedby="emailHelp" placeholder="Enter Email Address..." required>
                                            </div>
                                            <button class="btn btn-success btn-user btn-block" type="submit">
                                                Reset Password
                                            </button>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="/register">Create an Account!</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="/login">Already have an account? Login!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    @endsection
