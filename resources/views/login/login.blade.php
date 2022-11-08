@extends('layout.main')

    @section('container')
    <div class="container container-sm bg-light mt-3 px-5 rounded-4">
        <div class="row">
            <!-- Outer Row -->
            {{-- <div class="card o-hidden shadow-lg my-5"> --}}
                <div class="col-sm-5 text-center my-auto py-5" style="border: 0">
                    <!-- Nested Row within Card Body -->
                    <img class="w-50" src="{{ asset('img/syahid-svg.svg') }}" alt="Logo LDK Syahid">
                </div>
                <div class="col-sm-7" style="padding:5%">
                    <div class="text-center">
                        <h2 class="text-gray-900 mb-4">Selamat Datang!</h2>
                    </div>
                    <form action="/dashboard" class="user needs-validation" novalidate>
                        <div class="form-group mb-3">
                            <input required type="email" class="form-control form-control-user"
                                id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group mb-3">
                            <input required type="password" class="form-control form-control-user"
                                id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group mb-3">
                            <div class="form-check small">
                                <input type="checkbox" class="form-check-input" id="customCheck">
                                <label class="form-check-label" for="customCheck">Remember
                                    Me</label>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                        <button class="btn btn-success btn-user" style="color: white" type="submit">
                            Masuk
                        </button>
                        </div>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="/forgot-password">Lupa Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="/register">Daftar</a>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
    </div>

    
    @endsection
