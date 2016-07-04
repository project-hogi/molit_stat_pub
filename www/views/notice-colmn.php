<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<h2>보도자료</h2>
<p class="additional">국민들에게 알리기 위하여 언론에 제공하는 자료를 확인하실 수 있습니다.</p>
<dl class="paging">
	<dt class="skip">현재 페이지 경로</dt>
	<dd>
		<a href="#">홈</a>
		<a href="notice-use.php">알림마당</a>
		<span>보도자료</span>
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
				등록일
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				1
			</td>
			<td>
				<a href="notice-colmn-view.php">'16.5월 주택매매거래량은 전국 8.9만 건으로 전년동월 대비 18.8% 감소</a>
			</td>
			<td>
				2016-07-01
			</td>
		</tr>
		<tr>
			<td>
				2
			</td>
			<td>
				<a href="notice-colmn-view.php">'16.5월 주택매매거래량은 전국 8.9만 건으로 전년동월 대비 18.8% 감소</a>
			</td>
			<td>
				2016-07-01
			</td>
		</tr>
		<tr>
			<td>
				3
			</td>
			<td>
				<a href="notice-colmn-view.php">'16.5월 주택매매거래량은 전국 8.9만 건으로 전년동월 대비 18.8% 감소</a>
			</td>
			<td>
				2016-07-01
			</td>
		</tr>
		<tr>
			<td>
				4
			</td>
			<td>
				<a href="notice-colmn-view.php">'16.5월 주택매매거래량은 전국 8.9만 건으로 전년동월 대비 18.8% 감소</a>
			</td>
			<td>
				2016-07-01
			</td>
		</tr>
		<tr>
			<td>
				5
			</td>
			<td>
				<a href="notice-colmn-view.php">'16.5월 주택매매거래량은 전국 8.9만 건으로 전년동월 대비 18.8% 감소</a>
			</td>
			<td>
				2016-07-01
			</td>
		</tr>
		<tr>
			<td>
				6
			</td>
			<td>
				<a href="notice-colmn-view.php">'16.5월 주택매매거래량은 전국 8.9만 건으로 전년동월 대비 18.8% 감소</a>
			</td>
			<td>
				2016-07-01
			</td>
		</tr>
		<tr>
			<td>
				7
			</td>
			<td>
				<a href="notice-colmn-view.php">'16.5월 주택매매거래량은 전국 8.9만 건으로 전년동월 대비 18.8% 감소</a>
			</td>
			<td>
				2016-07-01
			</td>
		</tr>
		<tr>
			<td>
				8
			</td>
			<td>
				<a href="notice-colmn-view.php">'16.5월 주택매매거래량은 전국 8.9만 건으로 전년동월 대비 18.8% 감소</a>
			</td>
			<td>
				2016-07-01
			</td>
		</tr>
		<tr>
			<td>
				9
			</td>
			<td>
				<a href="notice-colmn-view.php">'16.5월 주택매매거래량은 전국 8.9만 건으로 전년동월 대비 18.8% 감소</a>
			</td>
			<td>
				2016-07-01
			</td>
		</tr>
		<tr>
			<td>
				10
			</td>
			<td>
				<a href="notice-colmn-view.php">'16.5월 주택매매거래량은 전국 8.9만 건으로 전년동월 대비 18.8% 감소</a>
			</td>
			<td>
				2016-07-01
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