import React, { useState, useEffect } from 'react';
import {useParams, useNavigate} from 'react-router-dom'; //,useOutletContext  

import Tech from '../components/Tech.jsx';

import ui from '../ui.js';

export default function View() {

  let params = useParams()
  let navigate = useNavigate();

  let cate = params.cate;
  let idx = params.id;
  const [data, setData] = useState();
  const fetchJson = () => {
    fetch(import.meta.env.VITE_REACT_APP_PUBLIC_URL +"js/data.json")
    .then(response => {
      return response.json();
    }).then(data => {      
      setData(
        // hide가 true 면 제거
        data[cate].filter( pjt => pjt.hide !== true )
      );      
      // console.log(data[idx])
    }).catch((e) => {
      console.log(e.message);
    });
  }
  // console.log(params);
  // console.log(cate ,  idx);
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
              <h1 className="ptit">{data[idx].tits}</h1>
              <button type="button" className="btn-pop-close"  onClick={ () => { navigate(-1) } }><i className="fa-regular fa-xmark"></i></button>
            </div>
          </div>
          <div className="pct">
            <main className="poptents">
              
              <div className="pbox">
                <div className="ss">
                  <div className="pic"><img className="img" src={ import.meta.env.VITE_REACT_APP_PUBLIC_URL + data[idx].imgs} alt={data[idx].tits} /></div>
                </div>
                <div className="info">
                  <div className="pack">
                    <Tech pjt={data[idx]}/>
                  </div>
                  <span className="place">{data[idx].plce}</span>
                  <span className="date">{data[idx].date}</span>
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


