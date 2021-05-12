<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Fasilitas</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-editFasilitas.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Pasaga Admin</h2>
            <ul>
                <li><a href="index.php" class="active"><i class="fas fa-file-alt" aria-hidden="true"></i>Pemesanan</a></li>
                <li><a href="statistik.php"><i class="fas fa-chart-bar"></i>Statistik</a></li>
                <li><a href="kelola.php" style="text-decoration: underline;"><i class="fas fa-volleyball-ball"></i>Kelola Fasilitas</a></li>
                <li><a href="verifikasi.php"><i class="fas fa-user"></i>Verifikasi Anggota</a></li>
            </ul> 
            <div class="social_media">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

    <div class="main_content">
            <div class="header">Kelola Fasilitas</div>  

            <div class="info">
                <div class="wrapper-edit">
                <div class="img">
                    <img src="">
                </div>
                <div class="content">
                    <div class="icon"><i class="fas fa-camera"></i></div>
                    <div class="text">No file chosen yet!</div>
                    <div id="cancel-btn"><i class="fas fa-times"></i></div>
                    <div class="file-name">File name here</div>
                </div>
            </div>
            <div class="content2">
                <input id="default-btn" type="file" hidden>
                <button onclick = "defaultBtnActive()"  id="custom-btn">Choose File</button>
            </div>   
        </div>

        <hr style="width: 90%; text-align: left; margin-left: 18px; border-color: honeydew;">

            <h4>Nama Fasilitas*</h4>
            <input type="input" class="form__field" placeholder="Lapangan Futsal A" name="name" id='name' required />
            <hr style="width: 90%; text-align: left; margin-left: 18px; border-color: honeydew; margin-top: 24px;">

        <h4>Deskripsi Fasilitas*</h4>
        <input type="input" class="form__field" placeholder="Lapangan Futsal A adalah lapangan ..." name="name" id='name' required />
        <hr style="width: 90%; text-align: left; margin-left: 18px; border-color: honeydew; margin-top: 24px;">

        <h4>Harga Fasilitas*</h4>
        <div class="harga">
        <h6>Weekdays</h6>
        <input type="input" class="form__fieldHarga" placeholder="Rp80.000" name="harga" id='harga' required />

        <h6>Jumat</h6>
        <input type="input" class="form__fieldHarga" placeholder="Rp80.000" name="harga" id='harga' required />

        <h6>Weekend</h6>
        <input type="input" class="form__fieldHarga" placeholder="Rp80.000" name="harga" id='harga' required />
</div>
        <hr style="width: 90%; text-align: left; margin-left: 18px; border-color: honeydew; margin-top: 24px;">

        <h4>Maintanance Date</h4>
        <h6>Dari</h6>
        <div class="date-picker">
            <input type="date" name="datepicker" id="datepicker" style="margin-left: 18px;">
        </div>

        <h6>Sampai</h6>
        <div class="date-picker">
            <input type="date" name="datepicker" id="datepicker" style="margin-left: 18px;">
        </div>
        <hr style="width: 90%; text-align: left; margin-left: 18px; border-color: honeydew; margin-top: 24px;">

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