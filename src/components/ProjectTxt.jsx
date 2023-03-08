
import React, { useEffect } from 'react';
import PerfectScrollbar from 'perfect-scrollbar';
import 'perfect-scrollbar/css/perfect-scrollbar.css';
export default  function ProjectTxt({data,cate}){
  useEffect(() => {
    const container = document.querySelector('#ut-scrolls');
    const ps = new
    PerfectScrollbar( container , {
      wheelSpeed: 2,
      wheelPropagation: false,
      minScrollbarLength: 20
    });
    ps.update();    
  },[]);
  return(

    <section className="rset">
      <div className="career">
        <div className="inr">
          <div className="ut-scrolls" id="ut-scrolls" >
            <ul className="list">
              { 
                data[cate].filter( pjt => pjt.hide !== true ).map( (pjt, idx) =>{
                  return (
                    <li key={idx}>
                      <div className="date"><i className="d">{ pjt.date }</i><i className="p">{ pjt.plce }</i></div>
                      <div className="name">{ pjt.tits }</div>
                    </li>
                  )
                })
              }
            </ul>
          </div>
        </div>
      </div>
    </section>
  )
}