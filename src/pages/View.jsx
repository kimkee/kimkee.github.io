import React, { useState, useEffect } from 'react';
import {useParams, useNavigate} from 'react-router-dom'; //,useOutletContext  

import Tech from '../components/Tech.jsx';

import ui from '../ui.js';

export default function View() {


  // const renderTech = (pjt) => {  // 프로젝트 스킬 아이콘
  //   const  skcls = {
  //     "VUE": "icotech vue",
  //     "REACT": "icotech react",
  //     "HTML": "icotech html",
  //     "CSS": "icotech css",
  //     "SASS": "icotech css",
  //     "JS": "icotech js",
  //     "Mobile": "icotech mobile",
  //     "PC": "icotech pc",
  //     "Respond": "icotech mobile",
  //     "Design": "icotech design",
  //     "Flash": "icotech flash",
  //     "ActionScript": "icotech flash" ,
  //   };
  //   const result =  pjt.tech.map( (pjt, idx) => {
  //     // console.log(skcls[pjt]);
  //     skcls[pjt] === undefined && (skcls[pjt] = "icotech") ;
  //     return( <em key={idx} className={skcls[pjt]}>{pjt}</em> );
  //   });
  //   return result;
  // };

  let params = useParams()
  let navigate = useNavigate();

  let cate = params.cate;
  let idx = params.id;
  const [data, setData] = useState();
  const fetchJson = () => {
    fetch("./js/data.json")
    .then(response => {
      return response.json();
    }).then(data => {
      setData(data);
      // console.log(data);
      console.log(data[cate][idx])
    }).catch((e) => {
      console.log(e.message);
    });
  }
  console.log(params);
  console.log(cate ,  idx);
  useEffect(() => {
    ui.lock.using(true);
    document.querySelector(".pop-works").classList.add("on");
    fetchJson();
    return ()=>{
      ui.lock.using(false);
    }
    // eslint-disable-next-line react-hooks/exhaustive-deps
  },[]);

  // if(!data) return <div>Loding....</div>
  return (
    <>
      
      <article className="pop-layer c pop-works">
        <div className="pbd">
          { data ?
          <>
          <div className="phd">
            <div className="inr">
              <h1 className="ptit">{data[cate][idx].tits}</h1>
              <button type="button" className="btn-pop-close"  onClick={ () => { navigate(-1) } }><i className="fa-regular fa-xmark"></i></button>
            </div>
          </div>
          <div className="pct">
            <main className="poptents">
              
              <div className="pbox">
                <div className="ss">
                  <div className="pic"><img className="img" src={data[cate][idx].imgs} alt={data[cate][idx].tits} /></div>
                </div>
                <div className="info">
                  <div className="pack">
                    <Tech pjt={data[cate][idx]}/>
                  </div>
                  <span className="place">{data[cate][idx].plce}</span>
                  <span className="date">{data[cate][idx].date}</span>
                </div>
              </div>
              
            </main>
          </div>
          </>
          :
          <div className="ui-loading-dot"><div className="bx"><em><i></i></em></div></div>
          }
        </div>
      </article>


    </>
  );
}


