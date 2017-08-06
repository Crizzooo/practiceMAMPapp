import React from 'react';
import store from '../store.js';

import { logThis } from '../reducers/filterReducer.js';
import FilterCard from '../components/FilterCard.jsx';


const LocationsFilters = (props) => (
    <ul>
      <li>
        <input
          type="checkbox"
          onClick={ () => store.dispatch(logThis('hi')) }></input>
        <span>Hi</span>
      </li>
    </ul>
);

const LocationsCard = (props) => (
  <div>
    <FilterCard
      headerName="Locations"
      headerColor="pink"
      filters={(<LocationsFilters/>)} />
  </div>
);

export default LocationsCard;


// <ul>
//   <li><input type="checkbox" onClick={ ()=>store.dispatch(logThis('hi'))}></input><span>Hi</span></li>
// </ul>
