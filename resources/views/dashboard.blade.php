<div>
    @extends('welcome')

    @section('content')
    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 ">
                <div class="shadow p-5 rounded">
                    @if(Auth::check())
                 
                        <p>Hello, <span class="fw-semibold">{{ Auth::user()->first_name }}</span>  </p>
               


                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-dark">Logout</button>
                    </form>
                    @else
                    <p class="fw-semibold">Please log in.</p>
                    @endif
                </div>

            </div>
        </div>
    </div>
    @endsection
</div>