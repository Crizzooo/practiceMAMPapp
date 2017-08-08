import React from 'react';

import FilterCard from '../components/FilterCard.jsx';
import FruitsFilters from './FruitsFilters.jsx';


const FruitsCard = (props) => (
  <div>
    <FilterCard
      headerName="Fruits"
      headerColor="red"
      filters={(<FruitsFilters/>)} />
  </div>
);

export default FruitsCard;
