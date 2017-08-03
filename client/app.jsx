import React from 'react';

import Header from './components/Header.jsx';
import FilterCard from './components/FilterCard.jsx';

import './stylesheets/appStyles.scss';
import './stylesheets/shadows.scss';

const App = (props) => (
  <div className="appContainer">
    <Header />
    <div className="content container">
      <FilterCard />
    </div>
  </div>
);

export default App;
