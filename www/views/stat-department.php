<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<h2>부서별통계</h2>
<p class="additional">해당 부서별로 통계정보를 확인할 수 있습니다.</p>
<dl class="paging">
	<dt class="skip">현재 페이지 경로</dt>
	<dd>
		<a href="/views/index.php">홈</a>
		<a href="stat-field.php">통계마당</a>
		<span>부서별통계</span>
	</dd>
</dl>
<p class="chk">
	<input type="checkbox" checked="checked" /> 전체보기
	<input type="checkbox" /> 국토교통통계
	<input type="checkbox" /> e-나라지표
	<input type="checkbox" /> 행정자료
</p>
<ul class="nav nav-tabs" role="tablist" id="myTab">
	<li role="presentation" class="active col-md-2"><a href="#field-tab1" aria-controls="home" role="tab" data-toggle="tab">정책기획관</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab2" aria-controls="profile" role="tab" data-toggle="tab">국토정책관</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab3" aria-controls="messages" role="tab" data-toggle="tab">건축정책관</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab4" aria-controls="settings" role="tab" data-toggle="tab">주택정책관</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab5" aria-controls="home" role="tab" data-toggle="tab">토지정책관</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab6" aria-controls="profile" role="tab" data-toggle="tab" style="border-right:0px none;">국토정보정책관</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab7" aria-controls="messages" role="tab" data-toggle="tab">건설정책국</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab7" aria-controls="messages" role="tab" data-toggle="tab">기술안전정책관</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab7" aria-controls="messages" role="tab" data-toggle="tab">수자원정책국</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab7" aria-controls="messages" role="tab" data-toggle="tab">종합교통정책관</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab7" aria-controls="messages" role="tab" data-toggle="tab">물류정책관</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab7" aria-controls="messages" role="tab" data-toggle="tab" style="border-right:0px none;">항공정책관</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab7" aria-controls="messages" role="tab" data-toggle="tab">항공안전정책관</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab7" aria-controls="messages" role="tab" data-toggle="tab">공항항행정책관</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab7" aria-controls="messages" role="tab" data-toggle="tab">도로국</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab7" aria-controls="messages" role="tab" data-toggle="tab">철도국</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab7" aria-controls="messages" role="tab" data-toggle="tab">항공철도사고조사위원회</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab7" aria-controls="messages" role="tab" data-toggle="tab" style="border-right:0px none;">국토지리정보원</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab7" aria-controls="messages" role="tab" data-toggle="tab">철도안전정책관</a></li>
	<li role="presentation" class="col-md-2"><a href="#field-tab7" aria-controls="messages" role="tab" data-toggle="tab">자동차관리관</a></li>
</ul>
<p class="stat-btn">
	<a href="#" class="active">미래전략담당관</a>
	<a href="#">정보화통계담당관</a>
</p>
<div class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="field-tab1">
		<div>
			<ul class="stat-list">
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						[행정] 개발제한구역현황
						<span class="plus"></span>					
					</a>
					
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						[행정] 개발제한구역현황
						<span class="plus"></span>					
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						[행정] 개발제한구역현황
						<span class="plus"></span>					
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						[행정] 개발제한구역현황
						<span class="plus"></span>					
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						[행정] 개발제한구역현황
						<span class="plus"></span>					
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						[행정] 개발제한구역현황
						<span class="plus"></span>					
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						[행정] 개발제한구역현황
						<span class="plus"></span>					
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						[행정] 개발제한구역현황
						<span class="plus"></span>					
					</a>
					
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						[행정] 개발제한구역현황
						<span class="plus"></span>					
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						[행정] 개발제한구역현황
						<span class="plus"></span>					
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						[행정] 개발제한구역현황
						<span class="plus"></span>					
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						[행정] 개발제한구역현황
						<span class="plus"></span>					
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						[행정] 개발제한구역현황
						<span class="plus"></span>					
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						[행정] 개발제한구역현황
						<span class="plus"></span>					
					</a>
				</li>
			</ul>
		</div>	
	</div>
</div>


<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>