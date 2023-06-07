// import React from "react";
import { Link } from 'react-router-dom';

import Tech from '@/components/Tech.jsx';

// import Swiper core and required modules
import { Navigation, Pagination, Scrollbar, A11y } from 'swiper';
import { Swiper, SwiperSlide } from 'swiper/react';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

export default  function ProjectTop({data, cate }){
  
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
          initialSlide={ Math.floor( Math.random() * 10 ) }
          onSwiper={(swiper) => console.log()}
          onSlideChange={() => { /* console.log('slide change') */}  }   >
            {
              data[cate].filter( (pjt, i) => pjt.hide !== true ).filter( (pjt, i) => i < 10 ).map( (pjt, idx) => {
                  return (
                    <SwiperSlide tag="li" key={idx}  className="swiper-slide">
                      <Link className="pbox" to={""+cate+'/'+idx}  data-url={ pjt.urls }>
                        <span className='lk' to={""+cate+'/'+idx}  data-url={ pjt.urls }>
                          <img className="img" src={ import.meta.env.VITE_REACT_APP_PUBLIC_URL+pjt.imgs } alt={pjt.tits} loading="lazy" />
                        </span>
                        <div className="info">
                          <div className="pack">{ <Tech pjt={pjt}/> }</div>
                          <div className="date"><i className="d">{ pjt.date }</i><i className="p">{ pjt.plce }</i></div>
                          <div className="name">{ pjt.tits }</div> <div className="screen"></div>
                        </div>
                      </Link>
                    </SwiperSlide>
                  )
              })
            }
        </Swiper>

      </div>

    </section>
  )
}