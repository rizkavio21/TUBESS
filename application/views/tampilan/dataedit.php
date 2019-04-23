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
                        <a style = "color:#1BADCF;" class="nav-link " href="<?php echo ('index');?>">View</a>
                    </li>
                    <li class="nav-item">
                        <a style = "color:#1BADCF;"class="nav-link active" href="<?php echo ('tampiledit');?>">Edit</a>
                    </li>     
                </div>
        </div>
        <form action="edit" method="POST"  id="user-profile-form" >
            <div>
            <ul class="nav" style="color: black;">
                <li class="nav-item">     
                    <a class="nav-link" href = "tampiledit" style="border-right:2px; color: #1BADCF; ">Account</a>
                </li>
                <li>
                    <a  class="nav-link" href="tampilprofil" style="border-right:2px; color: #1BADCF; ">Profil</a>
                </li>
            </ul>
                <hr>
                <b> Account Information </b>
                <div class="form-group">
                    <b> E-mail Address </b>
                    <br><input type="text" name="email" value="<?php echo $user['email']; ?>" required></br>
                        <div class="desc">A valid e-mail address. All e-mails from the system will 
                        be sent to this address. The e-mail address is not made public and will only be used if you wish to receive a new password 
                        or wish to receive certain news or notifications by e-mail.
                        </div> 
                </div>
                <div class="form-group">
                    <b>Password</b>
                    <br><input type="text" name="psww"></br>
                </div>
                <div class="form-group">
                    <b>Confrim Password</b>
                    <br><input type="text" name="pass"></br>
                        <div class="desc">To change the current user password, enter the new password in both fields.
                        </div>
                </div>
                <hr>
                <b>Picture</b>
                <b>Upload picture</b>
                    <input type="file"></input>
                        <div class="desc"> Your virtual face or picture. Maximum dimensions are 85x85 and the maximum size is 300 kB.
                            </div>
                <hr>
                 <b> Locale Setting</b>
                    <div class="form-group">
                    <label for="edit-timezone-name">Default time zone: </label>
                        <select name="timezone_name" class="form-select" id="edit-timezone-name" ><option value=""></option><option value="Africa/Abidjan">Africa/Abidjan</option><option value="Africa/Accra">Africa/Accra</option><option value="Africa/Addis_Ababa">Africa/Addis_Ababa</option><option value="Africa/Algiers">Africa/Algiers</option><option value="Africa/Asmara">Africa/Asmara</option><option value="Africa/Bamako">Africa/Bamako</option>    
                        </select>
                        <div class="desc">Select your current local time. If in doubt, choose the timezone that is closest to your location which has the same rules for daylight saving time. Dates and times throughout this site will be displayed using this time zone.</div>
                    </div>
                <hr>
                <input type="submit" style= "background-color:#249961;" name="op" id="edit-submit" value="Save"  class="btn btn-success btn-user form-submit " />

            </div>
        </form>
        </div>
    </div>
</div>	