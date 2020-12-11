 <!-- Sidebar -->
 <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/dashboard">
            <i class="fa fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/retail-dashboard">
            <i class="fa fa-fw fa-line-chart"></i>
            <span>Retail Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sales-reports">
            <i class="fa fa-fw fa-bar-chart"></i>
            <span>Sales Reports</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/inventory-reports">
            <i class="fa fa-fw fa-tags"></i>
            <span>Inventory Reports</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/payment-reports">
            <i class="fa fa-fw fa-money"></i>
            <span>Payment Reports</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sales">
            <i class="fa fa-fw fa-table"></i>
            <span>Check Sales</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" data-toggle="modal" data-target="#addSaleModal">
            <i class="fa fa-fw fa-plus"></i>
            <span>Record New Sale</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/product-brands">
            <i class="fa fa-fw fa-industry"></i>
            <span>Product Brands</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/product-vendors">
            <i class="fa fa-fw fa-users"></i>
            <span>Product Vendors</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-folder"></i>
            <span>
              Manage Products
              <i class="float-right fa fa-angle-down"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Inventory</h6>
            <a class="dropdown-item" href="products"> <i class="fa fa-tags"></i> All Products</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Product Types</h6>
            <a class="dropdown-item addProductTypeModalbtn" href="#" data-toggle="modal" data-target="#addProductTypeModal"> <i class="fa fa-plus"></i> Add New Type</a>
            <a class="dropdown-item" href="/product-types"> <i class="fa fa-tags"></i> Product Types</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Dealers &amp; Brands</h6>
            <a class="dropdown-item addProductVendorModal" href="#" data-toggle="modal" data-target="#addProductVendorModal"> <i class="fa fa-user"></i> Add New Vendor</a>
            <a class="dropdown-item addProductBrandModalBtn" href="#" data-toggle="modal" data-target="#addProductBrandModal"> <i class="fa fa-industry"></i> Add New Brand</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/history">
            <i class="fa fa-fw fa-calendar"></i>
            <span>History</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="export-record">
            <i class="fa fa-fw fa-external-link"></i>
            <span>Export Record</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/user/profile">
            <i class="fa fa-fw fa-cogs"></i>
            <span>General Settings</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="help.html">
            <i class="fa fa-fw fa-life-ring"></i>
            <span>Help</span></a>
        </li>
      </ul>
