<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-modal"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<h1>통계품질진단 진단요소</h1>
<div id="container">
	<div class="quality-detail">
		<h2>진단요소</h2>
		<h3>진단요소·차원별 품질척도</h3>
		<p>자체통계품질진단에 적용되는 진단요소 및 차원별 품질지표는 관련성(relevance), 정확성(accuracy), 시의성 및 정시성(timeliness/punctuality), 비교성(comparability), 일관성(coherence)의 5가지로 요약할 수 있다.<br>
		즉, 자체통계품질진단은 해당 통계가 이 5가지 지표를 얼마나 잘 충족시키고 있는가를 평가하는 것이다.</p>
		<ul>
			<li>
				<dl>
					<dt>관련성(relevance)</dt>
					<dd>
						- 통계자료가 포괄범위와 개념, 내용 등에 있어서 이용자 요구사항을 얼마나 충족하는지를 평가한다.<br>
						- 통계이용자에게 얼마나 의미 있고 유용한 통계를 작성하여 제공하고 있는가를 평가한다.<br>
						- 통계작성 목적을 명확히 하고, 전문가 자문회의, 이용자 단족도 조사 등을 실시하여 이용자의 요구를 파악하고 반영하는지를 평가한다.
					</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt>정확성(accuracy)</dt>
					<dd>
						- 측정하고자 하는 모집단의 특성이나 크기를 얼마나 정확하게 측정했는가를 평가한다.<br>
						- 표본오차의 크기, 비표본오차의 정도 및 잠정치/확정치 간의 차이 등을 평가한다.
					</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt>시의성 및 정시성(timeliness/punctuality)</dt>
					<dd>
						- 시의성은 통계작성 기준시점과 결과발표시점 간의 차이를 평가한다. 작성 기준 시점과 결과 발표시점이 근접할수록 시의성이 높은 통계라 할 수 있다.<br>
						- 정시성은 예고된 공표시기를 정확히 준수했는지를 평가한다. 사전 공표일정을 정확히 준수 할수록 정시성이 높은 통계로 본다.
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
						- 동일한 경제·사회현상에 대해 서로 다른 기초자료나 작성방법에 의해 작성된 통계자료들의 결과가 얼마나 유사한가를 평가한다.<br>
						- 서로 다른 기관에서 작성하나 동일한 현상을 반영하는 통계라면, 서로 유사한 결과를 나타낼 수록 일관성이 높은 통계가 된다.
					</dd>
				</dl>
			</li>
		</ul>
	</div>
</div>
<?php require "part/app-footer.php"; ?>