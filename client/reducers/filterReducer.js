/* Action Types */
const LOG_THIS = 'LOG_THIS';

/* Action Creators */
export const logThis = (msg) => {
  return {
    type: LOG_THIS,
    msg: msg
  };
};

/* Initial State */
const initialState = {
  msg: ''
};

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
