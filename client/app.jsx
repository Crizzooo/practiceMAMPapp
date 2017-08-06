import React from 'react';
import { Provider } from 'react-redux';

import store from './store.js';

import Header from './components/Header.jsx';
import LocationsCard from './features/LocationsCard.jsx';

import './stylesheets/appStyles.scss';
import './stylesheets/shadows.scss';

const App = (props) => (
  <Provider store={store}>
    <div className="appContainer">
      <Header />
      <div className="content container">
        <LocationsCard />
      </div>
    </div>
  </Provider>
);

export default App;
