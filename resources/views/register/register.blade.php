@extends('layout.main')

    @section('container')
    <div class="container container-sm bg-light mt-3 px-5 rounded-4">
        <div class="row">
            <!-- Outer Row -->
            {{-- <div class="card o-hidden shadow-lg my-5"> --}}
                <div class="col-sm-5 text-center my-auto py-5">
                    <!-- Nested Row within Card Body -->
                    <img width="60%" src="{{ asset('img/syahid-svg.svg') }}" alt="Logo LDK Syahid">
                    {{-- <img class="m-auto" src="{{ asset('img/logo_ldks.png') }}" alt="Logo LDK Syahid" width="40%"> --}}
                </div>
                {{-- <div class="pembatas"> 
                </div> --}}
                <div class="col-sm-7" style="padding:5%">
                    <div class="text-center">
                        <h1 class="text-gray-900 mb-4 font-bold">PENDAFTARAN</h1>
                    </div>
                    <form style="align-content: center; justify-content: center" action="/dashboard" class="user needs-validation" novalidate>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3">
                                <input type="text" class="form-control form-control-user" id="fullname"
                                    placeholder="Fullname*" required autocomplete>
                            </div>
                                
                            <div class="col-sm-6 mb-3">
                                {{-- <div class="card"> --}}
                                <input class="actual-btn" type="file" id="actual-btn" hidden required/>
                                <label class="actual-btn btn-sm" for="actual-btn" id="nama-file">Upload KTM*</label>
                                {{-- <span id="file-chosen">No file chosen</span> --}}
                            {{-- </div> --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="email" class="form-control form-control-user" id="email"
                                placeholder="Email*" required autocomplete>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <input type="tel" class="form-control form-control-user" id="nim"
                                            placeholder="Nomor Induk Mahasiswa*" pattern="^11[0-9]{2}0[0-2][0-9]{2}.[0-1][0-9]{3}[0-4]$" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="tel" class="form-control form-control-user" id="nowa"
                                            placeholder="Nomor Whatsapp*" pattern="^08[1-9][0-9]{8,15}$" required>
                            </div>


                            <div class="col-sm-6 mb-3">
                                <input type="number" class="form-control form-control-user" id="angkatan"
                                            placeholder="Tahun Masuk UIN Jakarta*" min="1996" required autocomplete>
                            </div>
                        </div>

                        <div class="select-menu" >
                            <div class="select-btn">
                                <span class="btn-text"> -- Jenis Kelamin --
                                </span>
                            </div>
                            <ul class="options" required>
                                <li class="option" value="1">
                                    <span class="option-text"> Laki-Laki</span>
                                </li>
                                <li class="option" value="2">
                                    <span class="option-text"> Perempuan</span>
                                </li>
                            </ul>
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-sm-6 mb-3">
                                <input type="password" class="form-control form-control-user "
                                    placeholder="Password*" id="password" required>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <input type="password" class="form-control form-control-user"
                                    placeholder="Repeat Password*" id="confirm_password" required >
                            </div>
                        </div>
                        
                        <button id="btn-daftar" class="btn btn-success btn-user w-100 bg-gradient" style="color: white" type="submit">
                            Daftar
                        </button>
                    </form>
                    <hr>
                    <div class="text-center mb-2">
                        <a class="small" href="/forgot-password">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="/login">Already have an account? Login!</a>
                    </div>
                </div>
            {{-- </div> --}}
            
        </div>
    </div>
    @endsection