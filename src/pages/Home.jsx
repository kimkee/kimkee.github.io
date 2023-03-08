import React, { useState, useEffect } from 'react';
import { Outlet, useParams, useNavigate } from 'react-router-dom';

import Header from '../components/Header.jsx';
import Project from '../components/Project.jsx';
import ProjectTop from '../components/ProjectTop.jsx';
import ProjectTxt from '../components/ProjectTxt.jsx';
import Skills from '../components/Skills.jsx';
import TopBts from '../components/TopBts.jsx';

import ui from '../ui.js';

export default function Home() {
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
    console.log(ui);
    fetchJson();  
  },[]);

  const renderTech = (pjt) => {  // 프로젝트 스킬 아이콘
    const  skcls = {
      "VUE": "icotech vue",
      "REACT": "icotech react",
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
  if(!data) return <div>로딩중...</div>;
  return (
    <>
      
      <Header update={data.update} assign={data.assign}></Header>
      <article className="visuals">
        <div className="inr">
          
          <Skills />
      
          <ProjectTop renderTech={renderTech} data={data} cate="puix" />
      
          <section className="profile">
            <div className="salestat">
              {
                data.opened === true
                ? <img src="./img/cm/forSale.png" className="img sale" alt="FORSALE" loading="lazy" />
                : <img src="./img/cm/soldOut.png" className="img sold" alt="SOLDOUT" loading="lazy" />
              }
            </div>
            <div className="box">
              <div className="photo"><img className="img" src="./img/cm/photo.jpg" alt="사진" loading="lazy" /></div>
              <div className="info">
                <div className="name">김기현</div>
                <div className="phone"><a href="tel:010-3236-1677">010-3236-1677</a></div>
                <div className="email">Kimkee@naver.com</div>
              </div>
            </div>
          </section>
          
          
          <ProjectTxt data={data} cate="puix" />
      
        </div>
      </article>

      <article className="notice"  style={ data.opened === true ? {"display": "block"} : {"display": "none"} }>
        <div className="box">
          <span className="msg">{data?.assign} 부터 프로젝트 <strong>투입</strong>가능합니다!</span>
          <button type="button" className="close"><span>닫기</span></button>
        </div>
      </article>
      <main className="container">
        <div className="inr">
        
        
          
          <Project renderTech={renderTech} data={data} cate="puix" title='UI/UX Development'/>

          <Project renderTech={renderTech} data={data} cate="pdeg" title='Web Design &amp; UI/UX Development'/>

          <Project renderTech={renderTech} data={data} cate="pfla" title='Flash ActionScript'/>
        
      
        </div>
      </main>

      <TopBts/>

      <Outlet renderTech={renderTech} />

      <footer className="footer">
        <div className="inr">김기현</div>
      </footer>

    </>
  );
}