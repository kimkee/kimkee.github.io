
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="csBody">
<?php include("../include/commonInc.php"); ?>
<div class="csWrap">
    <div class="csCenter">
        <?php include("../include/header.php"); ?>
        <?php include("../customer/csLocation.php"); ?>
        <div class="mainCsArea">
        	<?php include("../customer/csLeftMenu.php"); ?>
            <div class="rightArea">
                <div class="csSubTopVisual" style="margin-bottom:20px;"><img src="/work/kbpoint/images/customer/csMypageTopVisual.jpg" alt="마이페이지" /></div>
                <!--  -->
            	<div class="bbsHead">1:1상담문의</div>
                
            	<ul class="bbsTab bbsTab2">
                	<li class="on"><a href="#">전체내역(주문)</a></li>
                	<li><a href="#">취소신청</a></li>
                	<li><a href="#">반품신청</a></li>
                	<li><a href="#">교환신청</a></li>
                	<li><a href="#">AS신청</a></li>
                	<li><a href="#">배송문의</a></li>
                    
                    <li class="gap"><a href="#">전체내역(비주문)</a></li>
                	<li><a href="#">이벤트문의</a></li>
                	<li><a href="#">사이트문의</a></li>
                </ul>
            	<div class="btnList"> 
            	    <div class="right"><a href="/work/kbpoint/customer/csCounWrite.php"><img src="/work/kbpoint/images/customer/btnCoun1.gif" alt="상담신청" /></a></div>
            	</div>
                
                
            	<div class="csCounDayOpt">
                	<strong class="tit">기간별 조회 </strong> 
                    <a href="#"><img src="/work/kbpoint/images/customer/btnCounDay1.gif" alt="일주일" /></a>
                    <a href="#"><img src="/work/kbpoint/images/customer/btnCounDay2.gif" alt="1개월" /></a>
                    <a href="#"><img src="/work/kbpoint/images/customer/btnCounDay3.gif" alt="3개월" /></a>
                    <a href="#"><img src="/work/kbpoint/images/customer/btnCounDay4.gif" alt="6개월" /></a>
                </div>
                
                <table cellspacing="0" class="counTable">
                    <tr>
                        <th>상담분야</th>
                        <th>상담신청일</th>
                        <th>상품평</th>
                        <th>주문번호</th>
                        <th>처리상태</th>
                        <th>답변일</th>
                        <th>답변확인</th>
                    </tr>
                    <tr>
                        <td>취소신청</td>
                        <td>2011.02.11 <br />11:05:42</td>
                        <td>데쉬보드 주차알림판</td>
                        <td>20145898754211</td>
                        <td><img src="/work/kbpoint/images/customer/btnCounReply1.gif" alt="답변완료" width="56" height="19" /></td>
                        <td>2011.02.11 <br />11:05:42</td>
                        <td><a href="csCounView.php"><img src="/work/kbpoint/images/customer/btnCounReply2.gif" alt="답변완료" width="56" height="19" /></a></td>
                    </tr>
                    <tr>
                        <td>취소신청</td>
                        <td>2011.02.11 <br />11:05:42</td>
                        <td>데쉬보드 주차알림판</td>
                        <td>20145898754211</td>
                        <td><img src="/work/kbpoint/images/customer/btnCounReply1.gif" alt="답변완료" width="56" height="19" /></td>
                        <td>2011.02.11 <br />11:05:42</td>
                        <td><img src="/work/kbpoint/images/customer/btnCounReply2.gif" alt="답변완료" width="56" height="19" /></td>
                    </tr>
                    <tr>
                        <td colspan="7" style="padding:20px">일주일 이내 A/S신청 내역이 없습니다. </td>
                    </tr>
                </table>
                
                
				<?php include("../customer/bbsPaging.php"); ?>
                

                
                <div class="counBot"><img src="/work/kbpoint/images/customer/csQnaListGuide.gif" alt="" /></div>

            	<!-- -->
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>