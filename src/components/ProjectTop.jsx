
import React from "react";


// import Swiper core and required modules
import { Navigation, Pagination, Scrollbar, A11y } from 'swiper';

import { Swiper, SwiperSlide } from 'swiper/react';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';



export default  function Project({cate , renderTech}){
  
  return(

    <section className="mnslide">
      <div className="inr swiper-container" id="slides">
        <ul className="swiper-wrapper slides" id="data_psld">
            {
              cate?.map( (cate, idx) => {
                if(idx < 16 ) {console.log();}
                return (
                  <li key={idx} className="swiper-slide pbox">
                    <span className='lk' href="#none" data-url={ cate.urls }><img className="img" src={ cate.imgs } alt="SS" /></span>
                    <div className="info">
                      <div className="pack">{ cate && renderTech(cate) }</div>
                      <div className="date"><i className="d">{ cate.date }</i><i className="p">{ cate.plce }</i></div>
                      <div className="name">{ cate.tits }</div> <div className="screen"></div>
                    </div>
                  </li>
                )
                
              })
            }
        </ul>
        <div className="navi">
          <button type="button" className="nav prev">이전</button><button type="button" className="nav next">다음</button>
        </div>
      </div>
      <div className="pagi"></div>
    </section>
  )
}