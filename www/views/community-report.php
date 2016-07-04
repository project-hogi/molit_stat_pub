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
<p class="write-btn">
	<a href="community-report-write.php">글쓰기</a>
</p>
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
				등록일
			</th>
			<th>
				처리상태
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				30
			</td>
			<td>
				<a href="community-report-view.php">국토면적 관련한 통계 불일치 신고</a>
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				<span class="success-btn">처리완료</span>
			</td>
		</tr>
		<tr>
			<td>
				29
			</td>
			<td>
				<a href="community-report-view.php">국토면적 관련한 통계 불일치 신고</a>
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				<span class="success-btn">처리완료</span>
			</td>
		</tr>
		<tr>
			<td>
				28
			</td>
			<td>
				<a href="community-report-view.php">국토면적 관련한 통계 불일치 신고</a>
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				<span class="success-btn">처리완료</span>
			</td>
		</tr>
		<tr>
			<td>
				27
			</td>
			<td>
				<a href="community-report-view.php">국토면적 관련한 통계 불일치 신고</a>
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				<span class="receive-btn">접수완료</span>
			</td>
		</tr>
		<tr>
			<td>
				26
			</td>
			<td>
				<a href="community-report-view.php">국토면적 관련한 통계 불일치 신고</a>
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				<span class="receive-btn">접수완료</span>
			</td>
		</tr>
		<tr>
			<td>
				25
			</td>
			<td>
				<a href="community-report-view.php">국토면적 관련한 통계 불일치 신고</a>
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				<span class="receive-btn">접수완료</span>
			</td>
		</tr>
		<tr>
			<td>
				24
			</td>
			<td>
				<a href="community-report-view.php">국토면적 관련한 통계 불일치 신고</a>
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				<span class="receive-btn">접수완료</span>
			</td>
		</tr>
		<tr>
			<td>
				23
			</td>
			<td>
				<a href="community-report-view.php">국토면적 관련한 통계 불일치 신고</a>
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				<span class="receive-btn">접수완료</span>
			</td>
		</tr>
		<tr>
			<td>
				22
			</td>
			<td>
				<a href="community-report-view.php">국토면적 관련한 통계 불일치 신고</a>
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				<span class="receive-btn">접수완료</span>
			</td>
		</tr>
		<tr>
			<td>
				21
			</td>
			<td>
				<a href="community-report-view.php">국토면적 관련한 통계 불일치 신고</a>
			</td>
			<td>
				2016-07-01
			</td>
			<td>
				<span class="receive-btn">접수완료</span>
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