import R from 'ramda';

/* Action Types */
const CHANGE_GROUP = 'CHANGE_GROUP';
const TOGGLE_COUNTRY = 'TOGGLE_COUNTRY';
const TOGGLE_REGION = 'TOGGLE_REGION';
const TOGGLE_ALL_REGIONS = 'TOGGLE_ALL_REGIONS';
const TOGGLE_FRUIT = 'TOGGLE_FRUIT';
const TOGGLE_ALL_FRUITS = 'TOGGLE_ALL_FRUITS';

/* Action Creators */
export const changeGroupBy = (newGroup) => {
  return {
    type: CHANGE_GROUP,
    newGroup
  }
};

export const toggleCountry = (region, country) => {
  return {
    type: TOGGLE_COUNTRY,
    region,
    country
  }
}

export const toggleRegion = (region) => {
  return {
    type: TOGGLE_REGION,
    region
  };
}

//TODO: Update these to take a specific value. Then after turning 'Select All' true, have any calls to toggle fruits / countries send a false value to 'toggleAll' unless all fruits / countries are true
export const toggleAllRegions = () => {
  return {
    type: TOGGLE_ALL_REGIONS
  };
}

export const toggleFruit = (fruit) => {
  return {
    type: TOGGLE_FRUIT,
    fruit
  }
}

//TODO: Update these to take a specific value. Then after turning 'Select All' true, have any calls to toggle fruits / countries send a false value to 'toggleAll' unless all fruits / countries are true
export const toggleAllFruits = () => {
  return {
    type: TOGGLE_ALL_FRUITS
  }
}

/* Initial State */
const initialState = {
  regions: {
    "North America": {
      "USA": false,
      "Canada": false,
      "Mexico": false,
      selectedAll: false
    },
    "South America": {
      "Chile": false,
      "Mexico": false,
      "Chile": false,
      "Columbia": false,
      selectedAll: false
    },
    "Europe": {
      "Belgium": false,
      "Germany": false,
      "Italy": false,
      selectedAll: false
    },
    "Africa": {
      "Liberia": false,
      "Cote D'Ivoire": false,
      "South Africa": false,
      selectedAll: false
    },
    "Asia": {
      "China": false,
      "Japan": false,
      "Thailand": false,
      selectedAll: false
    },
    "Austrailia": {
      "Austrailia": false,
      selectedAll: false
    },
    selectedAll: false
  },
  fruits: {
    "Blueberries": false,
    "Cranberries": false,
    "Grapes": false,
    "Raspberries": false,
    "Pineapples": false,
    "Watermelons": false,
    "Oranges": false,
    "Lemons": false,
    "Apples": false,
    "Plums": false,
    "Melons": false,
    "selectedAll": false
  },
  displayBy: {
    currentDisplay: 'Country'
  }
};

//NOT SURE HOW TO STRUCTURE THIS BY MONTHS?
// i.e if they click Strawberry name, and Month of June, and Classifcation 'Tropical', should that be all fruits with a name of strawberry, month of june, and classification OR all fruits with either a name of Strawberry, OR classification of tropical and month of june

// Strategy
//   Regions & Countries -
//        Regions in the UL will be used to check and uncheck all //        countries of that region. The user can then refine the //        checked countries, which will be used in the where    //        clause.  The regions table on the backend is used for //        grouping.


// Build Query
// WHERE (Regions.name == ) && (Fruits.)
/* Reducer Function */
export default (state = initialState, action) => {
  let newState = Object.assign({}, state);
  switch (action.type) {

    case TOGGLE_COUNTRY:
        newState.regions = Object.assign({}, state.regions);
        newState.regions[action.region][action.country] = !newState.regions[action.region][action.country];
        // If region all selected is true, turn it off
        if (newState.regions[action.region].selectedAll) {
          newState.regions[action.region].selectedAll = false;
        }
        return newState;

    case TOGGLE_REGION:
        newState.regions = Object.assign({}, state.regions);
        newState.regions[action.region].selectedAll = !newState.regions[action.region].selectedAll;
        R.forEachObjIndexed( (countryVal, countryName) => {
          newState.regions[action.region][countryName] = newState.regions[action.region].selectedAll;
        }, newState.regions[action.region]);
        // If region all selected is true, turn it off
        return newState;

    case TOGGLE_ALL_REGIONS:
        newState.regions = Object.assign({}, state.regions);
        console.log('old truth: ', newState.regions.selectedAll);
        let newVal = !newState.regions.selectedAll;
        newState.regions.selectedAll = !newState.regions.selectedAll;
        R.forEachObjIndexed( (regionObj, regionName) => {
          if (regionName == 'selectedAll') return;

          console.log('region obj: ', regionObj);
          regionObj.selectedAll = newVal;
        }, newState.regions);
        return newState;

    case TOGGLE_FRUIT:
        newState.fruits = Object.assign({}, state.fruits);
        newState.fruits[action.fruit] = !newState.fruits[action.fruit];
        return newState;

    case TOGGLE_ALL_FRUITS:
        newState.fruits = Object.assign({}, state.fruits);
        newState.fruits.selectedAll = !newState.fruits.selectedAll;
        R.forEachObjIndexed( (fruitVal, fruitName) => {
          newState.fruits[fruitName] = newState.fruits.selectedAll;
        }, newState.fruits);
        return newState;

    default:
        return newState;
  }

  // Write curried function to 'toggleAll' properties in each category of state and reduce redundancies in this reducer
  // TODO: improve 'Toggle All' UX
};
