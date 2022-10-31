<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="admin_css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/659872707b.js" crossorigin="anonymous"></script>
    <style>

    </style>
    <script>
        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function() {
                if (this.checked) {
                    checkbox.each(function() {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function() {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });
    </script>

</head>

<body>
    <form method="POST">
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Manage <b>Products</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="#addModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Songs</span></a>
                                <a href="#deleteModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                            </div>
                        </div>
                    </div>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="selectAll">
                                        <label for="selectAll"></label>
                                    </span>
                                </th>
                                <th>Song ID</th>
                                <th>name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Singer</th>
                                <th>Edit</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $connect = mysqli_connect('localhost', 'root', '', 'tune_source');

                            if (!$connect) {
                                echo "Kết nối thất bại";
                            }
                            $sql = "SELECT * FROM song";
                            $song_image_path = "assets\img\song_img";
                            $song_audio_path = "assets\Audio\\";
                            $result = mysqli_query($connect, $sql);

                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox1" name="song_check_list[]" value="<?php echo $song_id ?>">
                                            <label for="checkbox1"></label>
                                        </span>
                                    </td>
                                    <td><?php echo $row['song_id'] ?></td>
                                    <td><?php echo $row['song_name'] ?></td>
                                    <td><?php echo $row['song_description'] ?></td>
                                    <td><?php echo $row['song_price'] ?></td>
                                    <td><?php
                                        $singer_id = $row['singer_id'];
                                        $sql = "SELECT singer_name FROM singer WHERE singer_id='$singer_id'";
                                        $singer_name = mysqli_fetch_array(mysqli_query($connect, $sql))['singer_name'];
                                        echo $singer_name;
                                        ?>

                                    </td>
                                    <td>
                                        <button style="border: none; background-color:transparent;" class="edit"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button style="border: none; background-color:transparent;" class="edit" name="<?php echo "delete" . $row['song_id'] ?>"><i class="fa-solid fa-trash"></i></button>
                                        <!-- <a href="#editModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a> -->
                                        <!-- <a href="#deleteModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a> -->
                                    </td>
                                </tr>

                            <?php
                                $song_id = $row['song_id'];
                                if (isset($_POST['delete' . $song_id])) {
                                    $sql = "DELETE FROM song WHERE song_id = $song_id";
                                    $result = mysqli_query($connect, $sql);
                                    echo "<script>alert ('Successfully!') </script>";
                                    echo "<script> window.open('admin.php','_self') </script>";
                                }
                            }
                            ?>

                            <?php

                            ?>

                        </tbody>
                    </table>
                    <div class="clearfix">
                        <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                        <ul class="pagination">
                            <li class="page-item disabled"><a href="#">Previous</a></li>
                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item active"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                            <li class="page-item"><a href="#" class="page-link">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Add Modal HTML -->
    <div id="addModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" enctype="multipart/form-data">
                    <?php
                    $connect = mysqli_connect('localhost', 'root', '', 'tune_source');
                    ?>
                    <div class="modal-header">
                        <h4 class="modal-title">Add Product</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Song Id</label>
                            <input type="text" name="song_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Song name</label>
                            <input type="text" name="song_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Song description</label>
                            <textarea class="form-control" name="song_description"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="song_price" class="form-control" required>
                        </div>
                        <div class="form__group">
                            <label>Song img</label>
                            <input type="file" name="song_img" class="form__control" required>
                        </div>
                        <div class="form__group">
                            <label>Song Audio</label>
                            <input type="file" name="song_audio" class="form__input" required>
                        </div>
                        <div class="form__group">
                            <label>Genre Name</label>
                            <select name='genre_id'>
                                <?php

                                $sql2 = 'select * from genre';
                                $result2 = mysqli_query($connect, $sql2);
                                while ($row_cat =  mysqli_fetch_array($result2)) {

                                    $genre_id = $row_cat['genre_id'];
                                    $genre_name = $row_cat['genre_name'];
                                    echo "<option value='$genre_id'>$genre_name</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form__group">
                            <label>Singer Name</label>
                            <select name='singer_id'>
                                <?php
                                $sql3 = 'select * from singer';
                                $result3 = mysqli_query($connect, $sql3);
                                while ($row_singer =  mysqli_fetch_array($result3)) {
                                    $singer_id = $row_singer['singer_id'];
                                    $singer_name = $row_singer['singer_name'];
                                    echo "<option value='$singer_id'>$singer_name</option>";
                                }
                                ?>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" name="add_song" value="Add">
                    </div>
                </form>
            </div>
        </div>
        <?php

        if (isset($_POST['add_song'])) {
            $song_id = $_POST['song_id'];
            $song_name = $_POST['song_name'];
            $song_price = $_POST['song_price'];
            //Lấy ảnh từ thư mục bất kỳ của máy tính
            $song_img = $_FILES['song_img']['name'];
            // di chuyển ảnh từ thư mục bất kỳ sang thư mục tmp_name của htdocs
            $song_img_tmp = $_FILES['song_img']['tmp_name'];

            // Đưa ảnh từ thư mục tmp sang thư mục cần lưu 
            move_uploaded_file($song_img_tmp, "Images/$song_img");
            $song_audio = $_FILES['song_audio']['name'];
            // di chuyển ảnh từ thư mục bất kỳ sang thư mục tmp_name của htdocs
            $song_audio_tmp = $_FILES['song_audio']['tmp_name'];
            move_uploaded_file($song_audio_tmp, "Audio/$song_audio");
            $genre_id = $_POST['genre_id'];
            $singer_id = $_POST['singer_id'];

            //Thêm sản phẩm vào cơ sở dữ liệu
            $sql = "INSERT INTO song VALUES(NULL,'$song_name','$song_description','$song_price','$song_audio','$song_img','$genre_id','$singer_id')";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                echo "<script>alert('Thêm mới sản phẩm thành công') </script>";
                echo "<script> window.open('home.php','_self') </script>";
            } else {
                echo "<script>alert('Thêm mới lỗi') </script>";
            }
        }
        ?>
    </div>


    <!-- Edit Modal HTML -->
    <div id="editModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Products</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Brand</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Delete Modal HTML -->
    <div id="deleteModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Product</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these products?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<footer>
<?php include 'footer.php' ?>;
</footer>
</html>