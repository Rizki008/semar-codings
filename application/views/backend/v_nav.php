<div class="left-side-bar">
	<div class="brand-logo">

		<a href="<?= base_url('home') ?>">
			<img src="<?= base_url('assets/backend/') ?>vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
			<img src="<?= base_url('assets/backend/') ?>vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
		</a>
		<div class="close-sidebar" data-toggle="left-sidebar-close">
			<i class="ion-close-round"></i>
		</div>
	</div>
	<div class="menu-block customscroll">
		<div class="sidebar-menu">
			<ul id="accordion-menu">
				<li>
					<a href="<?= base_url('home') ?>" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="<?= base_url('client') ?>" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-edit2"></span><span class="mtext">Client</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="<?= base_url('list') ?>" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-library"></span><span class="mtext">List Product</span>
					</a>
				</li>
				<li>
					<a href="<?= base_url('transaksi') ?>" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-calendar1"></span><span class="mtext">Tansaksi</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="<?= base_url('tracking') ?>" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-apartment"></span><span class="mtext">Tracking</span>
					</a>
				</li>
				<li>
					<a href="<?= base_url('pembayaran') ?>" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-invoice"></span><span class="mtext">Invoice</span>
					</a>
				</li>

				<li>
					<div class="dropdown-divider"></div>
				</li>
				<li>
					<div class="sidebar-small-cap">Extra</div>
				</li>
				<li>
					<a href="<?= base_url('user') ?>" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-edit-2"></span><span class="mtext">User</span>
					</a>
				</li>
				<li>
					<a href="<?= base_url('laporan') ?>" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-edit-2"></span><span class="mtext">Laporan</span>
					</a>
				</li>

			</ul>
		</div>
	</div>
</div>
<div class="mobile-menu-overlay"></div>
