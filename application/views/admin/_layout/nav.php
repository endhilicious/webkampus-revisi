<?php $modul = $this->uri->segment(2); $method = $this->uri->segment(3); ?>
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
                <div class="office">
                    <h1><i class="lnr lnr-user"></i></h1>
                    <span>ADMIN</span>
                    <hr>
                </div>
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li class="<?=($modul == '' ? 'active' : '')?>">
                            <a href="<?=admin_url('beranda')?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="#subLayouts" data-toggle="collapse" class="collapsed"><i class="lnr lnr-layers"></i> <span>Referensi Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subLayouts" class="collapse ">
                                <ul class="nav">
                                    <li><a href="data_umum.html" class="">Data Umum</a></li>
                                    <li><a href="data_instansi.html" class="">Data Instansi</a></li>
                                    <li><a href="tingkat_eselon.html" class="">Tingkat Eselon</a></li>
                                    <li><a href="ref_jabatan.html" class="">Referensi Jabatan</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="data_pegawai.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Data Pegawai</span></a></li>
                        <li>
                            <a href="#migrasi" data-toggle="collapse" class="collapsed"><i class="lnr lnr-code"></i> <span>Migrasi Pegawai</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="migrasi" class="collapse ">
                                <ul class="nav">
                                    <li><a href="daftar_pegawai.html" class="">Daftar Pegawai</a></li>
                                    <li><a href="naik_pangkat.html" class="">Daftar Kenaikan Pangkat</a></li>
                                    <li><a href="mutasi.html" class="">Daftar Mutasi</a></li>
                                    <li><a href="pensiun.html" class="">Daftar Pensiun</a></li>
                                    <li><a href="meninggal.html" class="">Meninggal</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#forms" data-toggle="collapse" class="collapsed"><i class="lnr lnr-pencil"></i> <span>Laporan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="forms" class="collapse ">
                                <ul class="nav">
                                    <li><a href="riwayat_hidup.html" class="">Daftar Riwayat Hidup</a></li>
                                    <li><a href="daftar_unit.html" class="">Daftar Unit Kerja</a></li>
                                    <li><a href="nama_pejabat.html" class="">Daftar Nama Pejabat</a></li>
                                    <li><a href="rekap_agama.html" class="">Rekap Jenis Kelamin</a></li>
                                    <li><a href="rekap_golongan.html" class="">Rekap Jabatan</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#pengaturan" data-toggle="collapse" class="collapsed"><i class="lnr lnr-cog"></i> <span>Pengaturan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="pengaturan" class="collapse ">
                                <ul class="nav">
                                    <li><a href="kelola_pegawai.html" class="">Kelola Pegawai</a></li>
                                    <li><a href="kelola_skpd.html" class="">Kelola SKPD</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
