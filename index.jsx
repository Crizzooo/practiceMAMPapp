import React from 'react';
import ReactDOM from 'react-dom';
import { Router, Route, browserHistory, IndexRoute } from 'react-router';

import App from './client/app';

ReactDOM.render(
  ( <Router history={browserHistory}>
        <Route path="/practiceMAMPapp" component={App}>
          <IndexRoute component={App} />
        </Route>
      </Router>),
  document.getElementById('app'));
