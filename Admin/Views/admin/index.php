<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-title" content="TedeShop">
    <meta name="application-name" content="TedeShop">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="../assets/site/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
    <link rel="stylesheet" href="../assets/admin/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.0.0/ckeditor5.css">

    <title>TedeShop Admin</title>
</head>

<body>
    <nav class="navbar">
        <?php require 'menu.php' ?>
    </nav>
    <main class="main">
        <div class="topbar container-fluid">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="clock" id="clock"></div>
            <?php
            if(isset($_SESSION['login']) && $_SESSION['login'] == true){
            ?>
            <div class="logout">
                <a class="btn btn-danger" href="../?act=taikhoan&xuli=dangxuat">Logout</a>
            </div>
            <?php
            }
            ?>


        </div>
        <div class="container-fluid">
            <?php require_once 'Views/router.php'?>
        </div>
    </main>

    <!-- =========== Scripts =========  -->
    <script src="../assets/site/js/jquery.min.js"></script>
    <script src="../assets/site/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/admin/js/main.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript">
    </script>

    <script src="../assets/admin/js/validated.js"></script>


    <!-- ====== ionicons ======= -->

    <script src="https://cdn.ckeditor.com/ckeditor5/44.0.0/ckeditor5.umd.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
    const {
        ClassicEditor,
        Essentials,
        Paragraph,
        Bold,
        Italic,
        Font
    } = CKEDITOR;
    // Create a free account and get <YOUR_LICENSE_KEY>
    // https://portal.ckeditor.com/checkout?plan=free
    ClassicEditor
        .create(document.querySelector('#editor'), {
            licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NjUwNjU1OTksImp0aSI6IjQxYWY4ZDY2LTExNGYtNGE5MS04OGM5LTk3MzIzZDA0NDYwNCIsImxpY2Vuc2VkSG9zdHMiOlsiMTI3LjAuMC4xIiwibG9jYWxob3N0IiwiMTkyLjE2OC4qLioiLCIxMC4qLiouKiIsIjE3Mi4qLiouKiIsIioudGVzdCIsIioubG9jYWxob3N0IiwiKi5sb2NhbCJdLCJ1c2FnZUVuZHBvaW50IjoiaHR0cHM6Ly9wcm94eS1ldmVudC5ja2VkaXRvci5jb20iLCJkaXN0cmlidXRpb25DaGFubmVsIjpbImNsb3VkIiwiZHJ1cGFsIl0sImxpY2Vuc2VUeXBlIjoiZGV2ZWxvcG1lbnQiLCJmZWF0dXJlcyI6WyJEUlVQIl0sInZjIjoiM2M2YjhjMTYifQ.9n4AdixzBMYIM7NZzeryo7w1My0ndakzTU4KnJS6JKjDuID2qIuLR0k_J83KY5RDvt5uP9lUJEEb6pHfoiZxcA',
            plugins: [Essentials, Paragraph, Bold, Italic, Font],
            toolbar: [
                'undo', 'redo', '|', 'bold', 'italic', '|',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
            ]
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error(error);
        });
    </script>

</body>

</html>