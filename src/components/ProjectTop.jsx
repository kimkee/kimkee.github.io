
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


      <div className="inr" id="slides">
        
        <Swiper className="swiper-wrapper slides" 
          // install Swiper modules
          modules={[Navigation, Pagination, Scrollbar, A11y]}
          spaceBetween={0}
          slidesPerView={1}
          navigation
          loop={{loop:true}}
          wrapperTag="ul"
          pagination={{ clickable: true }}
          // scrollbar={{ draggable: true }}
          onSwiper={(swiper) => console.log(swiper)}
          onSlideChange={() => console.log('slide change')}   >
            {
              cate?.filter( (item, i) => i < 10 ).map( (pjt, idx) => {
                  return (
                    <SwiperSlide tag="li" key={idx}  className="swiper-slide pbox">
                      <span className='lk' href="#none" data-url={ pjt.urls }><img className="img" src={ pjt.imgs } alt="SS" /></span>
                      <div className="info">
                        <div className="pack">{ pjt && renderTech(pjt) }</div>
                        <div className="date"><i className="d">{ pjt.date }</i><i className="p">{ pjt.plce }</i></div>
                        <div className="name">{ pjt.tits }</div> <div className="screen"></div>
                      </div>
                    </SwiperSlide>
                  )
              })
            }
        </Swiper>
        
        {/* <div className="navi">
          <button type="button" className="nav prev">이전</button><button type="button" className="nav next">다음</button>
        </div> */}
      </div>
      {/* <div className="pagi"></div> */}
    </section>
  )
}