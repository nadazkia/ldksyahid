@extends('layout.index')

    @section('container')
    <div class="container ml-5">
        <div class="container-fluid" style="margin-top:18%">

            <!-- 404 Error Text -->
            <div class="text-center">
                <div class="error mx-auto" data-text="404">404</div>
                <p class="lead text-gray-800 mb-5">Page Not Found</p>
                <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                <a href="index.html">&larr; Back to Dashboard</a>
            </div>
        </div>
    </div>
    @endsection