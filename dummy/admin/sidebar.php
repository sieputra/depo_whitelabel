    <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav" id="nav">
                <li class="sidebar-brand show-for-large-only">
                    <a href="#" >
                        <img src="images/logo-deposepatu.png" alt="deposepatu">
                    </a>
					<div class="sisipan">RESELLER DASHBOARD</div>
                </li>
                <li>
                    <a href="page-dashboard.php" alt="Dashboard">Dashboard<span class="fi-graph-trend" alt="Dashboard"></span></a>
                </li>
                <li>
                    <a href="page-general.php" alt="Shortcuts">General<span class="fi-graph-bar" alt="Shortcuts"></a>
                </li>

                <li>
                    <a href="page-page.php" alt="Shortcuts">Page<span class="fi-page-filled" alt="Shortcuts"></a>
                </li>

				<li>
                    <a href="page-shop.php">Shop<span class="fi-shopping-cart" alt="Services"></a>
                </li>

				<li>
                    <a href="page-products.php">Product<span class="fi-pricetag-multiple" alt="Services"></a>
                </li>

				<li>
                    <a href="page-order.php">Order<span class="fi-megaphone" alt="Services"></a>
                </li>

				 <li>
                    <a href="page-billing.php">Billing<span class="fi-page-search" alt="Overview"></a>
                </li>

                <li>
                    <a href="page-support.php">Support<span class="fi-torsos" alt="Services"></a>
                </li>

				<li>
                    <a href="page-skema.php">Warna<span class="fi-eye" alt="About"></a>
                </li>

				<li>
                    <a href="page-seo.php">SEO<span class="fi-web" alt="Overview"></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

<script>
function setActive() {
  aObj = document.getElementById('nav').getElementsByTagName('a');
  for(i=0;i<aObj.length;i++) {
    if(document.location.href.indexOf(aObj[i].href)>=0) {
      aObj[i].className='active';
    }
  }
}
window.onload = setActive;
</script>
