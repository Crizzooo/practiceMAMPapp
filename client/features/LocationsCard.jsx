import React from 'react';

import FilterCard from '../components/FilterCard.jsx';
import LocationsFilters from './LocationsFilters.jsx';


const LocationsCard = (props) => (
  <div>
    <FilterCard
      headerName="Locations"
      headerColor="pink"
      filters={(<LocationsFilters/>)} />
  </div>
);

export default LocationsCard;
