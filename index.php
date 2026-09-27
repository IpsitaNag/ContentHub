<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContentHub</title>

    <!-- bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- css -->
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: #f5f7fa;
            color: #212529;
            font-family: Arial, sans-serif;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #212529, #343a40);
            padding: 25px 40px !important;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
        }

        header h1 {
            margin: 0;
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        header a {
            transition: opacity 0.2s ease;
        }

        /* Post section */
        .post-list {
            flex: 1;
            margin-top: 40px !important;
        }

        /* Individual post */
        .post-list .row {
            margin-left: 0;
            margin-right: 0;
            padding: 30px !important;
            background-color: #ffffff !important;
            border-radius: 12px;
            border: 1px solid #e9ecef;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
            align-items: center;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .post-list .row:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.10);
        }

        /* Date */
        .post-list .col-sm-2:first-child {
            color: #6c757d;
            font-size: 15px;
            font-weight: 500;
        }

        /* Post title */
        .post-list h2 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
            color: #212529;
            line-height: 1.3;
        }

        /* Content */
        .post-list .col-sm-5 {
            color: #6c757d;
            font-size: 15px;
            line-height: 1.7;
        }

        /* Read More button */
        .post-list .btn {
            background-color: #2563eb;
            color: white;
            padding: 10px 18px;
            border-radius: 7px;
            font-weight: 600;
            border: none;
            transition: all 0.2s ease;
        }

        .post-list .btn:hover {
            background-color: #1d4ed8;
            transform: translateY(-1px);
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #212529, #343a40) !important;
            padding: 22px !important;
            margin-top: 20px !important;
        }

        .footer a {
            font-size: 17px;
            font-weight: 600;
            letter-spacing: 0.3px;
            transition: opacity 0.2s ease;
        }

        .footer a:hover {
            opacity: 0.75;
        }

        /* Mobile */
        @media (max-width: 767px) {

            header {
                padding: 20px !important;
            }

            header h1 {
                font-size: 26px;
            }

            .post-list {
                margin-top: 25px !important;
            }

            .post-list .row {
                padding: 22px !important;
            }

            .post-list .col-sm-2,
            .post-list .col-sm-3,
            .post-list .col-sm-5 {
                margin-bottom: 15px;
            }

            .post-list h2 {
                font-size: 21px;
            }

            .post-list .btn {
                width: 100%;
            }
        }
    </style>

</head>

<body>

    <header class="p-4 bg-dark text-left">
        <a href="index.php" class="text-light text-decoration-none">
            <h1>ContentHub</h1>
        </a>
    </header>

    <div class="post-list mt-5">
        <div class="container">
            <?php

            include("connect.php");
            $sqlSelect = "select * from posts";
            $result = mysqli_query($conn, $sqlSelect);
            while ($data = mysqli_fetch_array($result)) {
                ?>

                <div class="row mb-5 p-5 bg-light">
                    <div class="col-sm-2">
                        <?php echo $data["date"]; ?>
                    </div>
                    <div class="col-sm-3">
                        <h2><?php echo $data["title"]; ?></h2>
                    </div>
                    <div class="col-sm-5">
                        <?php echo $data["summary"]; ?>
                    </div>
                    <div class="col-sm-2">
                        <a class="btn" href="view.php?id=<?php echo $data['id']; ?>">
                            Read More
                        </a>
                    </div>
                </div>

                <?php


            }

            ?>
        </div>
    </div>

    <div class="footer bg-dark p-4 mt-4 text-center">
        <a href="admin/index.php" class="text-light text-decoration-none">Content Management</a>
    </div>

</body>

</html>