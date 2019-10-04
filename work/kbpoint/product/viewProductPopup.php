
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="viewPop">
<?php include("../include/commonInc.php"); ?>
<div class="viewPopWrap">
    <div class="popCenter">
		<script type="text/javascript">
            function viewPop(K) {
                for (i = 1; i <= 5 ; i++){
                    document.getElementById('viewPopBox'+i).style.display='none';
                }
                document.getElementById('viewPopBox'+K).style.display='block';
            }
        </script>
        <!-- 확대보기 -->  
        <div class="prdPopBox" id="viewPopBox1" style="display:block;">
            <ul class="prdViewTab">
                <li><a href="javascript:viewPop(1);" class="on">확대보기</a></li>
                <li><a href="javascript:viewPop(2);">상품설명</a></li>
                <li><a href="javascript:viewPop(3);">배송|교환|반품</a></li>
                <li><a href="javascript:viewPop(4);">상품평<span class="tNum">(3)</span></a></li>
                <li><a href="javascript:viewPop(5);">상품 Q&amp;A <span class="tNum">(3)</span></a> </li>
            </ul>
            <div class="prdCtn">
                <div class="prdTit"> <span class="name">필립스 쿠치나 미니믹서기 HR723487/55</span> <strong class="price">35,000원</strong> <a href="#"><img src="/work/kbpoint/images/main/viewPopBtn1.gif" alt="상품상세가기" /></a> </div>
                <div class="zoomView">
                    <div class="popBigImg"><img src="/work/kbpoint/images/main/popBigImg.jpg" alt="제품" /></div>
                    <div class="thumList">
                        <ul>
                            <li><a href="javascript:;"><img src="/work/kbpoint/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                            <li><a href="javascript:;"><img src="/work/kbpoint/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                            <li><a href="javascript:;"><img src="/work/kbpoint/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                            <li><a href="javascript:;"><img src="/work/kbpoint/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                            <li><a href="javascript:;"><img src="/work/kbpoint/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                            <li><a href="javascript:;"><img src="/work/kbpoint/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                            <li><a href="javascript:;"><img src="/work/kbpoint/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                            <li><a href="javascript:;"><img src="/work/kbpoint/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                            <li><a href="javascript:;"><img src="/work/kbpoint/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                            <li><a href="javascript:;"><img src="/work/kbpoint/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        
        <!-- 상품설명 -->  
        <div class="prdPopBox" id="viewPopBox2">
				      
                <ul class="prdViewTab">
                    <li><a href="javascript:viewPop(1);">확대보기</a></li>
                    <li><a href="javascript:viewPop(2);" class="on">상품설명</a></li>
                    <li><a href="javascript:viewPop(3);">배송|교환|반품</a></li>
                    <li><a href="javascript:viewPop(4);">상품평<span class="tNum">(3)</span></a></li>
                    <li><a href="javascript:viewPop(5);">상품 Q&amp;A <span class="tNum">(3)</span></a> </li>
                </ul>
                <div class="prdCtn">
                	<?php include("../product/viewProductDetail.php"); ?>
                </div>
        </div>
        
        <!-- 배송 -->  
        <div class="prdPopBox" id="viewPopBox3">  
                <ul class="prdViewTab">
                    <li><a href="javascript:viewPop(1);">확대보기</a></li>
                    <li><a href="javascript:viewPop(2);">상품설명</a></li>
                    <li><a href="javascript:viewPop(3);" class="on">배송|교환|반품</a></li>
                    <li><a href="javascript:viewPop(4);">상품평<span class="tNum">(3)</span></a></li>
                    <li><a href="javascript:viewPop(5);">상품 Q&amp;A <span class="tNum">(3)</span></a> </li>
                </ul>
                <div class="prdCtn">
                	<?php include("../product/viewProductGuide.php"); ?>
                </div>
        </div>
        
        <!-- 상품평 -->  
        <div class="prdPopBox" id="viewPopBox4">      
                <ul class="prdViewTab">
                    <li><a href="javascript:viewPop(1);">확대보기</a></li>
                    <li><a href="javascript:viewPop(2);">상품설명</a></li>
                    <li><a href="javascript:viewPop(3);">배송|교환|반품</a></li>
                    <li><a href="javascript:viewPop(4);" class="on">상품평<span class="tNum">(3)</span></a></li>
                    <li><a href="javascript:viewPop(5);">상품 Q&amp;A <span class="tNum">(3)</span></a> </li>
                </ul>
                <div class="prdCtn">
                	<?php include("../product/viewProductAss.php"); ?>
                </div>
        </div>
        
        <!-- 상품QNA -->  
        <div class="prdPopBox" id="viewPopBox5">
				<!-- 상품설명 -->        
                <ul class="prdViewTab">
                    <li><a href="javascript:viewPop(1);">확대보기</a></li>
                    <li><a href="javascript:viewPop(2);">상품설명</a></li>
                    <li><a href="javascript:viewPop(3);">배송|교환|반품</a></li>
                    <li><a href="javascript:viewPop(4);">상품평<span class="tNum">(3)</span></a></li>
                    <li><a href="javascript:viewPop(5);" class="on">상품 Q&amp;A <span class="tNum">(3)</span></a> </li>
                </ul>
                <div class="prdCtn">
                	<?php include("../product/viewProductQna.php"); ?>
                </div>
        </div>
        
        
        
    </div>
</div>
<?php include("../include/foot.php"); ?>