<?php
    require 'koneksi.php';

    date_default_timezone_set("Asia/Makassar");

    $query = "SELECT * FROM user";
    $result = $db->query($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AKUN USER</title>
        <link rel="stylesheet" href="css/akunuser.css">
    </head>
    <body>
        <!-- header  -->

        <div class="header">
            <div class="logo">
                <img src="logo/logoo.png" alt="" width="250">
            </div>
            <p id="nama_toko">NONTON FILM</p>
            <div class="pencarian">
                <input type="text" placeholder="Cari" required>
            </div>
            <div class="navbar">
                <div class="tomlog">
                    <a href="loginuser.php" > <button class="tombol"> LOG-IN</button></a>
                    <a href="logout.php" > <button class="tombol"> LOG-OUT</button></a>
                </div>
            </div>
            <input class="mode" type="checkbox" onclick="ubahMode()">
            <script>
                function ubahMode(){
                    const ubah = document.body;
                    ubah.classList.toggle("dark");
                }
            </script>
        </div>

        <!-- tengah -->

        <div class="list-table">
            <h3 class="h3">Daftar Akun User</h3>
            <a href="registeruser.php"><button class="tmbl-tambah">BUAT AKUN</button></a>
        
            <table class="table">
                <tr class="thead">
                    <th>No</th>
                    <th nowrap>Nama Lengkap</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>No Telpon</th>
                    <th>Tanggal Lahir</th>
                    <th>Username</th>
                    <th>Photo Profil</th>
                    <th colspan="2">Actions</th>
                </tr>

                <?php
                    $i = 1;
                    while($row = mysqli_fetch_array($result)){

                    
                ?>

                <tr>
                    <td><?=$i;?></td>
                    <td nowrap><?= $row['nama'];?></td>
                    <td><?= $row['pw'];?></td>
                    <td><?= $row['email'];?></td>
                    <td><?= $row['nohp'];?></td>
                    <td><?= $row['ttl'];?></td>
                    <td><?= $row['username'];?></td>
                    <td><img src="profil/<?=$row['foto']?>" alt="" width="100px"></td>

                    <td class="edit">
                        <a href="edituser.php?id=<?=$row['id'];?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                            </svg>
                        </a>
                    </td>
                    <td class="hapus">
                        <a href="hapususer.php?id=<?=$row['id'];?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </a>
                    </td>
                </tr>
                
                <?php
                    $i++;
                    }
                ?>
            </table>
        </div>

        <!-- footer -->

        <div class="footer">
        <h1 class="kontak">Contact Info</h1>
        <div class="footer-2">
            <div class="alamat">
                <h2>Address</h2>
                <h3>JL. Perjuangan 7</h3>
            </div>
            <div class="email">
                <h2>Email</h2>
                <h3>nontonyukk@gmail.com</h3>
            </div>
            <div class="telp">
                <h2>Telpon</h2>
                <h3>+62 821 9188 1004</h3>
            </div>
            <div class="media-sosial">
                <h2>Instagram</h2>
                <div class="buat-ig">
                    <img src="logo/ig.png" alt="" width="50px">
                    <h3>NONTON FILM</h3>
                </div>
            </div>
                
            </div>
            <div class="copyright">
                &copy; 2021. <b>NontonYukk.com</b> All Rights Reserved.
            </div>
        </div>
        
    </body>
</html>