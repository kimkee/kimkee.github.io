
import React from "react";

export default  function TopBts(){
  const scrollEvent = ()=>{
    var scr = document.documentElement.scrollTop;
    if ( scr > 700) {
      document.querySelector(".topbts").classList.add('on');
    } else {
      document.querySelector(".topbts").classList.remove('on');
    }

  }
  window.addEventListener("scroll", scrollEvent);

  const goTop = (e)=>{
    console.log(e.target.classList.contains("down"));
    let toScr ;
    if( e.target.classList.contains("down") ) {
      toScr = document.documentElement.offsetHeight;
    }else{
      toScr = 0;
    }
    window.scrollTo(0,  toScr )
  }
  return(
    <nav className="topbts">
      <button type="button" onClick={goTop} className="bt up"><span>위로</span></button>
      <button type="button" onClick={goTop} className="bt down"><span>아래로</span></button>
    </nav>
  )
}