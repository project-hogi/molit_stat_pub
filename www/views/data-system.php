<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<h2>통계기반정책관리제도</h2>
<p class="additional">통계와 정책간 연계성 강화를 위한 제도 입니다.</p>
<dl class="paging">
	<dt class="skip">현재 페이지 경로</dt>
	<dd>
		<a href="/views/index.php">홈</a>
		<a href="data-year.php">자료마당</a>
		<span>통계기반정책관리제도</span>
	</dd>
</dl>
<ul class="nav nav-tabs" role="tablist" id="myTab">
	<li role="presentation" class="active col-md-4"><a href="#field-tab1" aria-controls="home" role="tab" data-toggle="tab">목적과 의의</a></li>
	<li role="presentation" class="col-md-4"><a href="#field-tab2" aria-controls="profile" role="tab" data-toggle="tab">법적 근거와 평가대상 법령</a></li>
	<li role="presentation" class="col-md-4"><a href="#field-tab3" aria-controls="messages" role="tab" data-toggle="tab" style="border-right:0px none;">평가내용</a></li>
</ul>
<div class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="field-tab1">
		<dl class="purpose">
			<dt>
				목적과 의의
			</dt>
			<dd>
				<strong>목적</strong>
				ㆍ정책과 제도의 기반이 되는 통계지표를 구비함으로써 통계와 정책간 연계를 강화, 정책 및 제도의 효과성 제고
			</dd>
			<dd>
				<strong>의의</strong>
				ㆍ중앙행정기관의 장이 법령의 제 개정을 통하여 정책 또는 제도를 도입하거나 중요 사항을 변경하는 경우<br>
				ㆍ통계청장이 정책 및 제도의 집행 평가에 필요한 통계지표의 구비 여부 및 통계 개발 개선 계획의 타당성을 평가<br>
				ㆍ중앙행정기관은 평가결과에 따라 필요 통계지표를 작성, 정책에 활용
			</dd>
		</dl>
	</div>
	<ul class="system-tab">
		<li class="active">
			<a href="#">개관</a>
		</li>
		<li>
			<a href="#">평가절차흐름도</a>
		</li>
		<li>
			<a href="#">주요평가사항</a>
		</li>
		<li>
			<a href="#">평가의견유형</a>
		</li>
		<li>
			<a href="#">평가요청서작성요령</a>
		</li>
		<li>
			<a href="#">평가대상제외법령현황</a>
		</li>
	</ul>
	<div class="tab1-con">
		<h3>개관</h3>
		<ul>
			<li>
				<dl>
					<dt>의의</dt>
					<dd>
						<ul>
							<li>
								중앙행정기관의 장이 법령의 제·개정을 통하여 정책 또는 제도를 도입하거나 변경하는 경우, 통계청장이 정책 및 제도의 집행·평가에 필요한 통계지표의 구비 여부 및 통계 개발·개선 계획의 타당성을 평가 
							</li>
							<li>
								중앙행정기관은 평가결과에 따라 필요 통계지표를 작성, 정책에 활용 
							</li>
						</ul>
					</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt>기본체계</dt>
					<dd>
						<ul>
							<li>
								법령안 주관 중앙행정기관이 필요 통계지표 구비여부와 관련 통계개발·개선 계획을 수립 통계청에 평가 요청  
							</li>
							<li>
								통계청은 평가 요청한 내용을 검토하여 평가의견을 요청기관에 통보하고 관계기관 간 조정업무 수행 
							</li>
						</ul>
					</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt>법적근거</dt>
					<dd>
						①(통계법 제12조의2(통계기반정책평가)[개정 2012. 12. 18. 법률 제11553호])<br> 
					       - 중앙행정기관의 장은 소관 법령의 제정 또는 개정을 통하여 새로운 정책과 제도를 도입하거나 종전의 정책과  제도의 중요 사항을 변경하는 경우에는 
					          그 도입ㆍ변경 되는 정책과 제도의 집행ㆍ평가에 적합한 통계의 구비 여부 등에 대한 평가를 요청해야 함(제1항) 
					       - 통계청장이 제1항에 따른 요청을 받은 때에는 정책 및 제도가 통계에 기반하고 있는지를 평가하고 그 정책 및 제도 관련 통계의 적합성 여부, 통계 개발·개선 계획 등을 포함한 의견을<br> 
					          해당 중앙행정기관의 장에게 통보해야 함(제2항) 
					       - 중앙행정기관의 장은 해당 법령안을 국무회의에 상정할 때에는 제2항에 따른 통계청장의 평가의견을 함께 제출하여야 함(제3항)<br>
					       - 통계청장은 통계기반정책평가에 관한 지침을 수립하여 중앙행정기관의 장에게 통보하여야 함(제4항)<br>
					    ②통계법 시행령[개정 2013. 3. 18. 대통령령 제24400호] <br>
					        가. 제17조의 2(통계기반정책평가의 절차 및 방법) <br>
					              - 중앙행정기관의 장은 법 제12조의2 제1항에 따른 통계기반정책평가를 요청하려면 다음 각 호의 사항을 포함하는 통계기반정책평가 요청서(전자문서를 포함한다)를 통계청장에게 제출하여야 함<br>
					                 1.법령을 통하여 도입되거나 변경되는 주요 정책 및 제도<br>
					                 2.법령을 통하여 도입되거나 변경되는 정책 및 제도의 집행·평가에 적합한 통계 및 그 구비 여부<br>
					                 3.통계에 대한 개발ㆍ개선 계획. 다만, 새로운 통계의 작성 및 기존 통계의 개선이 필요한 경우에만 포함한다.<br>
					              - 중앙행정기관의 장은 법 제12조의2 제2항에 따라 통보받은 통계기반정책평가 결과를 정책에 반영하도록 노력하여야 함<br> 
					              - 통계청장은 법 제12조의 2제2항에 따른 통계기반정책평가 실시 및 그 평가결과 반영 여부의 파악을 위하여 필요하면 중앙행정기관의 장에게 관련 자료 제출을 요청할 수 있음.<br> 
					                 이 경우 요청받은 기관은 특별한 사유가 없으면 요청에 따라야 함 <br>
					        나. 제17조의 3(통계기반정책평가를 위한 자문) <br>
					              - 통계청장은 법 제12조의 2에 따른 통계기반정책평가를 합리적이고 객관적으로 하기 위하여 필요하면 관계 전문가에게 자문하거나 조사ㆍ연구를 의뢰할 수 있음(제1항)<br> 
					              - 통계청장은 제1항에 따라 관계 전문가에게 자문하거나 조사ㆍ연구를 의뢰한 경우 그 전문가에게 예산의 범위에서 수당ㆍ여비 및 그 밖에 필요한 경비를 지급할 수 있음(제2항)
					</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt>평가대상</dt>
					<dd>
						<ul>
							<li>
								통계법 제12조의2제1항 각 호에 해당하는 법령을 제외한 모든 제ㆍ개정 법률ㆍ대통령령ㆍ총리령 및 부령 <br>
								(의원입법은 하위법령 제ㆍ개정 단계에서 평가하되, 하위법령에 위임된 사항이 없는 의원입법은 소관 부처와 소관 부처와 협의하여 평가)  
							</li>
							<li>
								개정 법령은 개정 법조문만을 대상으로 평가<br>
								- 통계청장은 평가지침으로 제외대상 법령을 선정하여 통보 
							</li>
						</ul>
					</dd>
				</dl>
			</li>
		</ul>
	</div>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>