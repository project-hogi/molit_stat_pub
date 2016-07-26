<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<h2>홍보자료</h2>
<p class="additional">국토교통통계누리 통계홍보자료를 소개합니다.</p>
<dl class="paging">
	<dt class="skip">현재 페이지 경로</dt>
	<dd>
		<a href="/views/index.php">홈</a>
		<a href="community-report.php">참여마당</a>
		<span>홍보자료</span>
	</dd>
</dl>
<ul class="nav nav-tabs" role="tablist" id="myTab">
	<li role="presentation" class="active"><a href="#field-tab1" aria-controls="home" role="tab" data-toggle="tab">재미있는 통계</a></li>
	<li role="presentation"><a href="#field-tab2" aria-controls="profile" role="tab" data-toggle="tab">통계알리미 1분기</a></li>
	<li role="presentation"><a href="#field-tab3" aria-controls="messages" role="tab" data-toggle="tab">통계알리미 2분기</a></li>
	<li role="presentation"><a href="#field-tab4" aria-controls="messages" role="tab" data-toggle="tab">통계알리미 3분기</a></li>
	<li role="presentation"><a href="#field-tab5" style="border-right:0px;" aria-controls="settings" role="tab" data-toggle="tab">통계알리미 4분기</a></li>
</ul>
<div class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="field-tab1">
		<ul class="publicize-list">
			<li>
				<dl>
					<dt><a href="#">우리나라 지가 어디까지 알고있니?<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 조재현
					</dd>
					<dd class="badge"><span class="top">최우수상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/temp_data/publicize-img1.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="#">우리나라 지가 어디까지 알고있니?<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 조재현
					</dd>
					<dd class="badge"><span class="excellent">우수상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/temp_data/publicize-img2.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="#">우리나라 지가 어디까지 알고있니?<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 조재현
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/temp_data/publicize-img3.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="#">우리나라 지가 어디까지 알고있니?<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 조재현
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/temp_data/publicize-img4.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="#">우리나라 지가 어디까지 알고있니?<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 조재현
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/temp_data/publicize-img5.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="#">우리나라 지가 어디까지 알고있니?<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 조재현
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/temp_data/publicize-img6.png') no-repeat 0 0;"></dd>
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
	</div>
	<div role="tabpanel" class="tab-pane" id="field-tab2">
		2222222222
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
	</div>
	<div role="tabpanel" class="tab-pane" id="field-tab3">
		33333333333
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
	</div>
	<div role="tabpanel" class="tab-pane" id="field-tab4">
		444444444444
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
	</div>
	<div role="tabpanel" class="tab-pane" id="field-tab5">
		555555555555555
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
	</div>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>