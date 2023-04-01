
import React from "react";
import GitHubButton from 'react-github-btn';

export default  function Header ({update}){
  const ver =  (process.env.REACT_APP_VER).slice(0,10)
  return(
    <header className="header">
      <div className="inr">
        <div className="date">
          {/* {update} */}
          Update - {ver}
        </div>
        <span className="github">
          <GitHubButton href="https://github.com/kimkee" aria-label="Follow @kimkee on GitHub">Follow @kimkee</GitHubButton>
        </span>
      </div>
      <div id="barH"></div>
    </header>
  )
}