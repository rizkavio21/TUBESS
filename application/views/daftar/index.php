<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/regis.css">
	<title> <?= $title;?> | HelloMotion.com </title>
	
</head>
<body>
		<div class="container col-md-7">
	<h2 style="color:red;">DAFTAR AKUN KDRI.CO</h2>
	
			<div class="Content">
					<div class="row-fluid">
					<!--  -->
					<?php echo validation_errors(); ?>
					<?php echo form_open_multipart('index.php/daftar/add'); ?>
								<div class="form-group">
										<label for="email"><b>Username:</b><span>*</span></label>
                                        <input type="text" class="form-control" id="uname" name="uname" value="<?= set_value('uname'); ?>" required>
										<div class="kumpulan"> Spaces are allowed; punctuation is not allowed except for periods, hyphens, and underscores. </div>
										<?= form_error('uname'); ?>
								</div>
								<div class="form-group">
										<label for="pwd"><b>E-mail address:</b><span>*</span></label>
										<input type="email" class="form-control" id="mail" name="mail" value="<?= set_value('mail'); ?>" required> 
								</div>		
								<div class="form-group">
										<label for="email"><b>Password:</b><span>*</span></label>
										<input type="password" class="form-control" id="psww" name="psww" value="<?= form_error('psww'); ?>" required>
										<?= form_error('psww'); ?>
								</div>
								<div class="form-group">
										<label for="pwd"><b>Confirm Password:</b><span>*</span></label>
                                        <input type="password" class="form-control" id="pwd" name="pwd" required>
                                        <div class="kumpulan">Provide a password for the new account in both fields.</div>
								</div>

											<h5>Profil</h5>
								<div class="form-group">
										<label for="email"><b>Nama Lengkap:</b><span>*</span></label>
										<input type="text" class="form-control" id="nama" name= "fullname"value="<?= set_value('fullname'); ?>" required>
								</div>
								
									<label for="edit-profile-tanggal-lahir"><b>Tanggal Lahir:</<span class="form-required" style=" display:inline;" title="This field is required.">*</span></label>
										<div class="container-inline">
                                            <div class="form-item" id="edit-profile-tanggal-lahir-month-wrapper">
										        <select name="profile_tanggal_lahir[month]" class="form-select" id="edit-profile-tanggal-lahir-month" ><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4" selected="selected">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>

                                                <span class="form-item" id="edit-profile-tanggal-lahir-day-wrapper">
                                                    <select name="profile_tanggal_lahir[day]" class="form-select" id="edit-profile-tanggal-lahir-day" ><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13" selected="selected">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                                                </span>
                                                <span class="form-item" id="edit-profile-tanggal-lahir-year-wrapper">
                                                    <select name="profile_tanggal_lahir[year]" class="form-select" id="edit-profile-tanggal-lahir-year" ><option value="1900">1900</option><option value="1901">1901</option><option value="1902">1902</option><option value="1903">1903</option><option value="1904">1904</option><option value="1905">1905</option><option value="1906">1906</option><option value="1907">1907</option><option value="1908">1908</option><option value="1909">1909</option><option value="1910">1910</option><option value="1911">1911</option><option value="1912">1912</option><option value="1913">1913</option><option value="1914">1914</option><option value="1915">1915</option><option value="1916">1916</option><option value="1917">1917</option><option value="1918">1918</option><option value="1919">1919</option><option value="1920">1920</option><option value="1921">1921</option><option value="1922">1922</option><option value="1923">1923</option><option value="1924">1924</option><option value="1925">1925</option><option value="1926">1926</option><option value="1927">1927</option><option value="1928">1928</option><option value="1929">1929</option><option value="1930">1930</option><option value="1931">1931</option><option value="1932">1932</option><option value="1933">1933</option><option value="1934">1934</option><option value="1935">1935</option><option value="1936">1936</option><option value="1937">1937</option><option value="1938">1938</option><option value="1939">1939</option><option value="1940">1940</option><option value="1941">1941</option><option value="1942">1942</option><option value="1943">1943</option><option value="1944">1944</option><option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019" selected="selected">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option></select>
                                                </span>
                                            </div>
								        </div> 
								<div class="form-group">
										<label><b>Kota domisili:</b><span>*</span></label>
										<input type="text" class="form-control" name ="domisili" required>
								</div>
							

										 <label><b>Provinsi:</b><span>*</span></label>
											<select name="Provinsi" class="form-control" required>
													<option value="Aceh">Aceh</option>
													<option value="Sumatera Utara">Sumatera Utara</option>
													<option value="Sumatera Barat">Sumatera Barat</option>
													<option value="Riau">Riau</option>
													<option value="Jambi">Jambi</option>
													<option value="Sumatera Selatan">Sumatera Selatan</option>
													<option value="Bengkulu">Bengkulu</option>
													<option value="Lampung">Lampung</option>
													<option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
													<option value="Kepulauan Riau">Kepulauan Riau</option>
													<option value="Banten">Banten</option>
													<option value="DKI Jakarta">DKI Jakarta</option>
													<option value="Jawa Barat">Jawa Barat</option>
													<option value="Jawa Tengah">Jawa Tengah</option>
													<option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
													<option value="Jawa Timur">Jawa Timur</option>
													<option value="Bali">Bali</option>
													<option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
													<option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
													<option value="Kalimantan Barat">Kalimantan Barat</option>
													<option value="Kalimantan Tengah">Kalimantan Tengah</option>
													<option value="Kalimantan Selatan">Kalimantan Selatan</option>
													<option value="Kalimantan Timur">Kalimantan Timur</option>
													<option value="Sulawesi Utara">Sulawesi Utara</option>
													<option value="Sulawesi Tengah">Sulawesi Tengah</option>
													<option value="Sulawesi Selatan">Sulawesi Selatan</option>
													<option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
													<option value="Sulawesi Barat">Sulawesi Barat</option>
													<option value="Gorontalo">Gorontalo</option>
													<option value="Maluku">Maluku</option>
													<option value="Maluku Utara">Maluku Utara</option>
													<option value="Papua Barat">Papua Barat</option>
													<option value="Papua">Papua</option></select>
											</select> 
										</br>
										<div class="form-group">
												<label><b>No Handphone:</b><span>*</span></label>
												<input type="number" class="form-control" name="nomor" required >
										</div>		
										<div class="form-group">
												<label><b>Pekerjaan:</b><span>*</span></label>
												<input type="text" class="form-control" name="job" required>
										</div>
										<div class="form-group">
												<label><b>Akun Twitter:</b><span>*</span></label>
												<input type="text" class="form-control" name="akun" required>
										</div>
								<button type="submit" name="add" class="btn btn-success btn-user btn-block">Register</button>
								<?php echo form_close(); ?>

			</div>
		</div>
    
</body>
</html>