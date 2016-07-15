<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-index"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<div class="contents">
	<div class="menu-wrap">
		<div class="menu">
			<ul>
				<li>
					<a href="#"><img src="<?php echo $config["imageFolder"]; ?>/main/menu1.png" alt="국토 도시" /></a>
				</li>
				<li>
					<a href="#"><img src="<?php echo $config["imageFolder"]; ?>/main/menu2.png" alt="주택" /></a>
					<div class="depth2">
						<h3>
							<strong>
								<img src="<?php echo $config["imageFolder"]; ?>/main/h3-le.png" alt="" />
							</strong>
							<span>
								<img src="<?php echo $config["imageFolder"]; ?>/main/h3-ri.png" alt="" />
							</span>
						</h3>
						<ul>
							<li>
								<a href="#">국토교통통계<span>&#62;</span></a>
								<ul>
									<li>
										<a href="#">주택도시기금 및 주택분양보증 현황 <span>&#62;</span></a>
									</li>
									<li>
										<a href="#">부동산거래현황(2012~2015년) <span>&#62;</span></a>
									</li>
									<li>
										<a href="#">아파트실거래가격지수 <span>&#62;</span></a>
									</li>
									<li>
										<a href="#">임대주택통계 <span>&#62;</span></a>
									</li>
									<li>
										<a href="#">주거실태조사 <span>&#62;</span></a>
									</li>
									<li>
										<a href="#">주택건설실적통계(착공) <span>&#62;</span></a>
									</li>
									<li>
										<a href="#">주택보급률 <span>&#62;</span></a>
									</li>
									<li>
										<a href="#">부동산거래현황(2006~2011년) <span>&#62;</span></a>
									</li>
									<li>
										<a href="#">미분양주택현황보고 <span>&#62;</span></a>
									</li>
									<li>
										<a href="#">아파트주거환경통계 <span>&#62;</span></a>
									</li>
									<li>
										<a href="#">전국주택가격동향조사 <span>&#62;</span></a>
									</li>
									<li>
										<a href="#">주택건설실적통계(인허가) <span>&#62;</span></a>
									</li>
									<li>
										<a href="#">주택건설실적통계(준공) <span>&#62;</span></a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">e-나라지표<span>&#62;</span></a>
							</li>
							<li>
								<a href="#">행정자료<span>&#62;</span></a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#"><img src="<?php echo $config["imageFolder"]; ?>/main/menu3.png" alt="토지" /></a>
				</li>
				<li>
					<a href="#"><img src="<?php echo $config["imageFolder"]; ?>/main/menu4.png" alt="건설 수자원" /></a>
				</li>
				<li>
					<a href="#"><img src="<?php echo $config["imageFolder"]; ?>/main/menu5.png" alt="교통 물류" /></a>
				</li>
				<li>
					<a href="#"><img src="<?php echo $config["imageFolder"]; ?>/main/menu6.png" alt="항공" /></a>
				</li>
				<li>
					<a href="#"><img src="<?php echo $config["imageFolder"]; ?>/main/menu7.png" alt="도로 철도" /></a>
				</li>
				<li>
					<a href="#"><img src="<?php echo $config["imageFolder"]; ?>/main/menu8.png" alt="외부통계" /></a>
				</li>
			</ul>
		</div>
		<div class="more-click">
			<a href="#"><img src="<?php echo $config["imageFolder"]; ?>/main/more-click1.png" alt="" /></a>
		</div>
		<div class="stat">
			<img src="<?php echo $config["imageFolder"]; ?>/main/stat-img1.png" alt="" />
		</div>
	</div>
</div>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>