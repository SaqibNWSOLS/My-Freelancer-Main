<template>
  <div>
 
    <gmpx-split-layout row-layout-min-width="100%">
      <div class="" slot="fixed">
        <div class="grid grid-cols-2">
          <div class="col-span-1">
             <input type="text" placeholder="Address" id="location-input" />
          </div>
        </div>
      
       
        <input type="text" placeholder="Apt, Suite, etc (optional)" />
        <input type="text" placeholder="City" id="locality-input" />
        <div class="half-input-container">
          <input type="text" class="half-input" placeholder="State/Province" id="administrative_area_level_1-input" />
          <input type="text" class="half-input" placeholder="Zip/Postal code" id="postal_code-input" />
        </div>
        <input type="text" placeholder="Country" id="country-input" />
      </div>
      <gmp-map slot="main" style="display:black">
      </gmp-map>
    </gmpx-split-layout>
  </div>
</template>

<script>
import { APILoader } from 'https://unpkg.com/@googlemaps/extended-component-library@0.6';

export default {
  name: 'AddressSelection',
  data() {
    return {
      mapsApiKey: 'AIzaSyDXGsx1M8NgD6v08sSROn2Wud8j-XKjK0U',
      SHORT_NAME_ADDRESS_COMPONENT_TYPES: new Set(['street_number', 'administrative_area_level_1', 'postal_code']),
      ADDRESS_COMPONENT_TYPES_IN_FORM: [
        'location',
        'locality',
        'administrative_area_level_1',
        'postal_code',
        'country',
      ],
    };
  },
  methods: {
    getFormInputElement(componentType) {
      return document.getElementById(`${componentType}-input`);
    },
    fillInAddress(place) {
      const getComponentName = (componentType) => {
        for (const component of place.address_components || []) {
          if (component.types[0] === componentType) {
            return this.SHORT_NAME_ADDRESS_COMPONENT_TYPES.has(componentType)
              ? component.short_name
              : component.long_name;
          }
        }
        return '';
      };

      const getComponentText = (componentType) => {
        return componentType === 'location'
          ? `${getComponentName('street_number')} ${getComponentName('route')}`
          : getComponentName(componentType);
      };

      for (const componentType of this.ADDRESS_COMPONENT_TYPES_IN_FORM) {
        this.getFormInputElement(componentType).value = getComponentText(componentType);
      }
    },
    renderAddress(place) {
      const mapEl = this.$el.querySelector('gmp-map');
      const markerEl = this.$el.querySelector('gmp-advanced-marker');

     
    },
    async initMap() {
      try {
        const { Autocomplete } = await APILoader.importLibrary('places');

        const mapOptions = {
          center: { lat: 37.4221, lng: -122.0841 },
          zoom: 15,
        };

        await customElements.whenDefined('gmp-map');
        const mapElement = this.$el.querySelector('gmp-map');
        mapElement.innerMap.setOptions(mapOptions);

        const autocomplete = new Autocomplete(this.getFormInputElement('location'), {
          fields: ['address_components', 'geometry', 'name'],
          types: ['address'],
        });

        autocomplete.addListener('place_changed', () => {
          const place = autocomplete.getPlace();
          if (!place.geometry) {
            window.alert(`No details available for input: '${place.name}'`);
            return;
          }
          this.renderAddress(place);
          this.fillInAddress(place);
        });
      } catch (error) {
        console.error('Error initializing the map:', error);
        window.alert('Failed to initialize the map. Please check the console for more details.');
      }
    },
  },
  mounted() {
    this.initMap();
  },
};
</script>

<style scoped>
body {
  margin: 0;
}

.sb-title {
  position: relative;
  top: -12px;
  font-family: Roboto, sans-serif;
  font-weight: 500;
}

.sb-title-icon {
  position: relative;
  top: -5px;
}

gmpx-split-layout {
  height: 500px;
  width: 100%;
}

gmpx-split-layout:not(:defined) {
  visibility: hidden;
}

.panel {
  background: white;
  box-sizing: border-box;
  height: 100%;
  width: 100%;
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

.half-input-container {
  display: flex;
  justify-content: space-between;
}

.half-input {
  max-width: 120px;
}

h2 {
  margin: 0;
  font-family: Roboto, sans-serif;
}

input {
  height: 30px;
}

input {
  border: 0;
  border-bottom: 1px solid black;
  font-size: 14px;
  font-family: Roboto, sans-serif;
  font-style: normal;
  font-weight: normal;
}

input:focus::placeholder {
  color: white;
}
</style>
