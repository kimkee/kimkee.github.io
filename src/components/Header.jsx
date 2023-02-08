
import React from "react";
import GitHubButton from 'react-github-btn';

export default  function Header ({update}){
  return(
    <header className="header">
      <div className="inr">
        <div className="date">{update} </div>
        <span className="github">
          <GitHubButton href="https://github.com/kimkee" aria-label="Follow @kimkee on GitHub">Follow @kimkee</GitHubButton>
        </span>
      </div>
      <div id="barH"></div>
    </header>
  )
}