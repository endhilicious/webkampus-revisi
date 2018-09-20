<style>
.dropbtn {
    background-color:  #eb2629;
    color: white;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #eb2629;
    font-size: 14px;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color:#9e2014;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:#9e2014;}
</style>
<div class="header">
    <div class="logo" style="width: 100%;background-color: #0066AD">
    <a href="#" style="float: left;">
      <img src="https://3.bp.blogspot.com/-ts-z6iXoTWQ/WuPhW1pCIQI/AAAAAAAACl0/HNsB5IQzVT0wuNnb_DaVJ3NXwwaej8XkQCLcBGAs/s1600/Logo%2BUniversitas%2BHasanuddin%2BMakassar%2BUNHAS.png" alt="" style="margin: 0px 10px;height: 60px;">
          </a>
          <div>
              <p style="font-size:1.4em;color: #fff">Fakultas Teknik</p>
              <p style="font-size:1.4em;color: #fff">Universitas Hasanuddin</p>
          </div>
      </div>
  <div class="cssmenu" style="width: 100%;background-color: #eb2629;color: #fff">
    <ul>
      <li class="active"><a href="<?=site_url()?>">Beranda</a></li>
      <li><a href="<?=site_url()?>Homepage/profilFakultas">Profil Fakultas</a></li>
      <li><a href="<?=site_url()?>Homepage/akademik">Akademik</a></li>
      <li class="active">
         <div class="dropdown">
           <button class="dropbtn"><a href="<?=site_url()?>Homepage/sasaran">SASARAN</a></button>
            <div class="dropdown-content">
            <a href="<?=site_url()?>Homepage/tenaga_pendidik">Tenaga Pendidik</a>
            <a href="<?=site_url()?>Homepage/tenaga_kependidikan">Tenaga Kependidikan</a>
          </div>
        </div>
      </li>
      <li class="active">
         <div class="dropdown">
           <button class="dropbtn"><a href="#">DEPARTEMEN</a></button>
              <div class="dropdown-content">
            <a href="#">S1 (Sarjana)</a>
            <a href="#">S2 (Magister)</a>
            <a href="#">S3 (Doktor)</a>
          </div>
        </div>
      </li>
      <li><a href="<?=site_url()?>Homepage/fasilitas">Fasilitas</a></li>
      <li><a href="<?=site_url()?>Homepage/penelitian">Penelitian</a></li>
    </ul>
  </div>
  <div class="clear"></div>
 </div>
