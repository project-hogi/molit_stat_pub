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
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=44" target="_blank">우리나라 지가 어디까지 알고있니?<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 조재현
					</dd>
					<dd class="badge"><span class="top">최우수상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img1.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=46" target="_blank">공항은 언제 가장 한가할까요?<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 박아름
					</dd>
					<dd class="badge"><span class="excellent">우수상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img2.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=47" target="_blank">주택도시기금 디딤돌 대출은 내 집마련을 꿈꾸는 청년들과 함께합니다.<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 이경은
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img3.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=48" target="_blank">10년 동안 우리동네 아파트가격 어떻게 변했나?<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 오요셉
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img4.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=45" target="_blank">우리나라에서 한해에 거래되는 아파는 얼마나 될까?<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 김근석
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img5.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=49" target="_blank">월세시대 개막, 적정 시세는 얼마?<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 김정은
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img7.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=50" target="_blank">내 집 마련에 앞서 시장분석을 하고, 주택통계부터 이해하자!<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 김진만
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img8.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=51" target="_blank">숫자로 본 재미있는 대한민국 '지명' 이야기<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 강기희
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img9.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=52" target="_blank">자동차검사 목요일 이용하세요.<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 이치호
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img10.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=53" target="_blank">혁신도시 건설은 국가경쟁력과 행복한 삶의 터전을 만듭니다.<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 유혜은
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img11.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=54" target="_blank">통계로 알아보는 인천공항<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 이성민
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img12.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=55" target="_blank">국민씨는 왜 데이트에 늦었을까?<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 신수안
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img13.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
		</ul>
	</div>
	<div role="tabpanel" class="tab-pane" id="field-tab2">
		<ul class="publicize-list">
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=36" target="_blank">2015 항공시장 동향분석<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 이혜민
					</dd>
					<dd class="badge"><span class="top">최우수상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img1-1.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=38" target="_blank">2015년 대한민국 항공실적 여객<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 진형민
					</dd>
					<dd class="badge"><span class="excellent">우수상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img1-2.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=40" target="_blank">2015년 대한민국 주택시장<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 송가윤
					</dd>
					<dd class="badge"><span class="excellent">우수상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img1-3.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=37" target="_blank">2016년 해외건설 현황과 전망<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 이효정
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img1-4.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=39" target="_blank">당신은 행복하십니까?<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 이유림
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img1-5.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=41" target="_blank">2015년 항공여객량<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 최지선
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img1-6.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
		</ul>
	</div>
	<div role="tabpanel" class="tab-pane" id="field-tab3">
		<ul class="publicize-list">
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=56" target="_blank">늦은 출근, 늦은 퇴근. 정체된 도로 때문에?<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 강승우
					</dd>
					<dd class="badge"><span class="top">최우수상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img2-1.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=57" target="_blank">요즘 미세먼지 때문에 마음껏 숨쉬지도 못하지? 휴~<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 조영인
					</dd>
					<dd class="badge"><span class="excellent">우수상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img2-2.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=58" target="_blank">다가오는 휴가철 교통체증 타파하기<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 강유림
					</dd>
					<dd class="badge"><span class="excellent">우수상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img2-3.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=59" target="_blank">나에게 딱! 맞는 주거지원서비스, '마이홈'을 소개합니다!<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 이유림
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img2-4.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=60" target="_blank">'스쿨존'이라고 써져 있는 도로에서만큼은 어린이에 대한 관심과 사랑이 우선되어야 합니다.<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 최지선
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img2-5.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a href="https://stat.molit.go.kr/portal/notice/noticeView.do?hNum=43" target="_blank">해수면이 상승해도 우리땅은 넓어지고 있다구요?<span>더보기</span></a></dt>
					<dd class="name">
						만든이 : 박지원
					</dd>
					<dd class="badge"><span>장려상</span></dd>
					<dd class="img" style="background:url('<?php echo $config["imageFolder"]; ?>/sub/publicize-img2-6.png') no-repeat 0 0;"></dd>
				</dl>
			</li>
		</ul>
	</div>
	<div role="tabpanel" class="tab-pane" id="field-tab4">
		<p class="preparing">
			준비중입니다.
		</p>
	</div>
	<div role="tabpanel" class="tab-pane" id="field-tab5">
		<p class="preparing">
			준비중입니다.
		</p>
	</div>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>