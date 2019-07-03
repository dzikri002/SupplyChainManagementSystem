@extends('layouts.app') @section('bar')
<div class="nav-scroller bg-white shadow-sm">
    <nav class="nav nav-underline">
        <a class="nav-link" href="{{route('vendors')}}">Vendor</a>
        <a class="nav-link" href="#">Create</a>
        {{--
        <a class="nav-link" href="#">
            Friends
            <span class="badge badge-pill bg-light align-text-bottom">27</span>
        </a>
        <a class="nav-link" href="#">Explore</a>
        <a class="nav-link" href="#">Suggestions</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a> --}}
    </nav>
</div>
@endsection @section('nav')
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand mr-auto mr-lg-2" href="#">Supply Chain</a>
    <button
        class="navbar-toggler p-0 border-0"
        type="button"
        data-toggle="offcanvas"
    >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('vendors')}}">Vendor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('rfq')}}">Request for Quotation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('rfq')}}">Purchase Order</a>
            </li>
        </ul>

        @guest
        <div class="navbar-nav form-inline nav-item my-2 my-lg-0">
            <li>
                <a class="nav-link" href="{{ route('login') }}">{{
                    __("Login")
                }}</a>
            </li>
            <li>
                <a class="nav-link disabled">{{ __("Register") }}</a>
            </li>
        </div>
        @else
        <li class="navbar-nav form-inline nav-item dropdown my-2 my-lg-0">
            <a
                id="navbarDropdown"
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                v-pre
            >
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a
                    class="dropdown-item"
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                >
                    {{ __("Logout") }}
                </a>

                <form
                    id="logout-form"
                    action="{{ route('logout') }}"
                    method="POST"
                    style="display: none;"
                >
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </div>
</nav>
@endsection @section('content')

<div class="my-3 p-3 bg-white rounded shadow-sm">
    <div class="container">
        
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                
            </div>


            <!-- line break -->
            <div class="col-md-8 order-md-1 ">
                <h4 class="mb-3">Create Vendor</h4>
                <form method="POST" action="{{ route('postvendor') }}" class="needs-validation" enctype="multipart/form-data" >
                 @csrf
                    <div class="row">
                        
                        <div class="col-md-12 mb-3">
                            <!-- item drop here -->
                            <div class="media text-muted pt-3">
                                <svg class="bd-placeholder-img mr-2 rounded" width="64" height="64" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
                                
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Upload Image</label>
                                    <input type="file" name="photo" id="fileToUpload" >
                                    </div>                                                   
                                <!-- <button >Analyze image</button> -->
                                
                                
                            </div>
                        </div>
                        <div class="col-md-1 mb-3">
                            
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Vendor Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                
                            </div>
                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                id="username"
                                placeholder="Name"
                                required
                            />
                            <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email"
                            >Email
                            <span class="text-muted">(Optional)</span></label
                        >
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            id="email"
                            placeholder="you@example.com"
                        />
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping
                            updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input
                            type="text"
                            name="address"
                            class="form-control"
                            id="address"
                            placeholder="1234 Main St"
                            
                        />
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address2"
                            >Address 2
                            <span class="text-muted">(Optional)</span></label
                        >
                        <input
                            type="text"
                            name="address2"
                            class="form-control"
                            id="address2"
                            placeholder="Apartment or suite"
                        />
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select
                                class="custom-select d-block w-100"
                                id="country"
                                name="country"
                                
                            >
                                <option value="">Choose...</option>
                                <option>United States</option>
                                <option>Indonesian</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <input
                                class="custom-select d-block w-100"
                                id="state"
                                name="state"
                            />
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input
                                type="text"
                                class="form-control"
                                name="zip"
                                id="zip"
                                placeholder=""
                                
                            />
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4" />
                    
                     <div class="mb-3">
                        <label for="address">Phone</label>
                        <input
                            type="text"
                            name="phone"
                            class="form-control"
                            id="address"
                        />
                        <div class="invalid-feedback">
                            Please enter your Phone.
                        </div>
                    </div>
                   
                    <hr class="mb-4" />
                    <button
                        class="btn btn-primary btn-lg btn-block"
                        type="submit"
                    >
                        Save
                    </button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017-2019 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
</div>

@endsection
