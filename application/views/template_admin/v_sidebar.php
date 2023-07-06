 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link collapsed dashboard" href="<?= base_url('administrator') ?>">
                 <i class="bi bi-grid"></i>
                 <span>Dashboard</span>
             </a>
         </li><!-- End Dashboard Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#akses-login" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-menu-button-wide"></i><span>Akses Login</span><i
                     class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="akses-login" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                 <li class="nav-item">
                     <a class="nav-link collapsed" href="<?= base_url('administrator/akses_mhs')?>">
                         <i class="bi bi-circle"></i>
                         <span>Akses Mahasiswa</span>
                     </a>
                 </li><!-- End Profile Page Nav -->

                 <li class="nav-item">
                     <a class="nav-link collapsed" href="<?= base_url('administrator/akses_dosen')?>">
                         <i class="bi bi-circle"></i>
                         <span>Akses Dosen</span>
                     </a>
                 </li><!-- End Profile Page Nav -->

                 <li class="nav-item">
                     <a class="nav-link collapsed" href="<?= base_url('administrator/akses_admin')?>">
                         <i class="bi bi-circle"></i>
                         <span>Akses Admin</span>
                     </a>
                 </li><!-- End Profile Page Nav -->
             </ul>
         </li><!-- End Components Nav -->
         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#perkuliahan" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-journal-text"></i><span>Perkuliahan</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="perkuliahan" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li class="nav-item">
                     <a class="nav-link collapsed" href="<?= base_url('administrator/tahun_semester')?>">
                         <i class="bi bi-circle"></i>
                         <span>Tahun Semester</span>
                     </a>
                 </li><!-- End Profile Page Nav -->
             </ul>
         </li><!-- End Components Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" href="<?= base_url('administrator/keluar')?>">
                 <i class="bi bi-x-circle"></i>
                 <span>Logout</span>
             </a>
         </li><!-- End F.A.Q Page Nav -->

     </ul>

 </aside><!-- End Sidebar-->