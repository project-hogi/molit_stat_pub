<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<h2>통계 불일치 신고센터</h2>
<p class="additional">국토교통통계누리의 통계 오류정보에 대해 알려주세요!</p>
<dl class="paging">
	<dt class="skip">현재 페이지 경로</dt>
	<dd>
		<a href="/views/index.php">홈</a>
		<a href="community-report.php">참여마당</a>
		<span>통계 불일치 신고센터</span>
	</dd>
</dl>
<div class="board-view">
	<h3>국토면적 관련한 통계 불일치 신고</h3>
	<ul class="info">
		<li>
			<strong>유형</strong> 데이터 오류
			<span>통계명</span> 행정구역현황
			<span>통계표명</span> 행정구역현황(전국)
		</li>
	</ul>
	<div class="board-con">
		<p>국토의 전체면적 관련입니다.</p>
		<p>2015년 통계연보에 보면,</p>
		<p>&nbsp;</p>
		<p>5페이지 전국 행정구역상 면적은 100,326 제곱킬로미터로 기록,</p>
		<p>296, 302페이지 행정구역 및 소유구분별 국토이용 현황에서는 100,284 제곱킬로미터로 기록,</p>
		<p>310 페이지 토지 소유구분별 현황에서는 100,188 제곱킬로미터로 기록되어 있습니다.</p>
		<p>&nbsp;</p>
		<p>이와 관련하여</p>
		<p>1. 목적별 국토면적이 다른 이유.</p>
		<p>2. 국토면적은 얼마이며, 왜 그 값을 써야하는지, 다른 값은 틀린 값인지</p>
		<p>두가지가 궁금하며, 앞으로 더욱 정밀한 조사를 통하여 통일된 값으로 사용했으면 좋겠습니다.</p>
	</div>
	<div class="result">
		<h4>
			처리결과
			<strong class="state">
				처리상태
				<span class="success-btn">처리완료</span>
				<!-- <span class="receive-btn">접수완료</span> -->
			</strong>
		</h4>
		<div class="result-con">
			<p>안녕하십니까?</p>
			<p>먼저 국토교통통계누리를 방문해주시고 이용에 불편을드려죄송합니다.</p>
			<p>&nbsp;</p>
			<p>1. 문의하신 면적은 행정자치부의 「2015년 지방자치단체 행정구역및 인구현황」의 내용을 그대로 등재하였습니다.</p>
			<p>현재 지적통계와 총계안맞은 원인(미복구 면적, 소숫점, 행정구역 누락등)을 확인중에 있습니다.</p>
			<p>확인되는대로 메일로 발송해 드리겠습니다.</p>
			<p>2016년 통계연보는 이런일이 없도록 철저하게 조사해서 반영하겠습니다.</p>
		</div>
	</div>
	<p class="btm-btn">
		<a href="community-report.php" class="btn btn-default"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>리스트</a>
		<a href="community-report-password.php" class="btn btn-warning trigger-modal-box" data-modal-box-width="600">삭제</a>
	</p>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>