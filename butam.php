<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="butam.css">
        <title>GiftBox</title>
    </head>
    <body>
        <header class="header">

            <div id="menu-btn" class="fas fa-bars"></div>
        
            <a href="index.html" class="logo"> <span>gift</span>box </a>
        
            <nav class="navbar">
                <a href="index.html">home</a>
                <a href="product.html">produk</a>
                <a href="butam.php">buku tamu</a>
                <a href="about.php">tentang</a>
            </nav>
        
        
        </header>

        <div id="container">
            <h1>BUKU TAMU</h1>
            <p>Silahkan isi buku tamu dibawah ini!</p><br>

            <div class="buku">
                <table border="0">
                    <form action="<?php echo $_SERVER ['PHP_SELF']?>" method="POST" on submit="validasi()">
                    <tr><div>
                        <td><label for="">Nama Lengkap</label></td>
                        <td><input type="text" name="nama" id="nama" placeholder="Nama Anda..."></td>
                    </div></tr>

                    <tr><div>
                        <td><label for="">NO HP</label></td>
                        <td><input type="text" name="nohp" id="nohp" placeholder="xxxxxxx"></td>
                    </div></tr>

                    <tr><div>
                        <td><label for="">Email</label></td>
                        <td><input type="text" name="email" id="email" placeholder="xxxx@gmail.com"></td>
                    </div></tr>

                    <tr><div>
                        <td><label for="">Alamat</label></td>
                        <td><input type="text" name="alamat" id="alamat" placeholder="Alamat Anda..."></td>
                    </div></tr>

                    <tr><div>
                        <td><label for="">Pesan</label></td>
                        <td><input type="text" name="pesan" id="pesan" placeholder="Saya sangat senang bisa berkunjung"></td>
                    </div></tr>

                    <tr><div>
                        <td colspan="2"><center><input type="Submit" value="Kirim"></center></td>
                    </div></tr>


                </form>
                </table>
            </div>
        </div>

        <script>
            function validasi(){
                var nama = document.getElementById("nama").value;
                var nohp = document.getElementById("nohp").value;
                var email = document.getElementById("email").value;
                var alamat = document.getElementById("alamat").value;
                var pesan = document.getElementById("pesan").value;

                if(nama !="" && nohp !="" && email !="" && alamat !="" pesan !=""){
                    return true
                } else {
                    alert ("Anda harus mengisi data dengan lengkap!")
                }
            }
        </script>

        <br>
        <div class="php">
            <?php
                if(isset($_POST['nama'])){
                    $nama = $_POST['nama'];
                    $nohp = $_POST['nohp'];
                    $email = $_POST['email'];
                    $alamat = $_POST['alamat'];
                    $pesan = $_POST['pesan'];

                echo"
                    <table>
                        <tr>
                            <th>Nama</th>
                            <th>NO HP</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Pesan</th>
                        </tr>
                        <tr>
                            <td>$nama</td>
                            <td>$nohp</td>
                            <td>$email</td>
                            <td>$alamat</td>
                            <td>$pesan</td>
                        </tr>
                    </table>";
                    }
            ?>


        <section class="footer" id="footer">

            <div class="box-container">
        
                <div class="box">
                    <h3>cabang utama kami</h3>
                    <a href="smg.html"> <i class="fas fa-map-marker-alt"></i> semarang </a>
                    <a href="jkt.html"> <i class="fas fa-map-marker-alt"></i> jakarta </a>
                    <a href="bdg.html"> <i class="fas fa-map-marker-alt"></i> bandung </a>
                    <a href="ygy.html"> <i class="fas fa-map-marker-alt"></i> yogyakarta </a>
                    <a href="bli.html"> <i class="fas fa-map-marker-alt"></i> bali </a>
                </div>
        
                <div class="box">
                    <h3>quick links</h3>
                    <a href="index.html"> <i class="fas fa-arrow-right"></i> home </a>
                    <a href="product.html"> <i class="fas fa-arrow-right"></i> produk </a>
                    <a href="index.html#services"> <i class="fas fa-arrow-right"></i> layanan </a>
                    <a href="about.php"> <i class="fas fa-arrow-right"></i> tentang </a>
            
                </div>
        
                <div class="box">
                    <h3>info kontak</h3>
                    <a href="tel:(024) 3517261"> <i class="fas fa-phone"></i> (024) 3517261 </a>
                    <a href="mailto:111202113330@mhs.dinus.ac.id?subject = Feedback&body = Message"> <i class="fas fa-envelope"></i> 111202113330@mhs.dinus.ac.id </a>
                    <a href="https://www.instagram.com/mmmbn_/"> <i class="fab fa-instagram"></i> instagram </a>
                    <a href="pti.html"> <i class="fas fa-map-marker-alt"></i> pati, jawa tengah </a>
                </div>
    
        
            </div>
        
            <div class="credit"> created by laka fatchan mubina | &copy <script>document.write(new Date().getFullYear())</script> GiftBox all right reserved </div>
        
        </section>

        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>