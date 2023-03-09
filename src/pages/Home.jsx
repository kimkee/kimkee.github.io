import React, { useState, useEffect } from 'react';
import { Outlet } from 'react-router-dom'; // , useParams, useNavigate 

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
    fetch(process.env.REACT_APP_PUBLIC_URL+"js/data.json")
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
    return ()=>{
      // ui.lock.sct = ui.viewport.scrollTop();
    }
  },[]);


  if(!data) return <div>로딩중...</div>;
  return (
    <>
      
      <Header update={data.update} assign={data.assign}></Header>
      <article className="visuals">
        <div className="inr">
          
          <Skills />
      
          <ProjectTop data={data} cate="puix" />
      
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
      
      <Outlet />

      <main className="container">
        <div className="inr">
          
          <Project data={data} cate="puix" title='UI/UX Development'/>

          <Project data={data} cate="pdeg" title='Web Design &amp; UI/UX Development'/>

          <Project data={data} cate="pfla" title='Flash ActionScript'/>
      
        </div>
      </main>

      <TopBts/>

      <footer className="footer">
        <div className="inr">김기현</div>
      </footer>

    </>
  );
}