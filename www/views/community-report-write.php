<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<h2>통계 불일치 신고센터</h2>
<p class="additional">국토교통통계누리의 통계 오류정보에 대해 알려주세요!</p>
<dl class="paging">
	<dt class="skip">현재 페이지 경로</dt>
	<dd>
		<a href="/views/index.php">홈</a>
		<a href="community-report.php">참여마당</a>
		<span>통계 불일치 신고센터</span>
	</dd>
</dl>
<div class="report-write">
	<p class="txt1">
		아래 내용을 입력해 주세요.
	</p>
	<table>
		<tr>
			<th>
				제목
			</th>
			<td>
				<input type="text" class="form-control" />
			</td>
		</tr>
		<tr>
			<th>
				요청구분
			</th>
			<td>
				<select class="form-control">
					<option value="">통계내용 오류</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>
				통계분류
			</th>
			<td>
				<select class="form-control">
					<option value="">국토 · 토지</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>
				통계명
			</th>
			<td>
				<select class="form-control">
					<option value="">선택해주세요.</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>
				통계표명
			</th>
			<td>
				<select class="form-control">
					<option value="">선택해주세요.</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>
				내용
			</th>
			<td>
				<textarea class="form-control"></textarea>
			</td>
		</tr>
		<tr>
			<th>
				이름
			</th>
			<td>
				<input type="text" class="form-control" />
				<span>ex) 010-0000-1111</span>
			</td>
		</tr>
		<tr>
			<th>
				연락처
			</th>
			<td>
				<input type="text" class="form-control" />
			</td>
		</tr>
		<tr>
			<th>
				이메일
			</th>
			<td>
				<input type="text" class="form-control" />
			</td>
		</tr>
		<tr>
			<th>
				비밀번호
			</th>
			<td>
				<input type="password" class="form-control" />
				<span>게시물 수정 및 삭제시에 사용됩니다.</span>
			</td>
		</tr>
	</table>
	<p class="btm-btn">
		<input type="button" value="등록하기" />
		<a href="community-report.php">취소</a>
	</p>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>