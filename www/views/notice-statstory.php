<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<h2>통계이야기</h2>
<p class="additional">국토교통통계누리의 새소식을 신속하게 접하실 수 있습니다.</p>
<dl class="paging">
	<dt class="skip">현재 페이지 경로</dt>
	<dd>
		<a href="#">홈</a>
		<a href="notice-use.php">알림마당</a>
		<span>통계이야기</span>
	</dd>
</dl>
<table class="board-primary">
	<thead>
		<tr>
			<th>
				번호
			</th>
			<th>
				제목
			</th>
			<th>
				담당부서
			</th>
			<th>
				등록일
			</th>
			<th>
				조회
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				1
			</td>
			<td>
				<a href="notice-statstory-view.php">국토교통통계알리미 15년 항공여객통계</a>
			</td>
			<td>
				정보화통계담당관
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				217
			</td>
		</tr>
		<tr>
			<td>
				2
			</td>
			<td>
				<a href="notice-statstory-view.php">국토교통통계알리미 15년 항공여객통계</a>
			</td>
			<td>
				정보화통계담당관
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				217
			</td>
		</tr>
		<tr>
			<td>
				3
			</td>
			<td>
				<a href="notice-statstory-view.php">국토교통통계알리미 15년 항공여객통계</a>
			</td>
			<td>
				정보화통계담당관
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				217
			</td>
		</tr>
		<tr>
			<td>
				4
			</td>
			<td>
				<a href="notice-statstory-view.php">국토교통통계알리미 15년 항공여객통계</a>
			</td>
			<td>
				정보화통계담당관
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				217
			</td>
		</tr>
		<tr>
			<td>
				5
			</td>
			<td>
				<a href="notice-statstory-view.php">국토교통통계알리미 15년 항공여객통계</a>
			</td>
			<td>
				정보화통계담당관
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				217
			</td>
		</tr>
		<tr>
			<td>
				6
			</td>
			<td>
				<a href="notice-statstory-view.php">국토교통통계알리미 15년 항공여객통계</a>
			</td>
			<td>
				정보화통계담당관
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				217
			</td>
		</tr>
		<tr>
			<td>
				7
			</td>
			<td>
				<a href="notice-statstory-view.php">국토교통통계알리미 15년 항공여객통계</a>
			</td>
			<td>
				정보화통계담당관
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				217
			</td>
		</tr>
		<tr>
			<td>
				8
			</td>
			<td>
				<a href="notice-statstory-view.php">국토교통통계알리미 15년 항공여객통계</a>
			</td>
			<td>
				정보화통계담당관
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				217
			</td>
		</tr>
		<tr>
			<td>
				9
			</td>
			<td>
				<a href="notice-statstory-view.php">국토교통통계알리미 15년 항공여객통계</a>
			</td>
			<td>
				정보화통계담당관
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				217
			</td>
		</tr>
		<tr>
			<td>
				10
			</td>
			<td>
				<a href="notice-statstory-view.php">국토교통통계알리미 15년 항공여객통계</a>
			</td>
			<td>
				정보화통계담당관
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				217
			</td>
		</tr>
	</tbody>
</table>
<div class="page-nav-box">
	<ul class="pagination">
		<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#" aria-label="Previous" class="prev"><span aria-hidden="true">이전 페이지</span></a></li>
		<li><a href="#" aria-label="Next" class="next"><span aria-hidden="true">다음 페이지</span></a></li>
	</ul>
	<div class="search">
		<select class="search-select">
			<option value="">제목+내용</option>
			<option value="">제목</option>
			<option value="">내용</option>
		</select>
		<input type="text" class="input-text-primary" />
		<input type="button" value="검색" class="search-btn" />
	</div>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>