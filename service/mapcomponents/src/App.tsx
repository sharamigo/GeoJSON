import { useEffect, useState } from "react";
import "./App.css";
import { MlGeoJsonLayer } from "@mapcomponents/react-maplibre";
import { FeatureCollection } from '@turf/turf';

function App() {

  const [geoData, setData] = useState(null);
  const [tramData, setTramData] = useState(null);

  useEffect(() => {
    fetch('https://localhost:8001/api/airports/showAll')
      .then(response => response.json())
      .then(json => setData(json))
      .catch(error => console.error(error));
  }, []);

  useEffect(() => {
    fetch('https://localhost:8001/api/trammetro/showAll')
      .then(response => response.json())
      .then(json => setTramData(json))
      .catch(error => console.error(error));
  }, []);
  
  return (
    <>
      <MlGeoJsonLayer
         geojson={geoData as FeatureCollection}
       />

      <MlGeoJsonLayer
         geojson={tramData as FeatureCollection}
       />
      
         
     
    </>
  );
}

export default App;