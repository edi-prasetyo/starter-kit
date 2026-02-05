@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="container my-4">

        <h3 class="mb-4">Dashboard</h3>
        <p>Selamat datang, <strong>{{ auth()->user()->name }}</strong>!</p>

        <!-- ===========================
                                     BUTTONS
                                =========================== -->
        <section class="my-5">
            <h4>Buttons</h4>
            <button class="btn btn-primary me-2">Primary</button>
            <button class="btn btn-secondary me-2">Secondary</button>
            <button class="btn btn-success me-2">Success</button>
            <button class="btn btn-danger me-2">Danger</button>
            <button class="btn btn-warning me-2">Danger</button>
        </section>

        <!-- ===========================
                                     CARDS
                                =========================== -->
        <section class="my-5">
            <h4>Cards</h4>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card card-animated">
                        <div class="card-header">
                            Header Animated
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card Title 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="btn btn-primary">Action</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Header Default
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card Title 2</h5>
                            <p class="card-text">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="btn btn-secondary">Action</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Header Default
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card Title 3</h5>
                            <p class="card-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                            <a href="#" class="btn btn-success">Action</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===========================
                                     NAVBAR (STICKY TOP)
                                =========================== -->
        <section class="my-5">
            <h4>Navbar</h4>
            <nav class="navbar navbar-expand-lg sticky-top mb-3">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">MyBrand</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>

        <!-- ===========================
                                     FORM CONTROLS
                                =========================== -->
        <section class="my-5">
            <h4>Forms</h4>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>

        <!-- ===========================
                                     ALERTS
                                =========================== -->
        <section class="my-5">
            <h4>Alerts</h4>
            <div class="alert alert-primary" role="alert">This is a primary alert!</div>
            <div class="alert alert-success" role="alert">This is a success alert!</div>
            <div class="alert alert-warning" role="alert">This is a warning alert!</div>
            <div class="alert alert-danger" role="alert">This is a danger alert!</div>
        </section>

        <!-- ===========================
                                     TABLE
                                =========================== -->
        <section class="my-5">
            <h4>Table</h4>
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Larry</td>
                        <td>Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- ===========================
                                     BADGES & PROGRESS
                                =========================== -->
        <section class="my-5">
            <h4>Badges & Progress</h4>
            <span class="badge bg-primary me-2">Primary</span>
            <span class="badge bg-success me-2">Success</span>
            <span class="badge bg-warning text-dark me-2">Warning</span>
            <span class="badge bg-danger me-2">Danger</span>

            <div class="progress mt-3" style="height: 20px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 40%"></div>
            </div>
        </section>

        <!-- ===========================
                                     MODAL
                                =========================== -->
        <section class="my-5">
            <h4>Modal</h4>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch Demo Modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            This is a demo modal body.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
