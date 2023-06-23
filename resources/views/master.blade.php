<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style>
        :root {
            --primary: #484848;
            --white: #ffffff;
            --background: #2c65da;
            --chocolate: #653425;
            --vannilla:#F7D047;
            --pista:#9FDC3C;
        }

        body {
            padding: 0;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            color: var(--primary);
        }

        a {
            text-decoration: none;
        }

        .aside p {
            line-height: 35px;
            font-size: 18px;
        }

        .chocolate-section .heading {
            background: var(--chocolate);
            color:var(--vannilla);
        }
        .vannilla-section .heading {
            background: var(--vannilla);
            color:var(--chocolate);
        }
        .pista-section .heading{
            background: var(--pista);
            color:var(--primary);
        }

        .card-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 15px;
        }
        .vannilla-section .wrap{
            border: 5px solid var(--vannilla);
        }
        .chocolate-section .wrap{
            border: 5px solid var(--chocolate);
        }
        .pista-section .wrap{
            border: 5px solid var(--pista);
        }
        .wrap {
            padding: 15px;
            border-radius: 20px;
        }

        .wrap img {
            border-radius: 20px;
            object-fit: cover;
            height: 270px;
        }

        .footer {
            background: var(--background);
        }

        .footer img {
            width: 150px;
        }

        footer a {
            color: var(--white);
        }

        footer a:hover {
            color: var(--white);
        }

        /* table start */
        table {
    width: 100% !important;
    border-color: #eceff9 !important;
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

    @yield('content')

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