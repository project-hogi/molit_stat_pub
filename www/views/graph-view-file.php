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
				<li>
					<a href="graph-view-meta.php">메타정보</a>
				</li>
				<li class="active">
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
			<h3>통계 관련파일</h3>
			<p class="txt-box">
				<span>건축물통계 (Statistics on Buildings)</span>
				<a href="#">- 50만_이상_도시_년간통계(2015년).xls</a>
				<a href="#">- 2015년_건축물현황(게시용).xls</a>
				<a href="#">- 50만_이상_도시_년간통계(2014년).xls</a>
				<a href="#">- 2014년_건축물현황(게시용).xls</a>
				<a href="#">- 2013년_건축물현황(게시용).xls</a>
				<a href="#">- 50만_이상_도시_년간통계(2013년).xls</a>
				<a href="#">- 2012년_건축물현황(게시용).xls</a>
				<a href="#">- 50만_이상_도시_년간통계(2012년).xls</a>
				<a href="#">- 50만_이상_도시_년간통계(2011년).xls</a>
				<a href="#">- 2010년 건축물현황(게시용).xls</a>
				<a href="#">- 2010년_건축물현황_년간통계(50만_이상_도시)_0218.xls</a>
				<a href="#">- 157_20100127164933_2009년_건축물현황(최종).zip</a>
				<a href="#">- 156_20090630125806_2008년_건축물현황.zip</a>
				<a href="#">- 155_20080709150715_2007년 건축물현황.zip</a>
				<a href="#">- 154_20080708132214_2006년 건축물현황.zip</a>
				<a href="#">- 153_20080708132156_2005년 건축물현황.zip</a>
			</p>
			<h3>통계표 관련파일</h3>
			<p class="txt-box">
				<span>면적별 건축물 현황(50만_이상_도시)</span>
				<a href="#">- 통계표 관련파일이 없습니다.</a>
				<span>소유구분별 건축물 현황</span>
				<a href="#">- 통계표 관련파일이 없습니다.</a>
				<span>소유구분별 건축물 현황(50만_이상_도시)</span>
				<a href="#">- 통계표 관련파일이 없습니다.</a>
				<span>용도별 건축물 현황</span>
				<a href="#">- 통계표 관련파일이 없습니다.</a>
				<span>용도별 건축물 현황(50만_이상_도시)</span>
				<a href="#">- 통계표 관련파일이 없습니다.</a>
				<span>층수별 건축물 현황</span>
				<a href="#">- 통계표 관련파일이 없습니다.</a>
				<span>층수별 건축물 현황(50만_이상_도시)</span>
				<a href="#">- 통계표 관련파일이 없습니다.</a>
				<span>면적별 건축물 현황</span>
				<a href="#">- 통계분류표(건축물 용도).hwp</a>
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