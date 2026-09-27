<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContentHub</title>
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

/* ==============================
   Header
================================= */

header {
    background: linear-gradient(135deg, #212529, #343a40);
    padding: 20px !important;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
}

header h1 {
    margin: 0;
    font-size: 27px;
    font-weight: 700;
    letter-spacing: 0.5px;
}

header a {
    transition: opacity 0.2s ease;
}

header a:hover {
    opacity: 0.8;
}


/* ==============================
   Main Content
================================= */

.post-list {
    flex: 1;
    margin-top: 25px !important;
    padding-bottom: 20px;
}


/* ==============================
   Post Card
================================= */

.post {
    background-color: #ffffff !important;
    padding: 25px !important;
    margin-top: 0 !important;
    border-radius: 12px;
    border: 1px solid #e9ecef;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
}


/* ==============================
   Post Title
================================= */

.post h1 {
    margin: 0 0 12px;
    font-size: 28px;
    line-height: 1.3;
    font-weight: 700;
    color: #212529;
}


/* ==============================
   Date
================================= */

.post > p:first-of-type {
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 1px solid #e9ecef;
    color: #6c757d;
    font-size: 14px;
}


/* ==============================
   Section Headings
================================= */

.post h3 {
    margin-top: 25px;
    margin-bottom: 10px;
    font-size: 20px;
    font-weight: 700;
    color: #212529;
    padding-left: 10px;
    border-left: 4px solid #0d6efd;
}


/* ==============================
   Summary & Article
================================= */

.post p {
    color: #495057;
    font-size: 16px;
    line-height: 1.8;
}

.post h3 + p {
    margin-bottom: 25px;
}


/* ==============================
   Footer
================================= */

.footer {
    background: linear-gradient(135deg, #212529, #343a40) !important;
    padding: 20px !important;
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


/* ==============================
   Tablet
================================= */

@media (min-width: 576px) {

    header {
        padding: 25px 30px !important;
    }

    header h1 {
        font-size: 30px;
    }

    .post-list {
        margin-top: 35px !important;
    }

    .post {
        padding: 35px !important;
    }

    .post h1 {
        font-size: 34px;
    }

    .post h3 {
        font-size: 21px;
    }

    .post p {
        font-size: 17px;
    }
}


/* ==============================
   Desktop
================================= */

@media (min-width: 768px) {

    header {
        padding: 25px 40px !important;
    }

    .post-list {
        margin-top: 45px !important;
    }

    .post {
        padding: 45px !important;
        border-radius: 14px;
    }

    .post h1 {
        font-size: 40px;
        max-width: 900px;
    }

    .post h3 {
        font-size: 22px;
        margin-top: 35px;
    }

    .post p {
        font-size: 17px;
        line-height: 1.9;
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
            $id = $_GET['id'] ?? null;
            if ($id) {
                include("connect.php");
                $sqlSelect = "SELECT * FROM posts WHERE id = $id";
                $result = mysqli_query($conn, $sqlSelect);
                while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <div class="post bg-light p-4 mt-5">
                        <h1><?php echo $data['title']; ?></h1>
                        <p><?php echo $data['date']; ?> </p>
                        <h3>Summary</h3>
                        <p><?php echo $data['summary']; ?> </p>
                        <h3>Article</h3>
                        <p><?php echo $data['content']; ?> </p>
                    </div>
                    <?php
                }
            } else {
                echo "No post found";
            }
            ?>
        </div>
    </div>
    <div class="footer bg-dark p-4 mt-4 text-center">
        <a href="admin/index.php" class="text-light text-decoration-none">Content Management</a>
    </div>
</body>

</html>