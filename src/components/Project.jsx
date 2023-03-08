import React from "react";
import { Link } from 'react-router-dom';

import Tech from '../components/Tech.jsx';

export default  function Project({data , cate, title }){
  
  // if(!data) return <div>로딩중....</div>
  return(
    <section className="mplist">
      <div className="hdts"><h3 className="title">{title}</h3></div>
      <div className="plists">
          <ul className="list ui">
            {
              data[cate].filter( pjt => pjt.hide !== true ).map( (pjt, idx) =>{
                // console.log(pjt.hide , idx);
                return (<li key={idx}>
                  <Link to={""+cate+'/'+idx}  data-url={ pjt.urls } className="pbox">
                    {<div className="pack">{ <Tech pjt={pjt}/>  }</div>}
                    <div className="ss">
                      <span className='lk'>
                        <img className="img" data-original={ pjt.imgs } src={ pjt.imgs } alt={ pjt.tits } loading="lazy" />
                      </span>
                    </div>
                    <div className="name">{ pjt.tits }</div>
                    <div className="info">
                      <span className="date">{ pjt.date }</span> - <span className="place">{ pjt.plce }</span>
                    </div>
                  </Link>
                </li>)
              })
            }
          </ul>
      </div>
    </section>
  )
}