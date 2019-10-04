
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="subBody">
<?php include("../include/commonInc.php"); ?>
<div class="subWrap">
    <div class="subCenter">
        <?php include("../include/header.php"); ?>
        <div class="mainShopArea">
            <div class="leftArea">
            	<?php include("../include/leftMenu.php"); ?>
            </div>
            <div class="schTop">
            	<form action="/work/citibank/product/2DepthList.php">
                    <span class="tit"><img src="/work/citibank/images/main/schTopTit.gif" alt="상품검색" /></span>
                    <input type="text" class="keyword" />
                    <input type="image" src="/work/citibank/images/main/schTopBtn.gif" alt="검색" />
                </form> 
            </div>
            <div class="contents">
            	<div class="mainRollBanner">
                	<div class="imgField"><a href="#"><img src="/work/citibank/images/main/mainBanner001.jpg" alt="" /></a></div>
                    <div class="bannerListField">
                        <ul>
                            <li><a href="#"><span>베이비스키네어</span></a></li>
                            <li class="on"><a href="#"><span>BNX 품목인하</span></a></li>
                            <li><a href="#"><span>워모VS  킨록</span></a></li>
                            <li><a href="#"><span>코스메틱 페어</span></a></li>
                            <li><a href="#"><span>엘지생활건강</span></a></li>
                        </ul>
                    </div>
                </div>
                
                

                <?php include("../product/mainBestItem.php"); ?>
                
                <div class="cateMenu2Depth">
                	<div class="cTop"></div>
                    <div class="cMenu">
                        <ul class="cMenuList">
                            <li><a href="#">조리용품</a><span class="txtEa">(145)</span></li>
                            <li><a href="#">식기보관용기</a><span class="txtEa">(23)</span></li>
                            <li><a href="#">조리용품</a><span class="txtEa">(42)</span></li>
                            <li><a href="#">패션잡화/화장품 </a><span class="txtEa">(21)</span></li>
                            <li><a href="#">조리용품</a><span class="txtEa">(1)</span></li>
                            <li><a href="#">조리용품</a><span class="txtEa">(42)</span></li>
                            <li><a href="#">패션잡화/화장품 </a><span class="txtEa">(21)</span></li>
                            <li><a href="#">조리용품</a><span class="txtEa">(1)</span></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                	<div class="cBot"></div>
                    <div class="schMsg"><strong>생활/주방</strong> 매장에 <strong>124개</strong> 상품이 검색되었습니다.</div>
                	<div class="cBot2"></div>
                </div>
                
                
                <div class="moneyOption">
                	<ul class="arrayPrice">
                    	<li><a href="#" class="on">인가상품순</a></li>
                    	<li><a href="#">신상품순</a></li>
                    	<li><a href="#">낮은가격순</a></li>
                    	<li><a href="#">높은가격순</a></li>
                    </ul>
                    <div class="listStyle">
                    	<img src="/work/citibank/images/main/optTabTit.gif" alt="상품보기" />
                        
                        <div class="select" style="width:70px; z-index:10;">
                            <span class="ctrl"><span class="arrow">.</span></span>
                            <button type="button" class="selected">20개</button>
                        
                            <ul>
                                <li><a href="javascript:;">20개</a></li>
                                <li><a href="javascript:;">40개</a></li>
                                <li><a href="javascript:;">60개</a></li>
                                <li><a href="javascript:;">전체보기</a></li>
                            </ul>
                        </div>
                        <script type="text/javascript" src="/work/citibank/js/jquery-1.4.1.min.js"></script>
						<script type="text/javascript" src="/work/citibank/js/select.js"></script>
                        
                        <!-- 기존 셀렉트 메뉴
                        <select class="select" id="listStyleSelect">
                            <option>20개</option>
                        </select> 
                        -->
                    </div>
                </div>
                
                <?php include("../product/itemPaging.php"); ?>
                
                <?php include("../product/prdLayerPop.php"); ?>
                <div class="ItemList2Depth">
                    <div class="itemBoxWrap">
                        <?php include("itemBox.php"); ?>
						<?php include("itemBox.php"); ?>
                        <?php include("itemBox.php"); ?>
                        <?php include("itemBox.php"); ?>
                        <?php include("itemBox.php"); ?>
                        <div class="itemLine"></div>
                        <?php include("itemBox.php"); ?>
                        <?php include("itemBox.php"); ?>
                        <?php include("itemBox.php"); ?>
                        <?php include("itemBox.php"); ?>
                        <?php include("itemBox.php"); ?>
                        <div class="itemLine"></div>
                    </div>
                </div>
                
                <?php include("../product/itemPaging.php"); ?>
                
            </div>
			<?php include("../include/footGuide.php"); ?>
            <div class="clear"></div>
            
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>