<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    <title>Document</title>
</head>
<body>
    <h4>Akun saya<h4>
    <div id = "menu">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="view">view</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="edit">Edit</a>
            </li>
        </ul>
    </div>
    <div id = "konten">
    </div>
    </div>
		<script>
			$(document).ready(function(){
				// halaman default
				$('#konten').load('view.php');
				// fungsi yang mengatur konten mana yang akan ditampilkan
				$('#menu a').click(function(){
					// mengambil data dari href
					var hal = $(this).attr('href');
					// konten akan diisi oleh menu yang dipilih sesuai dengan isi dari href yang dipilih
					$('#konten').load(hal+'.php');
					return false;
				});
			});
		</script>
</body>
</html>