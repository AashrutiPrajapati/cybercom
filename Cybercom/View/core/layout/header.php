<nav class="navbar navbar-expand-sm bg-primary navbar-dark sticky-top">
<h5 class="text-white">e-Commerce WebSite</h5>
    <ul class="navbar-nav ml-auto">
           <li class="nav-item">
            <!-- <a class="nav-link text-white font-weight-bold" onclick="object.setUrl('<?php //echo $this->getUrl('grid','dashboard',null,true); ?>').load()">Dashboard</a> -->
            <a class="nav-link text-white font-weight-bold" href="<?php echo $this->getUrl('grid','dashboard',null,true); ?>"> Dashboard</a>
            
            </li>
            <li class="nav-item ">
            <a class="nav-link text-white font-weight-bold" href="<?php echo $this->getUrl('grid','product',null,true); ?>"> Product</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="<?php echo $this->getUrl('grid','category',null,true); ?>">Category</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="<?php echo $this->getUrl('grid','customer',null,true); ?>">Customer</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="<?php echo $this->getUrl('grid','customerGroup',null,true); ?>">Customer Group</a>
            </li>
    </ul>
    <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="<?php echo $this->getUrl('grid','shipping',null,true); ?>">Shipping Method</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" onclick="object.setUrl('<?php echo $this->getUrl('grid','payment',null,true); ?>').load()">Payment Method</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="<?php echo $this->getUrl('grid','admin',null,true); ?>">Admin</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="<?php echo $this->getUrl('grid','attribute',null,true); ?>">Attribute</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="<?php echo $this->getUrl('grid','cmsPage',null,true); ?>">Cms Page</a>
            </li>
    </ul>
</nav>