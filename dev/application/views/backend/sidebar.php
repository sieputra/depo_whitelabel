<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav" id="nav">
        <li class="sidebar-brand show-for-large-only">
           <?php echo anchor('admin/', '<img src="'.base_url().'assets/backend/images/logo-deposepatu.png" alt="deposepatu">', array('alt' => 'Depo Sepatu Dashboard'));?> 
			     <div class="sisipan">RESELLER DASHBOARD</div>
        </li>
        <li>
        	<?php echo anchor('admin/dashboard', 'Dashboard<span class="fi-graph-trend" alt="Dashboard">', array('alt' => 'Dashboard'));?>
        </li>
        <li>
          <?php echo anchor('admin/user/settings', 'Admin Setting<span class="fi-web" alt="Overview">', array('alt' => 'Settings'));?>
        </li>
        <?php if(($page_data['cat_count'] != 0) && ($page_data['attr_count'] != 0) && ($page_data['tag_count'] != 0)) {?>
        <li>
          <?php echo anchor('admin/products', 'Product<span class="fi-pricetag-multiple" alt="Services">', array('alt' => 'Shortcuts'));?>
        </li>
        <?php if($page_data['prd_count'] != 0){ ?>
        <li>
        	<?php echo anchor('admin/general', 'General Setting<span class="fi-graph-bar" alt="Shortcuts">', array('alt' => 'Shortcuts'));?>
        </li>
        <li>
        	<?php echo anchor('admin/page', 'Page<span class="fi-page-filled" alt="Shortcuts">', array('alt' => 'Shortcuts'));?>
        </li>
        <li>
          <?php echo anchor('admin/shop', 'Shop<span class="fi-shopping-cart" alt="Services">', array('alt' => 'Shortcuts'));?>
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
        <?php } 
        } ?>
        
    </ul>
</div>
<!-- /#sidebar-wrapper -->