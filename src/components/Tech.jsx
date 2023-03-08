
export default  function renderTech({pjt}){

	const skcls = {
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
	return pjt.tech.map( (pjt, idx) => <em key={idx} className={`icotech ${skcls[pjt] || ''}`}>{pjt}</em> );
	
}