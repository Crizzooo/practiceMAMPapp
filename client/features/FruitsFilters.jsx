import React from 'react';
import { connect } from 'react-redux';
import R from 'ramda';

import store from '../store.js';
import { toggleFruit, toggleAllFruits } from '../reducers/filterReducer';


class FruitsFilters extends React.Component{
    constructor(props) {
        super(props);
        this.createInputs = this.createInputs.bind(this);
        this.dispatchFruitToggle = this.dispatchFruitToggle.bind(this);
        this.dispatchToggleAllFruits = this.dispatchToggleAllFruits;
    }

    dispatchFruitToggle(fruit) {
        store.dispatch(toggleFruit(fruit));
    }

    dispatchToggleAllFruits() {
        store.dispatch(toggleAllFruits());
    }

    createInputs() {
        let inputs = [];
        // create element for each fruit in mainReducer's original state, skipping the 'selectedAll' property
        // NOTE: Redoing this, I would separate the selectedAll state to be maintained separately from where I am templating the countries
        R.forEachObjIndexed( (isVisible, fruit) => {
            if (fruit == 'selectedAll') return;

            if (fruit == 'selectedAll') return;
            inputs.push(
            <li>
               <input
                   type="checkbox"
                   checked={this.props.fruits[fruit]}
                   onClick={ () => this.dispatchFruitToggle(fruit)}
                   ></input>
               <span>{fruit}</span>
            </li>);

        }, this.props.fruits );

        return inputs;
    }

    render() {
        return (
            <div>
              <input
                  type="checkbox" checked={this.props.fruits.selectedAll}
                  onClick={this.dispatchToggleAllFruits}
                  ></input>
              <span>All Regions</span>
              {
                  // Create the <li> elements for each fruit
                  this.createInputs()
              }
          </div>
        );
    }
}

const mapStateToProps = (state) => {
    return {
        fruits: state.filterReducer.fruits
    };
};

export default connect(mapStateToProps)(FruitsFilters);
