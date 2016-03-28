<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav" id="nav">
        <li class="sidebar-brand show-for-large-only">
            <a href="<?php echo base_url() . 'admin/'; ?>" >
                <img src="<?php echo base_url() ?>assets/backend/images/logo-deposepatu.png" alt="deposepatu">
            </a>
			<div class="sisipan">RESELLER DASHBOARD</div>
        </li>
        <li>
        	<?php echo anchor('admin/dashboard', 'Dashboard<span class="fi-graph-trend" alt="Dashboard">', array('alt' => 'Dashboard'));?>
        </li>
        <li>
        	<?php echo anchor('admin/general', 'General<span class="fi-graph-bar" alt="Shortcuts">', array('alt' => 'Shortcuts'));?>
        </li>
        <li>
        	<?php echo anchor('admin/page', 'Page<span class="fi-page-filled" alt="Shortcuts">', array('alt' => 'Shortcuts'));?>
        </li>
		<li>
			<?php echo anchor('admin/shop', 'Shop<span class="fi-shopping-cart" alt="Services">', array('alt' => 'Shortcuts'));?>
        </li>
		<li>
			<?php echo anchor('admin/products', 'Product<span class="fi-pricetag-multiple" alt="Services">', array('alt' => 'Shortcuts'));?>
        </li>
		<li>
			<?php echo anchor('admin/order', 'Order<span class="fi-megaphone" alt="Services">', array('alt' => 'Shortcuts'));?>
        </li>

		 <li>
		 	<?php echo anchor('admin/billing', 'Billing<span class="fi-page-search" alt="Overview">', array('alt' => 'Shortcuts'));?>
        </li>

        <li>
        	<?php echo anchor('admin/support', 'Support<span class="fi-torsos" alt="Services">', array('alt' => 'Shortcuts'));?>
        </li>

		<li>
			<?php echo anchor('admin/skema', 'Warna<span class="fi-eye" alt="About">', array('alt' => 'Shortcuts'));?>
        </li>

		<li>
			<?php echo anchor('admin/seo', 'SEO<span class="fi-web" alt="Overview">', array('alt' => 'Shortcuts'));?>
        </li>
    
    <li>
      <?php echo anchor('admin/settings', 'Site Setting<span class="fi-web" alt="Overview">', array('alt' => 'Settings'));?>
        </li>
    </ul>
</div>
<!-- /#sidebar-wrapper -->