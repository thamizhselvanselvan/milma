@extends('master')
@section('content')
    <div class="container mt-5">
        <h3>Admin Page</h3>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif
    
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="shadow-sm mb-4 rounded data-table-section">
            <div class="card-header py-2 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold">Orders</h6>
                <div class="d-flex">
                    <a data-bs-toggle="modal" data-bs-target="#add">
                        <button class="d-flex justify-content-between align-items-center rounded ml-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus" viewBox="0 0 16 16">
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg><span class="ps-1">New</span>
                        </button>
                    </a>

                    <!-- Modal -->
                    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('store') }}" method="POST" enctype="multipart/for-data">
                                        @csrf
                                        <div class="pb-4">
                                            <div class="row g-3">
                                                <div>
                                                    <div class="form-floating">
                                                        <select class="form-select" id="brand" name="brand"
                                                            aria-label="Floating label select example">
                                                            <option selected value="Chocolate">Chocolate</option>
                                                            <option value="Vannilla">Vannilla</option>
                                                            <option value="Pista">Pista</option>
                                                        </select>
                                                        <label for="brand">Brand</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="name"
                                                            placeholder="Customer name" name="name">
                                                        <label for="name">name</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="form-floating">
                                                        <input type="number" class="form-control" id="ml"
                                                            name="ml" placeholder="ml">
                                                        <label for="ml">ML</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="form-floating">
                                                        <input type="number" class="form-control" id="price"
                                                            name="price" placeholder="price">
                                                        <label for="price">Price</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="formFile" class="form-label">Default file input
                                                        example</label>
                                                    <input class="form-control" name="image" type="file"
                                                        id="formFile">
                                                </div>
                                            </div>
                                        </div>

                                        <a href="" type="submit" class="d-flex justify-content-end mt-4"><button
                                                class="upload  py-1 px-4">Upload</button></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="dropdown">
                                <button class="dropdown-toggle m-0" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown button
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">1</a></li>
                                    <li><a class="dropdown-item" href="#">2</a></li>
                                    <li><a class="dropdown-item" href="#">3</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Brand</th>
                        <th>Name</th>
                        <th>Ml</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th width="5%"></th>
                    </tr>
                </thead>
                <tbody id="body">
                    @foreach ($data as $val)
                        <tr>
                            <td>{{ $val->brand }}</td>
                            <td>{{ $val->name }}</td>
                            <td>{{ $val->ml }}ml</td>
                            <td>₹{{ $val->price }}</td>
                            <td><img style="width: 40px; height:40px;" src="{{ asset('images/' . $val->image) }}"
                                    alt="{{ $val->image }}"></td>
                            <td>
                                <a href="{{ url('delete/' . $val->id) }}">delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
@endsection
