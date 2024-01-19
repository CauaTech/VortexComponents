<div class="vortex-navbar">
	<nav class="navbar navbar-expand-sm navbar-dark">
	  <div class="container">

	    <a class="navbar-brand" href="<?php echo $flow ?>"><img width="40px" src="<?php echo $flow ?>assents/img/logo/64x64Orange.png"></a>

	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse justify-content-end" id="nav">
	    	<ul class="navbar-nav">
		    	<a href="<?php echo $flow ?>" class="item_nav">Get Starter</a>
		    	<div class="dropdown">
			    	<button class="item_nav btn btn-vortex dropdown-toggle" data-bs-toggle="dropdown">
			    		<i class="fa-regular fa-user"></i>
			    		Painel
			    	</button>
			    	<ul class="dropdown-menu dropdown-vortex">
			    		<li><a class="dropdown-item" href="<?php echo $flow ?>subnavbar/">Off-Navbar</a></li>
			    		<li><a class="dropdown-item" href="<?php echo $flow ?>Sidebars/">Sidebar</a></li>
					    <li><a class="dropdown-item" href="#">Cards</a></li>
					    <li><a class="dropdown-item" href="#">Footers</a></li>
					    <li><a class="dropdown-item" href="#">Logins</a></li>
					    <li><a class="dropdown-item" href="#">Header</a></li>
					    <li><a class="dropdown-item" href="#">Animation</a></li>
					</ul>
		    	</div>
	    	</ul>
	    </div>
	  </div>
	</nav>
</div>

<style type="text/css">
	.vortex-navbar{
		background-color: black;
	}
	.item_nav{
		display: block;
  		padding: 0.5rem 1rem;
		text-decoration: none;
		color: #fff;
		font-size: 13px;
	}
	.item_nav:hover{
		transition: 300ms;
		text-decoration: none;
		color: #c2c2c2;
	}
	.btn-vortex{
		background-color: #ff8c00;
	}
</style>