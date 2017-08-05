import React from 'react';
import store from '../store.js';

import { logThis } from '../reducers/filterReducer.js';

const FilterCard = (props) => (
  <div className="card shadow-bottom-1">
    <div className="header"
         style={{'backgroundColor': props.headerColor}}>
      <h1 className="">Fruits</h1>
    </div>
    <div className="filterContainer">
      <ul>
        <li><input type="checkbox" onClick={ ()=>store.dispatch(logThis('hi'))}></input><span>Hi</span></li>
      </ul>
    </div>
  </div>
);

export default FilterCard;
