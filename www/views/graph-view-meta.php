<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "sub-style"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<div class="sub-style">
	<div class="header">
		<h1 class="site-logo"><a href="/">국토교통 통계누리</a></h1>
		<ul class="local-menu">
			<li>
				<a href="/">Home</a>
			</li>
			<li>
				<a href="/">로그인</a>
			</li>
			<li>
				<a href="/">회원가입</a>
			</li>
			<li>
				<a href="/">MY스크랩</a>
			</li>
			<li>
				<a href="/">이용안내</a>
			</li>
		</ul>
		<div class="search-box">
			<input type="hidden" name="searchOption" class="search-option" />
			<p class="select-click" data-value="">
				통합검색
			</p>
			<input type="text" />
			<input type="button" value="검색" />
			<div class="select-click-over">
				<ul>
					<li>
						<a href="#" data-value="">통합검색</a>
					</li>
					<li>
						<a href="#" data-value="1">통합검색-1</a>
					</li>
					<li>
						<a href="#" data-value="2">통합검색-2</a>
					</li>
					<li>
						<a href="#" data-value="3">통합검색-3 통합검색-3</a>
					</li>
					<li>
						<a href="#" data-value="4">통합검색-4</a>
					</li>
					<li>
						<a href="#" data-value="5">통합검색-5</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="graph-wrap">
		<div class="graph-menu">
			<h2>건축물통계(Statistics on Buildings)</h2>
			<ul class="local-menu">
				<li>
					<a href="#" class="rotation">회전</a>
				</li>
				<li>
					<a href="#" class="print">인쇄</a>
				</li>
				<li>
					<a href="#" class="graph">그래프</a>
				</li>
				<li>
					<a href="#" class="x">x</a>
				</li>
			</ul>
			<p class="menu">
				<a></a>
			</p>
			
		</div>
		<div class="graph-view">
			<ul class="top-tab">
				<li>
					<a href="graph-view.php">통계표보기</a>
				</li>
				<li class="active">
					<a href="graph-view-meta.php">메타정보</a>
				</li>
				<li>
					<a href="graph-view-file.php">관련파일</a>
				</li>
			</ul>
			<table class="type">
				<tr>
					<th>
						검색분야
					</th>
					<td>
						도시&#47;건축물통계
					</td>
				</tr>
				<tr>
					<th>
						담당부서
					</th>
					<td>
						녹색건축과 (건축행정시스템 세움터, ☏ 02-3480-0200)
					</td>
				</tr>
			</table>
			<h3>통계개요</h3>
			<table class="type">
				<tr>
					<th>작성(조사)주기</th>
					<td>매년</td>
					<th>작성(조사)기간</th>
					<td>작성기준년도 익년 5월 ~ 6월 30일</td>
				</tr>
				<tr>
					<th>작성기관</th>
					<td>건축정책관 녹색건축과</td>
					<th>전화번호</th>
					<td>02-3480-0200</td>
				</tr>
				<tr>
					<th>공표주기</th>
					<td>매년</td>
					<th>공표시점</th>
					<td>작성기준년도 익년 6월</td>
				</tr>
				<tr>
					<th>통계종류</th>
					<td>일반, 보고통계</td>
					<th>작성(조사)체제</th>
					<td>시·군·구 → 시·도 → 국토교통부</td>
				</tr>
				<tr>
					<th>작성(조사)대상</th>
					<td colspan="3">건축법령에 의거 합법적으로 건축된 전국의 건축물</td>
				</tr>
				<tr>
					<th>작성(조사)근거</th>
					<td colspan="3">승인번호 제11611호(승인일자 1985-02-15)<br>
					○ 통계법 제18조 규정에 의한 승인통계지정, 통계법 제27조 규정에 의한 통계공표 ○ 건축법 제21조 주택법 제16조</td>
				</tr>
				<tr>
					<th>작성(조사)목적</th>
					<td colspan="3">전국 건축물에 대한 용도별, 층수별 등에 관한 구체적인 현황을 파악하여 건축경기 예측을 위한 정책수립의 기초 자료로 활용</td>
				</tr>
				<tr>
					<th>작성(조사)방법</th>
					<td colspan="3">"건축물대장"에 등재되어 있는 적법한 건축물의 현황 자료를 기초로 국토교통부내의 "인터넷건축행정시스템"을 통해 조사</td>
				</tr>
				<tr>
					<th>공표방법</th>
					<td colspan="3">「국토교통통계연보」, 국토교통통계누리(http://stat.molit.go.kr)</td>
				</tr>
			</table>
			<h3>주요항목</h3>
			<p class="txt-box">
				용도별, 층수별, 시도별 및 면적별 건축물 현황
			</p>
			<h3>의미분석</h3>
			<p class="txt-box">
				■ 건축물 증감 추이<br>&nbsp;<br>&nbsp;&nbsp; ° '90년도 후반 이후&nbsp; 주거용 건축물은&nbsp; 완만한 감소를 보이고 있으나, 상업용 건축물은 1984년 대비<br>&nbsp;&nbsp;&nbsp;&nbsp; 2006년 현재 166%의 건축물 증가가 이루어 졌음<br>&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp; - 1984년 대비 2007년 현재 상업용 164%, 공업용 131%증가는 우리 경제활동에 많은 신장이 이루어졌음을<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 간접적으로 나타내고 있으며, 상업용은 주상복합 등 부동산 자금의 대거유입 등으로 부동산 투기의 대상이 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 되기도 하였음<br>&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp; - 주거용의 동수감소는 수도권에서의 대규모 택지개발 및 재개발, 도시정비사업 등 기존 여러동의 일반건축물<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (단독주택)이 철거되고, 대단지의 집합건축물(아파트)로 신설되는 추세에 따라 감소로 나타나고 있으며,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 신설되는 택지개발지구 등의 주거지역에서 상업용 건축물이 신축되어 증가현상으로 나타남<br>&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp; - 이에 따라 1993년도 조사에서 1990년 대비 건축물이 10.6%감소한 것은 '90년 초까지 수도권 5대 신도시의 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 100만호 건설 사업으로 건축물 감소가 주요원인 <br>&nbsp; <br>&nbsp;&nbsp; ° '07년말 기준, 전국의 건축물은 6,460,489동으로 전년(’06)에 비해 2.7% 증가하였으며, 용도별로는<br>&nbsp;&nbsp;&nbsp;&nbsp; 주거용이 67.6%로 가장 많은 것으로 조사됨 <br>&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp; - 층수별 현황 : '07년 기준으로 1층 건물이 64.5%로 가장 많으며, 5층이상 고층건물의 비율이 전년에 비해<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7% 증가하였고, 현재 우리나라에서 가장 높은 층수의 건축물로는 서울시 강남구의 타워팰리스와 양천구의 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 현대하이페리온으로 각각 69층의 주상복합건물인것으로 조사됨(높이로는 타워팰리스가 263m, 하이페리온이 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 251m임) <br>&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&gt; 31층이상의 건축물이 수도권(서울,경기) 및 부산에 집중되는 것은 최근 주상복합아파트의 공급의 증가가 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 주요원인<br>&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp; - 규모별 현황 : 연면적 1백㎡미만의 건축물이 전체건물의 50.0%인 것으로 조사되었고, 그 다음으로는<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1백-2백㎡미만의 건축물이 23%로 많음. <br>&nbsp;<br>&nbsp;&nbsp; ° '09년말 기준, 전국의 건축물은 6,618,131동으로 전년(’08)에 비해 0.9% 증가하였으며, 용도별로는<br>&nbsp;&nbsp;&nbsp;&nbsp; 주거용이 67.7%로 가장 많은 것으로 조사됨<br>&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp; - 소유구분별 현황 : 개인 소유 건축물이 전년('08년)에 비해 4.2% 감소하였음<br>&nbsp;<br>&nbsp;&nbsp; ° '10년말 기준, 전국의 건축물은 6,676,518동으로 전년('09)에 비해 0.9%증가하였으며, 용도별로는 주거용이 <br>&nbsp;&nbsp;&nbsp;&nbsp; 67.2%로 가장 많은것을 조사되었으며, 공업용이 250,416동으로 전년('09년 242,593동)에 비해 3.2% 증가하여 <br>&nbsp;&nbsp;&nbsp;&nbsp; 가장 많은 증가추세를 보인것으로 조사됨<br>&nbsp;<br>&nbsp; ° '11년말 기준, 전국 건축물은 6,731,787동, 면적은 3,295,105천㎡(서울면적의 약 5배, 서울:6억5백만㎡)로,<br>&nbsp;&nbsp;&nbsp;&nbsp; 용도별로 살펴보면 주거용이 전체의 67.3%인 4,529,464동, 상업용이 17.0%인 1,142,766동, 공업용이 3.8%인 <br>&nbsp;&nbsp;&nbsp;&nbsp; 258,744동, 문교ㆍ사회용이 2.5%인 170,284동 으로 나타남<br>&nbsp;<br>&nbsp;&nbsp; ° '12년말 기준, 전국 건축물은 6,796,239동, 면적은 3,341,819천㎡로 전년 대비 건축물 동수는 64,452동(1.0%) <br>&nbsp;&nbsp;&nbsp;&nbsp; 증가하고, 연면적은46,714,876㎡(1.4%) 증가하였으며, 용도별로 살펴보면 주거용이 1,554,491천㎡(46.5%)<br>&nbsp;&nbsp;&nbsp;&nbsp; 으로 가장 많고, 상업용 701,112천㎡(21.0%), 공업용 332,087천㎡(9.9%), 문교·사회용 289,713천㎡(8.7%)<br>&nbsp;&nbsp;&nbsp;&nbsp; 순으로 조사됨<br>&nbsp;
			</p>
			<p class="info-menu">
				<a href="#">요약정보</a>
			</p>
			<div class="graph-info">
				<ul class="info-tab">
					<li class="active">
						<a href="#">요약정보</a>
					</li>
					<li>
						<a>&nbsp;</a>
					</li>
				</ul>
				<ul class="chk-list">
					<li>
						<strong>
							통계구분
						</strong>
						<em>
							승인통계
						</em>
					</li>
					<li>
						<strong>
							공표주기
						</strong>
						<em>
							매년
						</em>
					</li>
					<li>
						<strong>
							담당부서
						</strong>
						<em>
							녹색건축과
						</em>
					</li>
					<li>
						<strong>
							담당자
						</strong>
						<em>
							건축행정시스템 세움터
						</em>
					</li>
					<li>
						<strong>
							전화번호
						</strong>
						<em>
							02-3480-0200
						</em>
					</li>
					<li>
						<strong>
							작성(조사)방법
						</strong>
						<span>
							“건축물대장”에 등재되어 있는 적법한 건축물의 
							현황 자료를 기초로 국토교통부내의 “인터넷
							건축행정시스템”을 통해 조사
						</span>
					</li>
					<li>
						<strong>
							공표방법
						</strong>
						<span>
							「국토교통통계연보」, 국토교통통계누리<br>
							(http://stat.molit.go.kr)
						</span>
					</li>
					<li>
						<strong>
							통계표 주석
						</strong>
						<span>
							주) 수록된 수치는 매년 12월말 기준 기타는 
							세움터 상 미기록 혹은 기록오기 자료 : 국토교통
							부 국토도시실 건축정책관 녹색건축과
						</span>
					</li>
					<li>
						<strong>
							통계 관련파일
						</strong>
						<span>
							ㆍ50만_이상_도시_년간통계(2015년).xls<br>
							ㆍ2015년_건축물현황(게시용).xls<br>
							ㆍ50만_이상_도시_년간통계(2014년).xls<br>
							ㆍ2014년_건축물현황(게시용).xls
						</span>
					</li>
					<li>
						<strong>
							통계표 관련파일
						</strong>
						<span>
							ㆍ면적별 건축물 현황<br>
							통계분류표(건축물 용도).hwp
						</span>
					</li>
				</ul>
				<p class="more">
					<a href="#">펼치기</a>
				</p>
			</div>
		</div>
	</div>
	<div class="footer">
		<p class="copy">
			Copyright (c) 2016 Ministry of Land, Infrastructure and Transport. All Rights Reserved.
		</p>
		<p class="ri-btn">
			<a href="#">저작권보호정책</a>
			<a href="#">개인정보처리방침</a>
		</p>
	</div>
</div>
<?php require "part/app-footer.php"; ?>