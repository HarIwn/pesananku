<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pesananku | Client Mode</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../src/vendor/bootstrap/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="../../src/vendor/bootstrap/css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <style>
        @media screen and (max-width: 1000px) {
            .col-user-act {
                display: none !important;
            }

            .search-bar {
                flex-shrink: 0;
                width: 100% !important;
                max-width: 100%;
                padding-right: calc(var(--bs-gutter-x)* .5);
                padding-left: calc(var(--bs-gutter-x)* .5);
                margin-top: var(--bs-gutter-y);
            }

            .navbar-header {
                z-index: 5 !important;
                left: 0;
                right: 0;
                padding: 0 .95em;
            }

            .brand-icon-second {
                display: none;
            }
        }

        .navbar-header {
            flex-wrap: nowrap !important;
            z-index: 5;
        }

        .navbar-header .wrapper {
            justify-content: space-between !important;
        }

        .search-bar {
            flex-shrink: 0;
            width: 50%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x)* .5);
            padding-left: calc(var(--bs-gutter-x)* .5);
            margin-top: var(--bs-gutter-y);
        }

        @media screen and (max-width: 384px) {
            .search-bar .icon-search {
                position: absolute;
                padding: 0 2.5em;
                right: 0;
            }
        }

        .brand-icon {
            height: 50px;
        }

        .brand-icon-second {
            height: 50px;
        }
    </style>
</head>