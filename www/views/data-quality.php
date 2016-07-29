<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<h2>통계품질진단</h2>
<p class="additional">통계와 정책간 연계성 강화를 위한 제도 입니다.</p>
<dl class="paging">
	<dt class="skip">현재 페이지 경로</dt>
	<dd>
		<a href="/views/index.php">홈</a>
		<a href="data-year.php">자료마당</a>
		<span>통계품질진단</span>
	</dd>
</dl>
<ul class="nav nav-tabs" role="tablist" id="myTab">
	<li role="presentation" class="active"><a href="#field-tab1" aria-controls="home" role="tab" data-toggle="tab">종류</a></li>
	<li role="presentation"><a href="#field-tab2" aria-controls="profile" role="tab" data-toggle="tab">자체진단 배경 및 의의</a></li>
	<li role="presentation"><a href="#field-tab3" aria-controls="messages" role="tab" data-toggle="tab">업무흐름도</a></li>
	<li role="presentation"><a href="#field-tab4" aria-controls="messages" role="tab" data-toggle="tab">진단요소</a></li>
	<li role="presentation"><a href="#field-tab5" aria-controls="messages" role="tab" data-toggle="tab">자체통계품질진단결과평가제</a></li>
</ul>
<div class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="field-tab1">
		<h3>품질진단의 종류</h3>
		 <div class="quality-con1">
		 	<ul>
		 		<li>
		 			<dl>
		 				<dt>
		 					<strong>정기진단</strong>
		 					<span>(주요 승인통계)</span>
		 					<em>
		 						10년의 범위 안에서 외부전문가 진단<br>(제9조)
		 					</em>
		 				</dt>
		 				<dd>
		 					<strong>
		 						정기통계품질진단 (통계법 제9조)
		 					</strong>
		 					<span>
		 						① 통계청장은 정부의 각종 정책수립.평가 또는 다른 통계의 작성 등에 널리 활용되는통계로서 대통령령으로 정하는 주요 통계의 
							    작성 및 보급의 제반 과정에 대하여 10년의 범위 안에서 주기적으로 통계품질 진단 (이하 “정기통계품질진단”이라 한다)을 
							    실시하여야 한다.<br> 
							    ② 통계청장은 제10조에 따른 수시통계품질진단을 실시 중이거나 대통 령령으로 정하는 기간(3년) 내에 실시하였던 통계와 
							    제11조에 따른 자체통계품질진단을 한 통계 중 그 품질이 우수하다고 판단되는 통계에 대하여는 정기통계품질진단을
							    면제할 수 있다.
		 					</span>
		 				</dd>
		 			</dl>
		 		</li>
		 		<li>
		 			<dl>
		 				<dt>
		 					<strong>수시진단</strong>
		 					<span>(품질저하가 의심되는 통계)</span>
		 					<em>
		 						수시로 외부전문가 진단<br>(제10조)
		 					</em>
		 				</dt>
		 				<dd>
		 					<strong>
		 						수시통계품질진단 (통계법 제10조)
		 					</strong>
		 					<span>
		 						① 통계청장은 제11조에 따른 자체통계품질진단을 실시하지 아니하거나 품질이 저하되었다고 믿을만한 상당한 이유가 있는 
								통계에 대하여는 수시로 통계품질진단(이하 “수시통계품질진단”이라 한다)을 실시 할 수 있다.<br> 
								② 통계청장은 수시통계품질진단을 실시하는 때에는 해당 통계작성 기관에 미리 수시통계품질진단의 사유·시기 및 방법 등을 
								통보하여야 한다.
		 					</span>
		 				</dd>
		 			</dl>
		 		</li>
		 		<li>
		 			<dl>
		 				<dt>
		 					<strong>자체진단</strong>
		 					<span>(모든 승인통계)</span>
		 					<em>
		 						매년 작성기관 스스로 진단<br>(제11조)
		 					</em>
		 				</dt>
		 				<dd>
		 					<strong>
		 						자체통계품질진단 (통계법 제11조)
		 					</strong>
		 					<span>
		 						① 통계작성기관의 장은 소관 통계에 관하여 매년 통계품질진단(이하 “자체통계품질진단”이라 한다)을 실시하여야 한다. 다만, 
								작성주기가 1년을 초과하는 통계의 경우에는 그 통계를 작성하는 해 또는 그 다음 해에 실시할 수 있다.<br> 
								② 통계작성기관의 장은 소관 통계에 대하여 정기통계품질진단 또는 수시통계품질진단을 받은 때에는 그 연도의 자체통계품질
								진단을 실시 하지 아니할 수 있다.
		 					</span>
		 				</dd>
		 			</dl>
		 		</li>
		 	</ul>
		 </div>
	</div>
	<div role="tabpanel" class="tab-pane" id="field-tab2">
		<dl class="purpose">
			<dt>
				자체진단 배경 및 의의
			</dt>
			<dd>
				<strong>13년부터 자체통계품질진단결과 평가제 도입</strong>
				ㆍ10여 년 전부터 통계의 품질에 대한 관심 크게 증가 (특히 유럽 국가)<br>
				ㆍ우리나라도 통계청에서 06년 부터 국가 통계 전반에 대한 진단 시작 (정기진단은 비용ㆍ시간 등 행정력 부담, 작성기관의 업무 부담 발생)<br>
				ㆍ08년부터 자체진단을 도입하여 정기진단 보완, 품질관리 다각화<br>
				ㆍ13년부터 자체 통계품질진단결과 평가제 도입<br>
				※ 통계 작성기관이 자체적으로 품질진단을 실시하여 취약한 부분을 스스로인식하고, 직접 개선과제를 도출ㆍ이행하여 담당통계의 품질을 제고
			</dd>
			<dd>
				자체 진단 실시 -> 취약부분 파악 -> 개선과제 도출 및 이행 -> 통계품질 향상
			</dd>
		</dl>
	</div>
	<div role="tabpanel" class="tab-pane" id="field-tab3">
		<dl class="purpose">
			<dt>
				업무흐름도
			</dt>
			<dd>
				<strong>대상통계 선정(1~2월)</strong>
				<strong>진단계획 수집 및 제출(3월) ※ 금년도 개선과제 이행계획 수립</strong>
				<strong>진단 실시(6~11월) ※ 금년도 개선과제 이행</strong>
				<strong>진단결과 제출(12월) ※ 다음 년도 개선과제 도출</strong>
				<strong>진단결과 점검 및 환류(1~2월)</strong>
			</dd>
		</dl>
		<p class="center">
			<a href="quality-detail3.php" class="trigger-modal-box btn btn-default" data-modal-box-width="720">상세내용보기</a>
		</p>
	</div>
	<div role="tabpanel" class="tab-pane" id="field-tab4">
		<dl class="purpose">
			<dt>
				진단요소
			</dt>
			<dd>
				<strong>품질</strong>
				정확성, 일관성, 비교성, 접근성/명확성, 관련성, 시의성/정시성
			</dd>
			<dd>
				(전통적 통계품질) 정확하고 신속한 통계 -> (오늘날 통계품질) 다차원적 개념 (multi-dimensional concept)
			</dd>
		</dl>
		<p class="center">
			<a href="quality-detail4.php" class="trigger-modal-box btn btn-default" data-modal-box-width="720">상세내용보기</a>
		</p>
	</div>
	<div role="tabpanel" class="tab-pane" id="field-tab5">
		<dl class="purpose">
			<dt>
				자체통계품질진단결과 평가제
			</dt>
			<dd>
				ㆍ⌈자체통계품질진단결과¹ 평가제⌋ : 국가승인통계 작성기관의 자율적인 품질진단 및 관리가 얼마나 내실있게 수행되고 있는지 객관화된 지표를 통해 평가하는 제도<br>
				1)작성기관이 스스로 평가하는 자체진단 내용의 충실성과 통계청에서 평가하는 작성기관의 통계품질 향상 노력도를 종합하여 지칭
			</dd>
		</dl>
		<p class="center">
			<a href="quality-detail5.php" class="trigger-modal-box btn btn-default" data-modal-box-width="720">상세내용보기</a>
		</p>
	</div>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>