
import React from "react";

export default  function renderTech({pjt}){
	const  skcls = {
		"VUE": "icotech vue",
		"REACT": "icotech react",
		"HTML": "icotech html",
		"CSS": "icotech css",
		"SASS": "icotech css",
		"JS": "icotech js",
		"Mobile": "icotech mobile",
		"PC": "icotech pc",
		"Respond": "icotech mobile",
		"Design": "icotech design",
		"Flash": "icotech flash",
		"ActionScript": "icotech flash" ,
	};
	const result =  pjt.tech.map( (pjt, idx) => {
		// console.log(skcls[pjt]);
		skcls[pjt] === undefined && (skcls[pjt] = "icotech") ;
		return( <em key={idx} className={skcls[pjt]}>{pjt}</em> );
	});
	return result;
	
}