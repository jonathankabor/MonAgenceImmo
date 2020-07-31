import L from 'leaflet'
import 'leaflet/dist/leaflet.css'

export default class Map {

    static init () {
        let map = document.querySelector('#map')
        if (map === null) {
            return
        }
        let icon = L.icon({
            iconUrl: '/images/marker.png',
        })
        let center = [map.dataset.lat, map.dataset.lng]
        map = L.map('map').setView(center, 13)
        let token = 'pk.eyJ1IjoiZ3JhZmlrYXJ0IiwiYSI6ImNqaHoxancyOTBxNXkzcW10MHI3NXZrNjkifQ.yWqQe1qK_RtMA2Z4qABvmg'
        L.tileLayer(`https://api.mapbox.com/v4/mapbox.streets/{z}/{x}/{y}.png?access_token=${token}`, {
            maxZoom: 20,
            minZoom: 8,
            attribution: '© <a href="https://www.mapbox.com/feedback/">Mapbox</a> © <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map)
        L.marker(center, {icon: icon}).addTo(map)
    }

}