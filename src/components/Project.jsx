
import React from "react";

export default  function Project({cate , title , renderTech}){
  
  return(
    <section className="mplist">
      <div className="hdts"><h3 className="title">{title}</h3></div>
      <div className="plists">
          <ul className="list ui">
            {
              cate?.map( (cate, idx) =>{
                return (<li key={idx}>
                  <div className="pbox">
                    {<div className="pack">{ cate && renderTech(cate) }</div>}
                    <div className="ss"><span className='lk' data-url={ cate.urls }><img className="img" data-original={ cate.imgs } src={ cate.imgs } alt="SS" loading="lazy" /></span></div>
                    <div className="name">{ cate.tits }</div>
                    <div className="info">
                      <span className="date">{ cate.date }</span> - <span className="place">{ cate.plce }</span>
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