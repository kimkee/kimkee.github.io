
import React from "react";
import { Link } from 'react-router-dom';

export default  function Project({data , cate, title , renderTech}){
  
  // if(!data) return <div>로딩중....</div>
  return(
    <section className="mplist">
      <div className="hdts"><h3 className="title">{title}</h3></div>
      <div className="plists">
            {/* {console.log(cate)} */}
          <ul className="list ui">
            {
              
              data[cate].map( (pjt, idx) =>{
                // console.log(pjt , idx);
                return (<li key={idx}>
                  <div className="pbox">
                    {<div className="pack">{ pjt && renderTech(pjt) }</div>}
                    <div className="ss">
                      
                      <Link className='lk' to={""+cate+'/'+idx}  data-url={ pjt.urls }>
                        <img className="img" data-original={ pjt.imgs } src={ pjt.imgs } alt={ pjt.tits } loading="lazy" />
                      </Link>
                    </div>
                    <div className="name">{ pjt.tits }</div>
                    <div className="info">
                      <span className="date">{ pjt.date }</span> - <span className="place">{ pjt.plce }</span>
                    </div>
                  </div>
                </li>)
              })
            }
          </ul>
      </div>
    </section>
  )
}