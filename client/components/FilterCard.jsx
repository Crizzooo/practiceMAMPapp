import React from 'react';
import store from '../store.js';

import { logThis } from '../reducers/filterReducer.js';

const FilterCard = (props) => (
  <div className="card filter shadow-bottom-1">
    <div className="header"
         style={{'backgroundColor': props.headerColor}}>
      <h1 className="">{ props.headerName }</h1>
    </div>
    <div className="filterContainer">
      { props.filters }
    </div>
  </div>
);

export default FilterCard;
