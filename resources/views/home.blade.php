<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>home</title>
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
    </style>
</head>

<body>
    <header>
        <img src="images/banner-img.svg" alt="banner" class="w-100">
    </header>
    <div class="container aside">
        <div class="row py-5">
            <div class="col-md-5">
                <img src="images/chakulate.jpg" alt="img" class="w-100">
            </div>
            <p class="col-md-7 d-flex align-items-center">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged.
            </p>
        </div>
    </div>
    <h2 class="bg-primary py-5 text-white fw-bold d-flex justify-content-center mb-5">
        Products
    </h2>

    <section class="container">
        <div class="chocolate-section">
            <p class="heading h4  rounded text-center rounded-pill py-2 w-25 m-auto mb-5">Chocolate</p>
            <div class="row card-grid">
                @foreach ($data as $val)
                    @if( $val->brand == "Chocolate")
                    <div class="wrap">
                        <div style="height: 270px;" class="mb-3">
                            <img src="{{ asset('images/' . $val->image) }}" alt="{{ $val->image }}" class="w-100 mb-3">

                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid">
                                <span class="name fw-bold h6">{{ $val->name }}</span>
                                <span class="ml text-black-50 fw-">{{ $val->ml }}ml</span>
                            </div>
                            <span class="price fw-bold h5">${{ $val->price }}</span>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="vannilla-section">
            <p class="heading h4  rounded text-center rounded-pill py-2 w-25 m-auto my-5">Vannilla</p>
            <div class="row card-grid">
                @foreach ($data as $val)
                    @if( $val->brand == "Vannilla")
                    <div class="wrap">
                        <div style="height: 270px;" class="mb-3">
                            <img src="{{ asset('images/' . $val->image) }}" alt="{{ $val->image }}" class="w-100 mb-3">

                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid">
                                <span class="name fw-bold h6">{{ $val->name }}</span>
                                <span class="ml text-black-50 fw-">{{ $val->ml }}ml</span>
                            </div>
                            <span class="price fw-bold h5">${{ $val->price }}</span>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="pista-section">
            <p class="heading h4  rounded text-center rounded-pill py-2 w-25 m-auto my-5">Pista</p>
            <div class="row card-grid">
                @foreach ($data as $val)
                    @if( $val->brand == "Pista")
                    <div class="wrap">
                        <div style="height: 270px;" class="mb-3">
                            <img src="{{ asset('images/' . $val->image) }}" alt="{{ $val->image }}" class="w-100 mb-3">

                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-grid">
                                <span class="name fw-bold h6">{{ $val->name }}</span>
                                <span class="ml text-black-50 fw-">{{ $val->ml }}ml</span>
                            </div>
                            <span class="price fw-bold h5">₹{{ $val->price }}</span>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <footer class="footer py-5 mt-5">
        <div class="container d-flex justify-content-between align-items-center ">
            <img src="images/logo.png" alt="">
            <div>
                <div class="text-white pb-3">
                    Follow us
                    <a href="" class="ps-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                    </a>
                    <a href="" class="ps-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-youtube" viewBox="0 0 16 16">
                            <path
                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg>
                    </a>
                    <a href="" class="ps-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                        </svg>
                    </a>
                    <a href="" class="ps-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                    </a>
                </div>
                <span class="text-white">&copy;Milmaicecream. All rights Reserved.</span>
            </div>
        </div>
    </footer>

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
