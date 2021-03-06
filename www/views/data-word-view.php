<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-modal"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<h1>가등기의 효력</h1>
<div id="container">
	<div class="data-word-view">
		<p>
			가등기는 순위 보전의 효력이 있다. 가등기에 의하여 뒤에 본등기가 이루어지면 본등기의 순위는 
			가등기 순위에 따르게 된다. 즉 가등기는 장래에 할 본등기의 순위를 보전하는 효력이 있다. 따라서 
			가등기 후, 본등기 사이에 제3자가 등기를 해도 본등기 내용과 저촉되는 것은 효력이 없거나 후순위가
			 된다. 예를 들면 A로부터 B에게 소유권 이전 가등기가 있고, 그 다음에 A로부터 C에게 소유권 이전 
			본등기가 있고, 그 뒤에 A에서 B로 넘어가는 본등기가 있으면 B는 C에 우선한다. 또 A를 위한 저당권 
			설정 가등기가 있고 이어서 B를 위한 저당권 설정 본등기가 있은 다음 A를 위한 저당권 설정 본등기가 
			있으면 B의 저당권 순위는 A보다 후순위가 된다.
		</p>
	</div>
</div>
<?php require "part/app-footer.php"; ?>