import React, { useState, useEffect } from 'react';

import GitHubButton from 'react-github-btn';
// import data from './js/data.json';




function App() {
  const [data, setData] = useState();
  const fetchJson = () => {
    fetch("./js/data.json")
    .then(response => {
      return response.json();
    }).then(data => {
      setData(data);
      console.log(data.update);
    }).catch((e) => {
      console.log(e.message);
    });
  }

  useEffect(() => {
    fetchJson();

    
  },[]);

	const renderTech = (pjt) => {  // 프로젝트 스킬 아이콘
		const  skcls = {
			"HTML": "icotech html",
			"CSS": "icotech css",
			"SASS": "icotech css",
			"JS": "icotech js",
			"Mobile": "icotech mobile",
			"PC": "icotech pc",
			"Respond": "icotech mobile",
			"Design": "icotech design",
			"Flash": "icotech flash",
			"ActionScript": "icotech flash" ,
		};
		const result =  pjt.tech.map( (pjt, idx) => {
			// console.log(skcls[pjt]);
			// skcls[pjt] == undefined ? skcls[pjt] = "icotech" : null;
			return( <em key={idx} className={skcls[pjt]}>{pjt}</em> );
		});
		return result;
	};

	const renderPsld = () => { // 상단 슬라이드
		const result = data.puix.map( (pjt, idx) => {
      if(idx < 16 ) {console.log();}
      return (
        <li key={idx} className="swiper-slide pbox">
          <a href="#none" data-url={ pjt.urls }><img className="img" src={ pjt.imgs } alt="SS" /></a>
          <div className="info">
            <div className="pack">{ renderTech(pjt) }</div>
            <div className="date"><i className="d">{ pjt.date }</i><i className="p">{ pjt.plce }</i></div>
            <div className="name">{ pjt.tits }</div> <div className="screen"></div>
          </div>
        </li>
      )
			
		});
		return result ;
	};


	const renderPtxt = () => {  //  프로젝트 리스트 스크롤 영역
		const result = data.puix.map( (pjt, idx) => {
			return (
				<li key={idx}>
					<div className="date"><i className="d">{ pjt.date }</i><i className="p">{ pjt.plce }</i></div>
					<div className="name">{ pjt.tits }</div>
				</li>
			)
		});
		return result ;
	};
	const renderPlist = (pwork) => { // 프로젝트 리스트 uix,deg,fla
		// console.log(wdata[pwork]);
		const result = data[pwork].map( (cate, idx) => {
			return (
				<li key={idx}>
					<div className="pbox">
						{<div className="pack">{ data && renderTech(cate) }</div>}
						<div className="ss"><a href="#none" data-url={ cate.urls }><img className="img" data-original={ cate.imgs } src={ cate.imgs } alt="SS" loading="lazy" /></a></div>
						<div className="name">{ cate.tits }</div>
						<div className="info">
							<span className="date">{ cate.date }</span> - <span className="place">{ cate.plce }</span>
						</div>
					</div>
				</li>
			)
		});
		return result ;
	};



  return (
    <>
      <Header update={data?.update} assign={data?.assign}></Header>
      <article className="visuals">
				<div className="inr">
					
					<Skills />
			
					<section className="mnslide">
						<div className="inr swiper-container" id="slides">
							<ul className="swiper-wrapper slides" id="data_psld">{data && renderPsld()}</ul>
							<div className="navi">
								<button type="button" className="nav prev">이전</button><button type="button" className="nav next">다음</button>
							</div>
						</div>
						<div className="pagi"></div>
					</section>
			
					<section className="profile">
						<div className="salestat">
							{
								data?.opened === true
								? <img src="./img/cm/forSale.png" className="img sale" alt="QQQ FORSALE" />
								: <img src="./img/cm/soldOut.png" className="img sold" alt="QQQ SOLDOUT" />
							}
						</div>
						<div className="box">
              <div className="photo"><img className="img" src="./img/cm/photo.jpg" alt="사진" /></div>
							<div className="info">
								<div className="name">김기현</div>
								<div className="phone"><a href="tel:010-3236-1677">010-3236-1677</a></div>
								<div className="email">Kimkee@naver.com</div>
							</div>
						</div>
					</section>
					
					<section className="rset">
						<div className="career">
							<div className="inr">
								<div className="ut-scrolls">
									<ul className="list">{ data && renderPtxt()}</ul>
								</div>
							</div>
						</div>
					</section>
			
				</div>
			</article>

      <article className="notice"  style={ data?.opened === true ? {"display": "block"} : {"display": "none"} }>
				<div className="box">
					<span className="msg">{data?.assign} 부터 프로젝트 <strong>투입</strong>가능합니다!</span>
					<button type="button" className="close"><span>닫기</span></button>
				</div>
			</article>

			<main className="container">
				<div className="inr">
					
					<section className="mplist">
						<div className="hdts"><h3 className="title">UI/UX Development</h3></div>
						<div className="plists">
							<ul className="list ui">{data && renderPlist("puix")}</ul>
						</div>
					</section>
			
					<section className="mplist">
						<div className="hdts"><h3 className="title">Web Design &amp; UI/UX Development</h3></div>
						<div className="plists">
							<ul className="list dg">{data && renderPlist("pdeg")}</ul>
						</div>
					</section>
					
					<section className="mplist">
						<div className="hdts"><h3 className="title">Flash ActionScript</h3></div>
						<div className="plists">
							<ul className="list fa">{data && renderPlist("pfla")}</ul>
						</div>
					</section>
			
				</div>
			</main>

			<nav className="topbts">
				<button type="button" className="bt up"><span>위로</span></button>
				<button type="button" className="bt down"><span>아래로</span></button>
			</nav>
			<footer className="footer">
				<div className="inr">김기현</div>
			</footer>

    </>
  );
}


function Header ({update,assign}){
  
  console.log(update, assign);
  

  
  return(
		<header className="header">
			<div className="inr">
				<div className="date">{update} </div>
				<span className="github">
          <GitHubButton href="https://github.com/kimkee" aria-label="Follow @kimkee on GitHub">Follow @kimkee</GitHubButton>
				</span>
			</div>
			<div id="barH"></div>
		</header>
	)
}
function Skills(){
	return(
		<section className="techs">
			<div className="title">Works List Page of Kim KeeHyun</div>
			<div className="skills">
				<span className="box">
					{/* <img className="browsers" src="./img/cm/icoBrowsers.png" alt="Cross Browsers" /> */}
					<img className="html5" src="./img/cm/icoHTML5.png" alt="HTML5" />
					<img className="css3" src="./img/cm/icoCSS3.png" alt="CSS3" />
					<img className="js" src="./img/cm/icoJS.png" alt="js" />
					<img className="js" src="./img/cm/icoVue.png" alt="Vue" />
					<img className="js" src="./img/cm/icoReact.png" alt="React" />
					<img className="jquery" src="./img/cm/icoJquery.png" alt="jQuery" />
					<img className="sass" src="./img/cm/icoSass.png" alt="SASS" />
					<img className="less" src="./img/cm/icoLess.png" alt="LESS" />
					<br className="br" />
					<img className="gulp" src="./img/cm/icoGulp.png" alt="Gulp" />
					<img className="adobe" src="./img/cm/icoAdobe.png" alt="Adobe" />
					<img className="android" src="./img/cm/icoAndroid.png" alt="Android" />
					<img className="ios" src="./img/cm/icoIOS.png" alt="iOS" />
					<img className="w3c" src="./img/cm/icoW3c.png" alt="W3C" />
					<img className="xe" src="./img/cm/icoXe.png" alt="Xpress Engine" />
				</span>
				<span className="resp">
					<span className="txt">Responsive Web</span>
					<img className="responsive" src="./img/cm/icoResponsive.png" alt="Responsive Web" />
				</span>
			</div>
		</section>
	)
}
export default App;
