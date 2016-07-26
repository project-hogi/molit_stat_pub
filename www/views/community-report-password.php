<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-modal"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<h1>비밀번호</h1>
<div id="container">
	<div class="community-report-password">
		<dl>
			<dt>비밀번호</dt>
			<dd>
				<input type="password" class="form-control" placeholder="비밀번호" />
			</dd>
		</dl>
		<p>
			<a href="#" class="btn">확인</a>
			<a href="#" class="btn">취소</a>
		</p>
	</div>
</div>
<?php require "part/app-footer.php"; ?>