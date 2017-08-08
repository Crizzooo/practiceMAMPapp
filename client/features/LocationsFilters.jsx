import React from 'react';
import { connect } from 'react-redux';
import R from 'ramda';

import store from '../store.js';
import { toggleCountry, toggleRegion, toggleAllRegions } from '../reducers/filterReducer';


class LocationsFilters extends React.Component{
    constructor(props) {
        super(props);
        this.createInputs = this.createInputs.bind(this);
        this.dispatchCountryToggle = this.dispatchCountryToggle.bind(this);
        this.dispatchRegionToggle = this.dispatchRegionToggle.bind(this);
        this.dispatchToggleAllRegions = this.dispatchToggleAllRegions;
    }

    dispatchCountryToggle(region, country) {
        store.dispatch(toggleCountry(region, country));
    }

    dispatchRegionToggle(region) {
        store.dispatch(toggleRegion(region));
    }

    dispatchToggleAllRegions() {
        store.dispatch(toggleAllRegions());
    }

    createInputs() {
        let inputs = [];
        // create a sublist for regions and countries based on the initial state object in the store.
        // NOTE: Redoing this, I would separate the selectedAll state to be maintained separately from where I am templating the countries
        R.forEachObjIndexed( (countries, regionName) => {
            if (regionName == 'selectedAll') return;

            let countryNodes = [];
            R.forEachObjIndexed( (countryObj, countryName) => {
                if (countryName == 'selectedAll') return;
                countryNodes.push(
                <li>
                   <input
                       type="checkbox"
                       checked={this.props.regions[regionName][countryName]}
                       onClick={ () => this.dispatchCountryToggle(regionName, countryName)}
                       ></input>
                   <span>{countryName}</span>
                </li>)
            }, countries);

            let regionNode = (
                <ul>
                    <li>
                        <input
                            type="checkbox"
                            checked={this.props.regions[regionName].selectedAll}
                            onClick={ () =>
                                this.dispatchRegionToggle(regionName)
                            }
                            ></input>
                        <span>Select All In {regionName}</span>
                        <ul>
                          {countryNodes}
                        </ul>
                    </li>
                </ul>
            )

            inputs.push(regionNode);

        }, this.props.regions );

        return inputs;
    }

    render() {
        return (
            <div>
              <input
                  type="checkbox" checked={this.props.regions.selectedAll}
                  onClick={this.dispatchToggleAllRegions}
                  ></input>
              <span>All Regions</span>
              {
                  // Create the <ul> <li> listing a Region and its countries
                  this.createInputs()
              }
          </div>
        );
    }
}

const mapStateToProps = (state) => {
    return {
        regions: state.filterReducer.regions
    };
};

export default connect(mapStateToProps)(LocationsFilters);
