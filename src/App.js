import React, { useState, useEffect } from 'react';


import Header from './components/Header.jsx';
import Project from './components/Project.jsx';
import ProjectTop from './components/ProjectTop.jsx';
import Skills from './components/Skills.jsx';

function App() {
  const [data, setData] = useState();
  const fetchJson = () => {
    fetch("./js/data.json")
    .then(response => {
      return response.json();
    }).then(data => {
      setData(data);
      console.log(data);
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
      skcls[pjt] === undefined && (skcls[pjt] = "icotech") ;
      return( <em key={idx} className={skcls[pjt]}>{pjt}</em> );
    });
    return result;
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


  return (
    <>
      <Header update={data?.update} assign={data?.assign}></Header>
      <article className="visuals">
        <div className="inr">
          
          <Skills />
      
          <ProjectTop renderTech={renderTech} cate={data?.puix} />
      
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
          
          <Project renderTech={renderTech} cate={data?.puix} title='UI/UX Development'/>

          <Project renderTech={renderTech} cate={data?.pdeg} title='Web Design &amp; UI/UX Development'/>

          <Project renderTech={renderTech} cate={data?.pfla} title='Flash ActionScript'/>

      
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

export default App;
