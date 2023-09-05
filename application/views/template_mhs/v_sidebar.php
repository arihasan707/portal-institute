 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link collapsed" href="<?= base_url('portal_mahasiswa')?>">
                 <i class="bi bi-grid"></i>
                 <span>Dashboard</span>
             </a>
         </li><!-- End Dashboard Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" href="<?= base_url('portal_mahasiswa/profil')?>">
                 <i class="bi bi-person"></i>
                 <span>Profile</span>
             </a>
         </li><!-- End Profile Page Nav -->

         <li class="nav-item" id="khs">
             <a class="nav-link collapsed" data="<?= base_url('portal_mahasiswa/khs/cari')?>"
                 href="<?= base_url('portal_mahasiswa/khs')?>">
                 <i class="bi bi-receipt"></i>
                 <span>Kartu Hasil Studi</span>
             </a>
         </li><!-- End Profile Page Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" href="<?= base_url('portal_mahasiswa/keluar')?>">
                 <i class="bi bi-x-circle"></i>
                 <span>Log Out</span>
             </a>
         </li><!-- End F.A.Q Page Nav -->

     </ul>

 </aside><!-- End Sidebar-->