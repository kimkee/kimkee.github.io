import React from 'react';
// import { HashRouter,BrowserRouter, Routes, Route,Router , useLocation ,useHash,Switch } from 'react-router-dom';
import { HashRouter as Router, Routes, Route } from 'react-router-dom';
// import { TransitionGroup, CSSTransition } from "react-transition-group";


import Home from './pages/Home.jsx';
import View from './pages/View.jsx';
export default function App() {
  console.log("=="+process.env.REACT_APP_PUBLIC_URL+"=="+process.env.PUBLIC_URL+"==");
  return (
    <>
      <Router basename={process.env.REACT_APP_PUBLIC_URL}  >
        
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path=":cate" element={<Home />}>
            <Route path=":id" element={<View />} />
          </Route>
        </Routes>

      </Router>
    </>
  );
}