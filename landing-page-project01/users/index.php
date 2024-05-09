<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Website</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Akun Pasien</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="text-center">Akun Terdaftar</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>User Id</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Tanggal Pembuatan Akun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Panggil file
                                    require '../dbkoneksi.php';
                                    // Bikin Query SQL
                                    $query = $dbh->query("SELECT * FROM users");
                                    // Tampilkan data looping
                                    foreach ($query as $row) {
                                        echo "<tr>";
                                        echo "<td>" . $row['user_id'] . "</td>";
                                        echo "<td>" . $row['password'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['username'] . "</td>";
                                        echo "<td>" . $row['created_at'] . "</td>";

                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>