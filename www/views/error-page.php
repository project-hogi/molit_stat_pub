<?php $pagePath = __FILE__; ?>
<?php $bodyClass = ""; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>

<div class="wrap">
	<h1><a href="/">국토교통 통계누리</a></h1>
	<p class="error-txt">
		<strong>죄송합니다. <em>요청하신 페이지를 찾을 수 없습니다.</em></strong>
		<span class="txt">요청하신 페이지를 찾을 수 없습니다. 찾으시려는 페이지는 주소를 잘못 입력하였거나,<br>
		페이지 주소의 변경 또는 삭제 등의 이유로 페이지를 찾을 수 없습니다. 입력하신 페이지의 주소와 경로가 정확한지 한번 더 확인 후 이용하시기 바랍니다.</span>
		<a href="#">이전페이지<span class="glyphicon glyphicon-chevron-right"></span></a>
	</p>
	<p class="copy">Copyright &copy; 2016 Ministry of Land, Infrastructure and Transport. All Rights Reserved.</p>
</div>

<?php require "part/app-footer.php"; ?>