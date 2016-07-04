<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<h2>자주묻는질문</h2>
<p class="additional">자주하는 질문과 답변을 보실 수 있습니다.</p>
<dl class="paging">
	<dt class="skip">현재 페이지 경로</dt>
	<dd>
		<a href="#">홈</a>
		<a href="notice-use.php">알림마당</a>
		<span>자주묻는질문</span>
	</dd>
</dl>
<ul class="qna">
	<li>
		<dl>
			<dt>
				<span>Q</span>
				메뉴 찾기가 너무 힘들어요.
			</dt>
			<dd>
				<span>A</span>
				통계표뷰어 수동설치 방법입니다.<br>
				통계표뷰어 수동설치 방법입니다.<br>
				통계표뷰어 수동설치 방법입니다.<br>
				통계표뷰어 수동설치 방법입니다.
			</dd>
		</dl>
	</li>
	<li>
		<dl>
			<dt>
				<span>Q</span>
				통계표를 보기위한 AcitveX 설치가 자동으로 되지 않을 때 조치방법은?
			</dt>
			<dd>
				<span>A</span>
				통계표뷰어 수동설치 방법입니다.<br>
				통계표뷰어 수동설치 방법입니다.<br>
				통계표뷰어 수동설치 방법입니다.<br>
				통계표뷰어 수동설치 방법입니다.
			</dd>
		</dl>
	</li>
	<li>
		<dl>
			<dt>
				<span>Q</span>
				다운로드 한 파일을 볼 수 없을 때
			</dt>
			<dd>
				<span>A</span>
				통계표뷰어 수동설치 방법입니다.<br>
				통계표뷰어 수동설치 방법입니다.<br>
				통계표뷰어 수동설치 방법입니다.<br>
				통계표뷰어 수동설치 방법입니다.
			</dd>
		</dl>
	</li>
</ul>
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