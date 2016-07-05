<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<h2>지역별통계</h2>
<p class="additional">지역별 통계를 지도로 보실 수 있습니다.</p>
<dl class="paging">
	<dt class="skip">현재 페이지 경로</dt>
	<dd>
		<a href="/views/index.php">홈</a>
		<a href="stat-field.php">통계마당</a>
		<span>지역별통계</span>
	</dd>
</dl>
<ul class="nav nav-tabs" role="tablist" id="myTab">
	<li role="presentation" class="active col-md-3"><a href="#field-tab1" aria-controls="home" role="tab" data-toggle="tab">국토&#47;도시</a></li>
	<li role="presentation" class="col-md-3"><a href="#field-tab2" aria-controls="profile" role="tab" data-toggle="tab">주택&#47;토지</a></li>
	<li role="presentation" class="col-md-3"><a href="#field-tab3" aria-controls="messages" role="tab" data-toggle="tab">건설&#47;수자원</a></li>
	<li role="presentation" class="col-md-3"><a href="#field-tab4" style="border-right:0px;" aria-controls="settings" role="tab" data-toggle="tab">교통&#47;물류</a></li>
</ul>
<div class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="field-tab1">
		<div class="le-list">
			<ul class="stat-list">
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						건축물착공현황
						<span class="plus"></span>
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						건축물허가현황
						<span class="plus"></span>
					</a>
					
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						용도별건축물현황(공업용)
						<span class="plus"></span>
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						용도별건축물현황(기타)
						<span class="plus"></span>
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						용도별건축물현황(문교사회용)
						<span class="plus"></span>
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						용도별건축물현황(상업용)
						<span class="plus"></span>
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						용도별건축물현황(주거용)
						<span class="plus"></span>
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						용도별건축물현황(총계)
						<span class="plus"></span>
					</a>
				</li>
				<li>
					<a href="#" onclick="window.open('graph-view.php', 'window')">
						측량업 등록현황
						<span class="plus"></span>
					</a>
				</li>
			</ul>
		</div>
		<div class="map">
			<h3>건축물착공현황</h3>
			<div class="search">
				<select class="search-select">
					<option value="">2016년 5월</option>
				</select>
				<input type="button" value="검색" class="search-btn" />
			</div>
		</div>	
	</div>
</div>

<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>