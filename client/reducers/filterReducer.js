/* Action Types */
const LOG_THIS = 'LOG_THIS';
const CHANGE_GROUP = 'CHANGE_GROUP';

/* Action Creators */
export const logThis = (msg) => {
  return {
    type: LOG_THIS,
    msg: msg
  };
};

export const changeGroupBy = (newGroup) => {
  return {
    type: CHANGE_GROUP,
    newGroup
  }
};

/* Initial State */
const initialState = {
  regions: {
    "North America": {

    },
    "South America": {

    },
    "Europe": {

    },
    "Africa": {

    },
    "Asia": {

    },
    "Austrailia": {

    }
  },
  fruits: {
    classification: {
      "Tropical": {

      }
    }
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
    case LOG_THIS:
        console.log('hi');
        newState.msg = action.msg;

    default:
        return newState;
  }
};
