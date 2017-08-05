import { createStore, applyMiddleware } from 'redux';
import mainReducer from './reducers';
import { createLogger } from 'redux-logger';
import { composeWithDevTools } from 'redux-devtools-extension';

const store = createStore(
  mainReducer,
  composeWithDevTools(
    applyMiddleware(
    createLogger({ collapsed: true })
  ))
);

module.exports = store;