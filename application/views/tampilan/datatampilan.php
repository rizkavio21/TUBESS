<style type="text/css">
    .jdl{
        font-size : 24px;
    }
    .isi{
        font-size: 20px;
    }
</style>

<div class="container col-sm-7">
	<div class="row-fluid">
		<div class="span8">
            <h3 style="color:grey;">Akun Saya</h3>
            <?php echo $user['username']; ?>
				<div id="tabs-wrapper" class="clear-block">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo ('index');?>">View</a>
                    </li>
                    <li class="nav-item">
                        <a style = "color:black;"class="nav-link" href="<?php echo ('tampiledit');?>">Edit</a>
                    </li>     
				</div>		  					  					  					  	
				  <h3>Profil</h3><hr>
				<dl>
				  	<dt class="profile-profile_nama_lengkap">Nama Lengkap</dt>
					<dd class="profile-profile_nama_lengkap"><?php echo $user['fullname']; ?></dd>
					<dt class="profile-profile_tanggal_lahir">Tanggal Lahir</dt>
                    <dd class="profile-profile_tanggal_lahir"><?php echo $user['tgl'];?>/<?php echo $user['bln'];?>/<?php echo $user['tahun'];?> </dd>
					<dt class="profile-profile_kota">Kota Domisili</dt>
					<dd class="profile-profile_kota"><?php echo $user['kota'];?></dd>
					<dt class="profile-profile_provinsi">Provinsi</dt>
					<dd class="profile-profile_provinsi"><?php echo $user['province'];?></dd>
					<dt class="profile-profile_no_handphone">No Handphone</dt>
					<dd class="profile-profile_no_handphone"><?php echo $user['no_phone'];?></dd>
					<dt class="profile-profile_pekerjaan">Pekerjaan</dt>
					<dd class="profile-profile_pekerjaan"><?php echo $user['pekerjaan'];?></dd>
                </dl>
                <h2 class="jdl"> User Points <h2>
                <hr>
                <h3 class="isi"> Points <h3>
                <h3 class="isi"> 0 <h4>
                <h2 class="jdl"> History <h2>
                <hr>
                <h3 class="isi"> Member For </h3>
                <?php echo $user['date_created'] ?>
		</div>
	</div>
</div>