const ticker = document.getElementById("ticker");
function getLocation() {
    // Get the user's location using geolocation
    return new Promise((resolve, reject) => {
        navigator.geolocation.getCurrentPosition(resolve, reject);
    });
}

function showTicker(locationName) {
    // Get the current date and time
    let now = new Date();
    let date = now.toLocaleDateString('vi-VN');
    let time = now.toLocaleTimeString();

    // Display the date, time, and location in the ticker
    ticker.innerHTML = date + " " + time + " | " + locationName;
    // Call the function again after 1 second to update the ticker
    setTimeout(function () {
        showTicker(locationName)
    }, 1000);
}

// Get the user's location using geolocation
export default function InitLocationTime() {
    getLocation()
        .then(position => {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
            // const apiKey = '';
            // // Use Google Maps Geocoding API to convert the latitude and longitude into a location name
            // const geocodingUrl = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${latitude},${longitude}&key=${apiKey}`;
            // fetch(geocodingUrl)
            //     .then(response => response.json())
            //     .then(data => {
            //         // Get the location name from the response
            //         let locationName = data.results[8].formatted_address;
            //         showTicker(locationName)
            //     })
            //     .catch(error => {
            //         console.log("Error fetching location data:", error);
            //     });

            const url = '/get-location-data';
            // Define the data to be sent in the request body
            const data = {
                lat: latitude,
                lng: longitude,
            };
            // Define the request options
            const options = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                body: JSON.stringify(data)
            };

            fetch(url, options)
                .then(response => response.json())
                .then(data => {
                    let locationName = data.results[8].formatted_address;
                    showTicker(locationName)
                })
                .catch(error => {
                    console.error('Error fetching location data:', error);
                });

        })
        .catch(error => {
            console.log("Error fetching location:", error);
        });
}



