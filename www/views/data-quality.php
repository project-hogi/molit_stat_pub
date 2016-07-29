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
		<div class="quality-con2">
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
			</dl>
			<ul class="step">
				<li>
					자체진단<br>실시
				</li>
				<li>
					취약부분<br>파악
				</li>
				<li>
					개선과제<br>도출 및 이행
				</li>
				<li>
					통계품질<br>향상
				</li>
			</ul>
		</div>
	</div>
	<div role="tabpanel" class="tab-pane" id="field-tab3">
		<h3>업무흐름도</h3>
		<p style="text-align:center;"><img src="<?php echo $config["imageFolder"]; ?>/sub/data-quality3.png" alt="" /></p>
	</div>
	<div role="tabpanel" class="tab-pane" id="field-tab4">
		<h3>진단요소</h3>
		<p style="text-align:center;"><img src="<?php echo $config["imageFolder"]; ?>/sub/data-quality4.png" alt="" /></p>
		<h3>진단요소·차원별 품질척도</h3>
		<ul class="system-con1">
			<li>
				<dl>
					<dt>의의</dt>
					<dd>
						<ul>
							<li>
								자체통계품질진단에 적용되는 진단요소 및 차원별 품질지표는 관련성(relevance), 정확성(accuracy), 시의성  및 정시성(timeliness/punctuality), 비교성(comparability), 일관성(coherence)의 5가지로 요약할 수 있다.  즉, 자체통계품질진단은 해당 통계가 이 5가지 지표를 얼마나 잘 충족시키고 있는가를 평가하는 것이다. 
							</li>
						</ul>
					</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt>관련성(relevance)</dt>
					<dd>
						- 측정하고자 하는 모집단의 특성이나 크기를 얼마나 정확하게 측정했는가를 평가한다.<br>
						- 표본오차의 크기, 비표본오차의 정도 및 잠정치/확정치 간의 차이 등을 평가한다.
					</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt>정확성(accuracy)</dt>
					<dd>
						- 시의성은 통계작성 기준시점과 결과발표시점 간의 차이를 평가한다. 작성 기준 시점과 결과 발표시점이 근접 할수록 시의성이 높은 통계라 할 수 있다.<br>
    					- 정시성은 예고된 공표시기를 정확히 준수했는지를 평가한다. 사전 공표일정을 정확히 준수 할수록 정시성이 높은 통계로 본다
					</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt>비교성(comparability)</dt>
					<dd>
						- 시간 또는 공간이 달라도 동일한 개념, 분류, 측정도구 및 기초자료 등을 기준으로 집계되어 서로 비교가 가능한지를 평가한다.<br>
    					- 포괄범위가 다르더라도 작성방법과 기준 등이 동일하다면 통계의 비교성이 높다고 할 수 있다.
					</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt>일관성(coherence)</dt>
					<dd>
						- 동일한 경제·사회현상에 대해 서로 다른 기초자료나 작성방법에 의해 작성된 통계자료들의 결과가 얼마나  유사한가를 평가한다.<br>
    					- 서로 다른 기관에서 작성하나 동일한 현상을 반영하는 통계라면, 서로 유사한 결과를 나타낼 수록 일관성이 높은 통계가 된다.
					</dd>
				</dl>
			</li>
		</ul>
	</div>
	<div role="tabpanel" class="tab-pane" id="field-tab5">
		<div class="quality-con5">
			<dl class="purpose">
				<dt>
					자체통계품질진단결과 평가제
				</dt>
				<dd>
					<strong>[‘자체통계품질진단결과’ 평가제] 의의</strong>
					- 국가승인통계 작성기관의 자율적인 품질진단 및 관리가 얼마나 내실있게 수행되고 있는지 객관화된 지표를 통해 평가하는 제도<br>
  					- 작성기관이 스스로 평가하는 자체진단 내용의 충실성과 통계청에서 평가하는 작성기관의 통계품질 향상 노력도를 종합하여 지칭
				</dd>
				<dd>
					<strong>도입배경</strong>
					ㆍ자체통계품질진단 제도 도입(‘08년) 이후 5년이 경과, 계량적 지표를 통한 평가의 내실화 필요성 대두<br> 
					ㆍ현행 품질차원별 점수만으로는 품질향상 노력 등을 반영하는데 한계, 보조 지표를 통한 보완 필요 <br>
					ㆍ국가승인통계 품질 수준에 대한 국회 등의 공개 요구
				</dd>
			</dl>
			<ul class="system-con1">
			<li>
				<dl>
					<dt>추친근거</dt>
					<dd>
						ㆍ통계법 제12조(통계의 작성·보급에 관한 사무에 대한 개선요구 등)<br>
						<img src="<?php echo $config["imageFolder"]; ?>/sub/bg_quality-con5-1.png" style="padding:20px 0 20px 15px;" alt="" />
					</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt>평가 대상</dt>
					<dd>
						ㆍ자체통계품질진단 대상에 해당되는 모든 국가승인통계
					</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt>평가 방법</dt>
					<dd>
						ㆍ자체진단 평가점수(100점), 노력도 평가점수(최대10점)를 합산하여 총점에 따라 5등급(우수.양호.보통.주의.미흡)으로 절대평가<br>
						<img src="<?php echo $config["imageFolder"]; ?>/sub/bg_quality-con5-2.png" style="padding:20px 0 20px 120px;" alt="" /> 
					</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt>평가결과(등급) 공개여부</dt>
					<dd>
						ㆍ‘13년도에는 자체진단 대상통계 전체로 평가제 적용을 확대하되 평가결과는 공개하지 않고, ‘14년도부터 외부에 공개
					</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt>평가결과 활용방안</dt>
					<dd>
						ㆍ우수통계의 경우 차년도 정기진단 면제(통계법 제9조 활용), 미흡통계의 경우 품질개선 컨설팅 제공
					</dd>
				</dl>
			</li>
		</ul>
		</div>
	</div>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>