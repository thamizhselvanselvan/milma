<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style>

        table {
            width: 100% !important;
            border-color: #eceff9 !important;
        }

        body {
            background: white;
            font-size: 0.8rem;
            color: #404a57;

        }

        a {
            text-decoration: none;
        }

        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-style: ridge;
        }

        table tbody tr td {
            color: #5e6e82;
        }

        table tbody tr{
            vertical-align: middle;
        }
        thead {
            background: #0c68f2;
            color: white;
            height: 40px;
        }

        table tbody tr .btn-group button {
            color: #5e6e82;
        }

        table.dataTable td,
        table.dataTable th {
            padding: 3px 0 3px 10px !important;
            border-bottom: 0.5px solid #eceff9 !important;
            border-right: 0.5px solid #eceff9 !important;
            vertical-align: middle;
        }

     
        .dropstart .dropdown-toggle::before {
            border: none;
        }

        table .btn-group button {
            border: none;
            box-shadow: none;
            background: none;
            padding: 0;
        }

        table.table-bordered.dataTable td:first-child,
        table.table-bordered.dataTable th:first-child,
        table.table-bordered.dataTable th:first-child {
            padding-left: 1rem !important;
        }

        .data-table-section {
            border: 0.5px solid #dee2e6;
        }

        div.dataTables_wrapper div.dataTables_info {
            padding-top: 0.8em !important;
            padding-bottom: 0.8rem;
            padding-left: 1rem;
        }

        div.dataTables_wrapper div.dataTables_info {
            padding-top: 0.4em;
        }

        button {
            border: 0.5px solid #d9d9d9;
            padding: 4px 12px;
            margin-left: 10px;
            font-weight: 500;
            color: #404a57;
            background: white;
            box-shadow: 0.5px 0.5px 2px #ebebeb;
        }

    </style>
</head>

<body>
    <div class="container mt-5">
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
                                                <!-- <div>
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="brand"
                                                            placeholder="Customer name" name="brand">
                                                        <label for="brand">Brand</label>
                                                    </div>
                                                </div> -->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
