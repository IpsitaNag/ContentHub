<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        /* =================================
           Basic Page
        ================================= */

        html,
        body {
            margin: 0;
            padding: 0;
            min-height: 100%;
        }

        body {
            background-color: #f5f7fa;
        }


        /* =================================
           Dashboard Layout
        ================================= */

        .dashboard {
            display: flex !important;
            width: 100%;
            min-height: 100vh;
            height: auto !important;
            align-items: stretch !important;
        }


        /* =================================
           Sidebar
        ================================= */

        .sidebar {
            width: 280px;
            min-width: 280px;

            min-height: 100vh !important;
            height: auto !important;

            flex-shrink: 0;

            background-color: #212529 !important;
        }


        /* =================================
           Dashboard Heading
        ================================= */

        .sidebar h1 {
            margin: 0;

            padding: 22px 20px !important;

            background: linear-gradient(135deg,
                    #0d6efd,
                    #0b5ed7) !important;

            font-size: 28px;
            font-weight: 700;

            text-align: center;
        }

        .sidebar h1 a {
            display: block;
        }


        /* =================================
           Menu Container
        ================================= */

        .menues {
            padding: 30px 25px !important;

            margin-top: 10px !important;
        }

        /* =================================
           Menu Items
        ================================= */

        .menu {
            margin-bottom: 25px !important;
        }

        .sidebar .menu a {
            display: block;

            width: 100%;

            padding: 12px !important;

            text-align: center;

            border-radius: 7px !important;

            font-size: 15px;

            transition: all 0.2s ease;
        }


        /* =================================
           Add New Post + Visit Site
        ================================= */

        .sidebar .menu a[style] {
            background-color: #f5f5dc !important;

            color: #212529 !important;

            border: 1px solid #e5e5c8;
        }

        .sidebar .menu a[style]:hover {
            background-color: #ffffff !important;

            transform: translateX(3px);
        }


        /* =================================
           Logout
        ================================= */

        .sidebar .menu .btn-info {
            background-color: transparent;

            color: #ffffff;

            border: 1px solid #6c757d;

            font-weight: 600;
        }

        .sidebar .menu .btn-info:hover {
            background-color: #dc3545;

            border-color: #dc3545;

            color: #ffffff;
        }


        /* =================================
           Dashboard Main Content
        ================================= */

        .dashboard>.posts-list {
            flex: 1;

            width: auto !important;

            min-width: 0;

            min-height: 100vh;

            height: auto !important;

            overflow-x: auto;
        }


        /* =================================
           Tablet
        ================================= */

        @media (max-width: 767px) {

            .sidebar {
                width: 180px;

                min-width: 180px;

                min-height: 100vh !important;

                height: auto !important;
            }

            .sidebar h1 {
                padding: 18px 10px !important;

                font-size: 21px;
            }

            .menues {
                padding: 25px 10px !important;

                margin-top: 5px !important;
            }

            .menu {
                margin-bottom: 22px !important;
            }

            .sidebar .menu a {
                padding: 10px 5px !important;

                font-size: 13px;
            }

            .dashboard>.posts-list {
                min-width: 0;

                min-height: 100vh;

                height: auto !important;

                overflow-x: auto;
            }
        }


        /* =================================
           Very Small Screens
        ================================= */

        @media (max-width: 400px) {

            .sidebar {
                width: 150px;

                min-width: 150px;

                min-height: 100vh !important;

                height: auto !important;
            }

            .sidebar h1 {
                padding: 16px 5px !important;

                font-size: 18px;
            }

            .menues {
                padding: 20px 7px !important;
            }

            .sidebar .menu a {
                padding: 9px 4px !important;

                font-size: 12px;
            }

            .menu {
                margin-bottom: 18px !important;
            }
        }

        /* Reduce spacing between sidebar buttons */

        .sidebar .menu {
            margin-bottom: 18px !important;
        }

        .sidebar .menu.mt-5 {
            margin-top: 18px !important;
        }


        /* Mobile */
        @media (max-width: 767px) {
            .sidebar .menu {
                margin-bottom: 14px !important;
            }

            .sidebar .menu.mt-5 {
                margin-top: 14px !important;
            }
        }
    </style>

</head>

<body>

    <!-- Side bar -->

    <div class="dashboard">

        <div class="sidebar bg-dark">

            <h1 class="bg-primary p-4">
                <a href="./index.php" class="text-light text-decoration-none">
                    Dashboard
                </a>
            </h1>


            <!-- Menu -->

            <div class="menues p-4 mt-5">

                <!-- Add Post -->

                <div class="menu">

                    <a href="create.php" class="text-decoration-none"
                        style="background-color: beige; color: black; padding: 10px; border-radius: 8px;">

                        <strong>Add New Post</strong>

                    </a>

                </div>


                <!-- Visit Site -->

                <div class="menu mt-5">

                    <a href="../index.php" class="text-decoration-none"
                        style="background-color: beige; color: black; padding: 10px; border-radius: 8px;">

                        <strong>Visit Site</strong>

                    </a>

                </div>


                <!-- Logout -->

                <div class="menu mt-5">

                    <a href="logout.php" class="btn btn-info">

                        Logout

                    </a>

                </div>

            </div>

        </div>