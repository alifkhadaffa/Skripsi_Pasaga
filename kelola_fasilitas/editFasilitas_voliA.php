<?php include('../Pengguna/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Fasilitas</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style-editFasilitas.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <style>
        .btn-1 {
            font-family: Hack, monospace;
            background: #0D7A6F;
            color: #ffffff;
            cursor: pointer;
            font-size: 20px;
            margin-left: 16px;
            padding: 1rem;
            border: 0;
            transition: all 0.5s;
            border-radius: 10px;
            width: auto;
            position: relative;
        }
            .btn-1::after {
                content: '\21f0';
                font-family: "Font Awesome 5 Pro";
                font-weight: 400;
                position: absolute;
                left: 80%;
                top: 31%;
                right: 5%;
                bottom: 0;
                opacity: 0;
            }

            .btn-1:hover {
                background: #0D7A6F;
                transition: all 0.5s;
                border-radius: 10px;
                box-shadow: 0px 6px 15px #0000ff61;
                padding: 1.5rem 3.5rem 1.5rem 1.5rem;
            }
            .btn-1::after {
                opacity: 1;
                transition: all 0.5s;
            }
        }
    }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Pasaga Admin</h2>
            <ul>
                <li><a href="../index.php" class="active"><i class="fas fa-file-alt" aria-hidden="true"></i>Pemesanan</a></li>
                <li><a href="../statistik.php"><i class="fas fa-chart-bar"></i>Statistik</a></li>
                <li><a href="../kelola.php" style="text-decoration: underline;"><i class="fas fa-volleyball-ball"></i>Kelola Fasilitas</a></li>
            </ul> 
            <div class="social_media">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

    
    <div class="main_content">
    <?php
        $sql = "SELECT * FROM fasilitas WHERE ID_Fasilitas = '5'";
        $results = mysqli_query($db, $sql) or die( mysqli_error($db));
        $row = mysqli_fetch_array($results)
    ?>
            <div class="header">Kelola Fasilitas</div>  
            <form action="editFasilitas.php" method="post" enctype="multipart/form-data">
            <div class="info">
                <div class="img">
                    <img src="../uploads/<?php echo $row["foto_fasilitas"]?>" style="width:20%">
                </div>
            <div class="content2">
            <input type="file" name="fileFotoFasilitas">
            </div>   
        </div>

        
        <hr style="width: 90%; text-align: left; margin-left: 18px; border-color: honeydew;">
        
            <h4>Nama Fasilitas*</h4>
            <input type="input" class="form__field" value="<?php echo $row["Nama_Fasilitas"]; ?>" name="namaFasilitas" id='name' required />
            <hr style="width: 90%; text-align: left; margin-left: 18px; border-color: honeydew; margin-top: 24px;">

        <h4>Deskripsi Fasilitas*</h4>
        <input type="textar" class="form__field" value="<?php echo $row["Deskripsi"]; ?>" name="DeskripsiFas" id='name' required />
        <hr style="width: 90%; text-align: left; margin-left: 18px; border-color: honeydew; margin-top: 24px;">

        <h4>Harga Fasilitas* (Semua harga dalam rupiah)</h4>
        <div class="harga">
        <h6>Weekdays 06.00 - 14.00</h6>
        <input type="input" class="form__fieldHarga" value="<?php echo $row["Tarif_Per_Jam(Weekday 06.00-14.00)"]; ?>" name="hargaday6" id='harga' required />
        <h6>Weekdays 14.00 - 17.00</h6>
        <input type="input" class="form__fieldHarga" value="<?php echo $row["Tarif_Per_Jam(Weekday 14.00-17.00)"]; ?>" name="hargaday14" id='harga' required />
        <h6>Weekdays 17.00 - 21.00</h6>
        <input type="input" class="form__fieldHarga" value="<?php echo $row["Tarif_Per_Jam(Weekday 17.00-21.00)"]; ?>" name="hargaday17" id='harga' required />
        <hr style="width: 90%; text-align: left; margin-left: 18px; border-color: honeydew; margin-top: 24px;">

        <h6>Jumat 06.00 - 14.00</h6>
        <input type="input" class="form__fieldHarga" value="<?php echo $row["Tarif_Per_Jam(Jumat 06.00-14.00)"]; ?>" name="hargajum6" id='harga' required />
        <h6>Jumat 14.00 - 17.00</h6>
        <input type="input" class="form__fieldHarga" value="<?php echo $row["Tarif_Per_Jam(Jumat 14.00-17.00)"]; ?>" name="hargajum14" id='harga' required />
        <h6>Jumat 17.00 - 21.00</h6>
        <input type="input" class="form__fieldHarga" value="<?php echo $row["Tarif_Per_Jam(Jumat 17.00-21.00)"]; ?>" name="hargajum17" id='harga' required />
        <hr style="width: 90%; text-align: left; margin-left: 18px; border-color: honeydew; margin-top: 24px;">

        <h6>Weekend 06.00 - 14.00</h6>
        <input type="input" class="form__fieldHarga" value="<?php echo $row["Tarif_Per_Jam(Weekend 06.00-14.00)"]; ?>" name="hargaend6" id='harga' required />
        <h6>Weekend 14.00 - 17.00</h6>
        <input type="input" class="form__fieldHarga" value="<?php echo $row["Tarif_Per_Jam(Weekend 14.00-17.00)"]; ?>" name="hargaend14" id='harga' required />
        <h6>Weekend 17.00 - 21.00</h6>
        <input type="input" class="form__fieldHarga" value="<?php echo $row["Tarif_Per_Jam(Weekend 17.00-21.00)"]; ?>" name="hargaend17" id='harga' required />
        </div>

        <hr style="width: 90%; text-align: left; margin-left: 18px; border-color: honeydew; margin-top: 24px;">

        <button type="submit" class="btn-1" name="saveEditVoliA">Save</button> <br>
        </form>
    </div>

    <script>
        const wrapperEdit = document.querySelector(".wrapper-edit");
        const fileName = document.querySelector(".file-name");
        const defaultBtn = document.querySelector("#default-btn");
        const customBtn = document.querySelector("#custom-btn");
        const cancelBtn = document.querySelector("#cancel-btn");
        const img = document.querySelector("img")
        let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
        function defaultBtnActive(){
            defaultBtn.click();
        }

        defaultBtn.addEventListener("change" , function(){
            const file = this.files[0];
           if(file){
            const reader = new FileReader();
            reader.onload = function(){
                const result = reader.result;
                img.src = result;
                wrapperEdit.classList.add("active");
            }
            cancelBtn.addEventListener("click" , function(){
                img.src = "";
                wrapperEdit.classList.remove("active");
            })
            reader.readAsDataURL(file);
        }
        if(this.value){
            let valueStore = this.value.match(regExp);
            fileName.textContent = valueStore;
        }
        });
           
    </script>
</div>
</body>
</html>