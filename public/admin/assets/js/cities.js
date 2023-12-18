const { default: axios } = require("axios");

function populateCities() {
    try {
        var apiUrl = '/get-cities';
        axios.get(apiUrl)
            .then(function (response) {
                var citiesSelect = document.getElementById('cities');
                citiesSelect.innerHTML = '<option value="">İl Seçiniz</option>';
                response.data.forEach(function (city) {
                    var option = document.createElement('option');
                    option.value = city.id;
                    option.text = city.name;
                    citiesSelect.add(option);
                });
            })
            .catch(function (error) {
                console.error('Error fetching cities: ' + error);
            });
    } catch (e) {
        console.error('An error occurred in populateCities: ' + e.message);
    }
}

function getDistricts() {
    try {
        var cityId = document.getElementById('cities').value;
        if (cityId) {
            var apiUrl = '/get-districts/' + cityId;
            axios.get(apiUrl)
                .then(function (response) {
                    var districtsSelect = document.getElementById('districts');
                    districtsSelect.innerHTML = '<option value="">İlçe Seçiniz</option>';
                    response.data.forEach(function (district) {
                        var option = document.createElement('option');
                        option.value = district.id;
                        option.text = district.name;
                        districtsSelect.add(option);
                    });
                })
                .catch(function (error) {
                    console.error('Error fetching districts: ' + error);
                });
        }
    } catch (e) {
        console.error('An error occurred in getDistricts: ' + e.message);
    }
}

document.addEventListener('DOMContentLoaded', function () {
    populateCities();
});
