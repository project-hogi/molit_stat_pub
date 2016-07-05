<div class="snb">
	<ul>
		<li class="home">
			<a href="/index.php">홈</a>
		</li>
		<li>
			<?php if(getDepthId(0) == 'notice'){ ?>
				<a href="notice-use.php">알림마당</a>
			<?php } ?>
			<?php if(getDepthId(0) == 'stat'){ ?>
				<a href="stat.php">통계마당</a>
			<?php } ?>
			<?php if(getDepthId(0) == 'data'){ ?>
				<a href="#">자료마당</a>
			<?php } ?>
			<?php if(getDepthId(0) == 'community'){ ?>
				<a href="#">참여마당</a>
			<?php } ?>
			<ul>
				<li><a href="notice-use.php">알림마당</a></li>
				<li><a href="stat-field.php">통계마당</a></li>
				<li><a href="data-year.php">자료마당</a></li>
				<li><a href="community-event.php">참여마당</a></li>
			</ul>
		</li>
		<?php if(getDepthId(0) == 'notice'){ ?>
			<li>
				<?php if(getDepthId(1) == 'use'){ ?>
					<a href="notice-use.php">이용안내</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'introduce'){ ?>
					<a href="notice-introduce.php">국토교통통계소개</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'notice'){ ?>
					<a href="notice-notice.php">공지사항</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'statstory'){ ?>
					<a href="notice-statstory.php">통계이야기</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'faq'){ ?>
					<a href="notice-faq.php">자주묻는질문</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'colmn'){ ?>
					<a href="notice-colmn.php">보도자료</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'schedule'){ ?>
					<a href="notice-schedule.php">통계공표일정</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'statdep'){ ?>
					<a href="notice-statdep.php">통계담당부서안내</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'site'){ ?>
					<a href="notice-site.php">관련사이트</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'viewer'){ ?>
					<a href="notice-viewer.php">뷰어다운로드</a>
				<?php } ?>				
				<ul>
					<li><a href="notice-use.php">이용안내</a></li>
					<li><a href="notice-introduce.php">국토교통통계소개</a></li>
					<li><a href="notice-notice.php">공지사항</a></li>
					<li><a href="notice-statstory.php">통계이야기</a></li>
					<li><a href="notice-faq.php">자주묻는질문</a></li>
					<li><a href="notice-colmn.php">보도자료</a></li>
					<li><a href="notice-schedule.php">통계공표일정</a></li>
					<li><a href="notice-statdep.php">통계담당부서안내</a></li>
					<li><a href="notice-site.php">관련사이트</a></li>
					<li><a href="notice-viewer.php">뷰어다운로드</a></li>
				</ul>
			</li>
		<?php } ?>
		<?php if(getDepthId(0) == 'stat'){ ?>
			<li>
				<?php if(getDepthId(1) == 'field'){ ?>
					<a href="stat-field.php">분야별통계</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'department'){ ?>
					<a href="stat-department.php">부서별통계</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'name'){ ?>
					<a href="stat-name.php">명칭별통계</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'area'){ ?>
					<a href="stat-area.php">지역별통계</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'other'){ ?>
					<a href="stat-other.php">타기관통계</a>
				<?php } ?>				
				<ul>
					<li><a href="stat-field.php">분야별통계</a></li>
					<li><a href="stat-department.php">부서별통계</a></li>
					<li><a href="stat-name.php">명칭별통계</a></li>
					<li><a href="stat-area.php">지역별통계</a></li>
					<li><a href="stat-other.php">타기관통계</a></li>
				</ul>
			</li>
		<?php } ?>
		<?php if(getDepthId(0) == 'data'){ ?>
			<li>
				<?php if(getDepthId(1) == 'year'){ ?>
					<a href="data-year.php">통계연보</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'period'){ ?>
					<a href="data-period.php">간행물</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'db'){ ?>
					<a href="data-db.php">통계메타DB</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'word'){ ?>
					<a href="data-word.php">통계용어</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'legal'){ ?>
					<a href="data-legal.php">통계법령자료</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'stat'){ ?>
					<a href="data-stat.php">통계서식정보</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'system'){ ?>
					<a href="data-system.php">통계기반정책관리제도</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'quality'){ ?>
					<a href="data-quality.php">통계품질진단</a>
				<?php } ?>
				<ul>
					<li><a href="data-year.php">통계연보</a></li>
					<li><a href="data-period.php">간행물</a></li>
					<li><a href="data-db.php">통계메타DB</a></li>
					<li><a href="data-word.php">통계용어</a></li>
					<li><a href="data-legal.php">통계법령자료</a></li>
					<li><a href="data-stat.php">통계서식정보</a></li>
					<li><a href="data-system.php">통계기반정책관리제도</a></li>
					<li><a href="data-quality.php">통계품질진단</a></li>
				</ul>
			</li>
		<?php } ?>
		<?php if(getDepthId(0) == 'community'){ ?>
			<li>
				<?php if(getDepthId(1) == 'report'){ ?>
					<a href="community-report.php">통계 불일치 신고센터</a>
				<?php } ?>
				<?php if(getDepthId(1) == 'event'){ ?>
					<a href="community-event.php">이벤트</a>
				<?php } ?>
				<ul>
					<li><a href="http://eminwon.molit.go.kr/" target="_blank">민원마당</a></li>
					<li><a href="community-event.php">이벤트</a></li>
					<li><a href="community-report.php">통계 불일치 신고센터</a></li>
				</ul>
			</li>
		<?php } ?>
	</ul>
</div>
<div class="container">
	<div id="content">