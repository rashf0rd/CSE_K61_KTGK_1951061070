<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Quản lý bệnh nhân</title>
  </head>
  <body>
    <h1 class="bg-warning"></h1>
<main>
    <a href="add_partient.php" class="btn btn-success"><i class="fas fa-user-plus"></i>Thêm</a>
    <a href="update_partient.php" class="btn btn-success"><i class="fas fa-user-plus"></i>Sửa</a>
    <a href="del_partient.php" class="btn btn-success"><i class="fas fa-user-plus"></i>Xóa</a>
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã bệnh nhân</th>
                    <th scope="col">Họ đệm bệnh nhân</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Nhóm máu</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Chiều cao</th>
                    <th scope="col">Cân nặng</th>
                    <th scope="col">Ngày lập sổ</th>
                    <th scope="col">Ngày cập nhật</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM patient";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['patientid'].'</th>';
                            echo '<td>'.$row['lastname'].'</td>';
                            echo '<td>'.$row['firstname'].'</td>';
                            echo '<td>'.$row['dateofbirth'].'</td>';
                            echo '<td>'.$row['gender'].'</td>';
                            echo '<td>'.$row['mobile'].'</td>';
                            echo '<td>'.$row['email'].'</td>';
                            echo '<td>'.$row['height'].'</td>';
                            echo '<td>'.$row['weight'].'</td>';
                            echo '<td>'.$row['blood_type'].'</td>';
                            echo '<td>'.$row['created_on'].'</td>';
                            echo '<td>'.$row['modified_on'].'</td>';
                            echo '</tr>';}
                    }
                ?>
            </tbody>
            </table>
</main>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>