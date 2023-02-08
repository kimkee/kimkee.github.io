
import React from "react";

export default  function Skills(){
  
  return(
    <section className="techs">
      <div className="title">Works List Page of Kim KeeHyun</div>
      <div className="skills">
        <span className="box">
          {/* <img className="browsers" src="./img/cm/icoBrowsers.png" alt="Cross Browsers" /> */}
          <img className="html5" src="./img/cm/icoHTML5.png" alt="HTML5" />
          <img className="css3" src="./img/cm/icoCSS3.png" alt="CSS3" />
          <img className="js" src="./img/cm/icoJS.png" alt="js" />
          <img className="vue" src="./img/cm/icoVue.png" alt="Vue" />
          <img className="react" src="./img/cm/icoReact.png" alt="React" />
          <img className="jquery" src="./img/cm/icoJquery.png" alt="jQuery" />
          <img className="sass" src="./img/cm/icoSass.png" alt="SASS" />
          <img className="less" src="./img/cm/icoLess.png" alt="LESS" />
          <br className="br" />
          <img className="gulp" src="./img/cm/icoGulp.png" alt="Gulp" />
          <img className="adobe" src="./img/cm/icoAdobe.png" alt="Adobe" />
          <img className="android" src="./img/cm/icoAndroid.png" alt="Android" />
          <img className="ios" src="./img/cm/icoIOS.png" alt="iOS" />
          <img className="w3c" src="./img/cm/icoW3c.png" alt="W3C" />
          <img className="xe" src="./img/cm/icoXe.png" alt="Xpress Engine" />
        </span>
        <span className="resp">
          <span className="txt">Responsive Web</span>
          <img className="responsive" src="./img/cm/icoResponsive.png" alt="Responsive Web" />
        </span>
      </div>
    </section>
  )
}