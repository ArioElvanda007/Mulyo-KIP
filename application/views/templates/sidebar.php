  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  	<!-- sidebar: style can be found in sidebar.less -->
  	<section class="sidebar">
  		<!-- Sidebar user panel -->
  		<div class="user-panel">
  			<div class="pull-left image">
  				<img src="<?php echo base_url() ?>assets/dist/img/default_foto.jpg" class="img-circle" alt="User Image">
  			</div>
  			<div class="pull-left info" style="height: 100px;">
  				<p><?= $this->session->userdata('MIS_LOGGED_NAME'); ?></p>
  				<a href="#"><i class="fa fa-circle text-success"></i> IT Manager</a>
  			</div>
  		</div>
  		<!-- search form -->
  		<form action="#" method="get" class="sidebar-form">
  			<div class="input-group">
  				<input type="text" name="q" class="form-control" placeholder="Search...">
  				<span class="input-group-btn">
  					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
  					</button>
  				</span>
  			</div>
  		</form>
  		<!-- /.search form -->
  		<!-- sidebar menu: : style can be found in sidebar.less -->
  		<ul class="sidebar-menu" data-widget="tree">
  			<li class="header">MAIN NAVIGATION</li>
  			<li class="active treeview">
  			<li><a href="<?= site_url('welcome/index') ?>">
  					<i class="fa fa-circle-o"></i><span>Dashboard</span>
  					<span class="pull-right-container">
  						<i class="fa fa-angle-left pull-right"></i>
  					</span>
  				</a></li>
  			<!-- <a href="<?= site_url('welcome/index') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> -->
  			</a>
  			</li>
  			<li class="treeview">
  			<li><a href="<?= site_url('job') ?>">
  					<i class="fa fa-list"></i><span>Daftar Job</span>
  					<span class="pull-right-container">
  						<i class="fa fa-angle-left pull-right"></i>
  					</span>
  				</a></li>
  			<!-- <a href="<?= site_url('job/job') ?>">
            <i class="fa fa-dashboard"></i>Daftar JOB</a> -->
  			</li>

  			<li class="header">ENTRIES</li>
  			<li class="treeview">
  				<a href="#">
  					<i class="fa fa-edit"></i> <span>Entry Menu</span>
  					<span class="pull-right-container">
  						<i class="fa fa-angle-left pull-right"></i>
  					</span>
  				</a>
  				<ul class="treeview-menu">
  					<li><a href="#"><i class="fa fa-circle-o"></i>RAP</a></li>
  					<li class="treeview">
  						<a href="#"><i class="fa fa-circle-o"></i>PROCUREMENT
  							<span class="pull-right-container">
  								<i class="fa fa-angle-left pull-right"></i>
  							</span>
  						</a>
  						<ul class="treeview-menu">
  							<li><a href="#"><i class="fa fa-circle-o"></i> Kontrak/Purchase Order</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Approval Kontrak / Purchase Order</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Entry MOS (IN)</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Approval MOS (IN)</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Entry MOS (OUT)</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Approval MOS (OUT)</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Invoice</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> KO Addendum / Revisi</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Penutupan KO</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Tracking KO</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Pembatalan KO</a></li>
  						</ul>
  					</li>
  					<li class="treeview">
  						<a href="#"><i class="fa fa-circle-o"></i>PD/PJ
  							<span class="pull-right-container">
  								<i class="fa fa-angle-left pull-right"></i>
  							</span>
  						</a>
  						<ul class="treeview-menu">
  							<li><a href="#"><i class="fa fa-circle-o"></i> Entry PD (Lapangan)</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Entry PD (Keuangan)</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Approval PD (Cost Control)</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Approval PD (Keuangan)</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Reject PD</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Entry PJ Dana (Lapangan)</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Entry PJ Dana (Keuangan)</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Approval PJ Dana (Cost Control)</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Approval PJ Dana (Keuangan)</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Entry RKD</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Pembayaran PD</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Cek/Giro Mundur</a></li>
  						</ul>
  					</li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Daftar SPR Material/Alat</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Approval SPR Material/Alat</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Progress Fisik</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> RPPM</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Rencana Termin</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Penerimaan Termin</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Approval Penerimaan Termin</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Log Kasir</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Penerimaan Lain-lain</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Entry YAD</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Entry Permohonan Plafond</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Entry Rencana Pendapatan Lain-lain/Biaya</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Approval Rencana Pendapatan Lain-lain/Biaya</a></li>
  					<li class="treeview">
  						<a href="#"><i class="fa fa-circle-o"></i>ASSET
  							<span class="pull-right-container">
  								<i class="fa fa-angle-left pull-right"></i>
  							</span>
  						</a>
  						<ul class="treeview-menu">
  							<li><a href="#"><i class="fa fa-circle-o"></i> Jenis Aset</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Daftar Aset</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Peminjaman Aset</a></li>
  						</ul>
  					</li>
  				</ul>
  			</li>
  			<li class="header">FINANCE & ACCOUNTING</li>
  			<li class="treeview">
  				<a href="#">
  					<i class="fa fa-dollar"></i> <span>Finance & Accounting</span>
  					<span class="pull-right-container">
  						<i class="fa fa-angle-left pull-right"></i>
  					</span>
  				</a>
  				<ul class="treeview-menu">
  					<li><a href="#"><i class="fa fa-circle-o"></i> Chart Of Account</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> COA - External</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> GL Reference</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Resume Identitas</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Entry Jurnal Harian</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Approval Jurnal Harian</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Query Jurnal Harian</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Posting Jurnal</a></li>
  				</ul>
  			</li>

  			<li class="header">REPORTS</li>
  			<li class="treeview">
  				<a href="#">
  					<i class="fa fa-bar-chart-o"></i> <span>Menu Report</span>
  					<span class="pull-right-container">
  						<i class="fa fa-angle-left pull-right"></i>
  					</span>
  				</a>
  				<ul class="treeview-menu">
  					<li class="treeview">
  						<a href="#"><i class="fa fa-circle-o"></i> PROCUREMENT
  							<span class="pull-right-container">
  								<i class="fa fa-angle-left pull-right"></i>
  							</span>
  						</a>
  						<ul class="treeview-menu">
  							<li><a href="#"><i class="fa fa-circle-o"></i> Rekap KO</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Tracking KO</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Rekap Invoice Supplier</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Daftar Harga</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Query Hutang KO</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Query Invoice</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Penyerapan RAP Fisik <-> KO</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Rekap Hutang KO</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Rekap Hutang KO (PHO)</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Pie Chart Vendor</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Q. Permintaan Material/Alat</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> List Pengiriman KO Jatuh Tempo</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Volume MOS</a></li>
  						</ul>
  					</li>
  					<li class="treeview">
  						<a href="#"><i class="fa fa-circle-o"></i> PD/PJ
  							<span class="pull-right-container">
  								<i class="fa fa-angle-left pull-right"></i>
  							</span>
  						</a>
  						<ul class="treeview-menu">
  							<li><a href="#"><i class="fa fa-circle-o"></i> Daftar PD/PJ</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Rekap Pembayaran</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Penyerapan RAP</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Query PD/PJ</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Rekap Outstanding/Apprv PD</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Monitoring Cek/Giro Mundur</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Rekap PD Jaminan</a></li>
  						</ul>
  					</li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Monitoring Termin</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Laporan Keuangan Periodik</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Cash Flow</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Piutang Progress Fisik</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Attribute Kontrak</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Monitoring Rencana Termin</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Monitoring RPPM</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Rekap Proyek:Kontrak, Expens & Termin </a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Monitoring Cadangan KSO</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Bar Chart Proyek</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Kurva Progress</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Monitoring Proyek</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Saldo Rekening</a></li>
  					<li class="treeview">
  						<a href="#"><i class="fa fa-circle-o"></i> Accounting
  							<span class="pull-right-container">
  								<i class="fa fa-angle-left pull-right"></i>
  							</span>
  						</a>
  						<ul class="treeview-menu">
  							<li><a href="#"><i class="fa fa-circle-o"></i> Resume Posisi Keuangan & L/R Komperhensif</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Laporan Neraca</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Laporan Laba Rugi Komperhensif</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Buku Besar</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Neraca Mutasi</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Buku Tambahan</a></li>
  							<li><a href="#"><i class="fa fa-circle-o"></i> Nota Akuntansi</a></li>
  						</ul>
  					</li>
  				</ul>
  			</li>
  			<li class="header">TOOLS</li>
  			<li class="treeview">
  				<a href="#"><i class="fa fa-gears"></i><span>TOOLS</span>
  					<span class="pull-right-container">
  						<i class="fa fa-angle-left pull-right"></i>
  					</span>
  				</a>
  				<ul class="treeview-menu">
  					<li><a href="#"><i class="fa fa-circle-o"></i> Tracking PD</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Override Saldo</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Change Password</a></li>
  					<li><a href="#"><i class="fa fa-circle-o"></i> Broadcast Notification</a></li>
  				</ul>
  			</li>
  			<li><a href="<?php echo base_url('Auth/logout') ?>"><i class="fa fa-sign-out"></i><span>LOG OUT</span> </a></li>
  		</ul>
  	</section>
  	<!-- /.sidebar -->
  </aside>
