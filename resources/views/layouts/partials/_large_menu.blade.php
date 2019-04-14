<?php $path = \Request::route()->getName(); ?>
<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		<a href="/home" class="nav-link {{ ( $path == 'home' ? 'active' : '') }}">Home</a>
	    <a href="/unit" class="nav-link {{ ( $path == 'unit' ? 'active' : '') }}">Units</a>
	    <a  href="/suppliers" class="nav-link {{ (Request::is('/suppliers') ? 'active' : '') }}">Suppliers</a>
	    <a href="/receiving" class="nav-link {{ (Request::is('/receiving') ? 'active' : '') }}">Receiving Stocks</a>
	    <a href="/pos" class="nav-link {{ (Request::is('/pos') ? 'active' : '') }}">POS</a>
	</ul>
</div>