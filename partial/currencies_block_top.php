<form id="setCurrency" action="#" method="post" class="dd_el">
	<div id="currencyHolder">
		<span class="dib smooth02">
			<span>Dollar</span>
			<i class="fa fa-chevron-down" aria-hidden="true"></i>
		</span>
		<ul class="arrow">
			<li class="smooth02 main_bg_hvr"> 
				<span class="currency-sign main_bg">
					<span class="main_color">€</span>
				</span>
				Euro
			</li>
			<li class="dropdown-option smooth02 main_bg_hvr" data-value="3" onclick="setCurrency($(this).data('value'));"> <span class="currency-sign main_bg"><span class="main_color">₤</span></span>Pound</li>
		</ul>
	</div>
</form>