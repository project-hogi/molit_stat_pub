<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<h2>뷰어다운로드</h2>
<p class="additional">서비스를 원활하게 이용하기 위해서 필요한 뷰어프로그램을 제공합니다.</p>
<dl class="paging">
	<dt class="skip">현재 페이지 경로</dt>
	<dd>
		<a href="#">홈</a>
		<a href="notice-use.php">알림마당</a>
		<span>뷰어다운로드</span>
	</dd>
</dl>
<p class="txt1">
	<span>문서파일의 내용 보기만 지원하는 프로그램으로 문서의 내용을 수정하거나 삭제하는 편집은 할 수 없습니다.</span><br>
	사용하고 계시는 컴퓨터에 해당 뷰어 프로그램이 설치되어 있지 않은 경우에 이를 다운로드 받아 각 개인 컴퓨터에<br>
	설치하셔야 내용을 보실 수 있습니다.
</p>
<ul class="viewer-list row">
	<li class="col-md-4">
		<a href="#">
			<dl>
				<dt>워드 뷰어<span>MS Word viewer</span></dt>
				<dd>
					다운로드 바로가기
				</dd>
			</dl>
		</a>
	</li>
	<li class="col-md-4">
		<a href="#">
			<dl>
				<dt>엑셀 뷰어<span>MS Excel viewer</span></dt>
				<dd>
					다운로드 바로가기
				</dd>
			</dl>
		</a>
	</li>
	<li class="col-md-4">
		<a href="#">
			<dl>
				<dt>파워포인트 뷰어<span>PowerPoint viewer</span></dt>
				<dd>
					다운로드 바로가기
				</dd>
			</dl>
		</a>
	</li>
	<li class="col-md-4">
		<a href="#">
			<dl>
				<dt>PDF 뷰어<span>Acrobat Reader</span></dt>
				<dd>
					다운로드 바로가기
				</dd>
			</dl>
		</a>
	</li>
	<li class="col-md-4">
		<a href="#">
			<dl>
				<dt>한글 뷰어<span>한글 viewer</span></dt>
				<dd>
					다운로드 바로가기
				</dd>
			</dl>
		</a>
	</li>
	<li class="col-md-4">
		<a href="#">
			<dl>
				<dt>통계표 뷰어<span>통계표 viewer</span></dt>
				<dd>
					다운로드 바로가기
				</dd>
			</dl>
		</a>
	</li>
</ul>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>