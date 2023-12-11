// public/js/depo.js

document.addEventListener("DOMContentLoaded", function () {
    // İlleri dropdown'a ekle
    ilSecenekleriniDoldur();

    // İl seçildiğinde ilçeleri güncelle
    document.getElementById("il").addEventListener("change", function () {
        ilceSecenekleriniDoldur(this.value);
    });
});

function ilSecenekleriniDoldur() {
    axios.get('/get-iller')
        .then(function (response) {
            const ilSelect = document.getElementById("il");
            ilSelect.innerHTML = "<option value='' disabled selected>İl Seçiniz</option>";

            response.data.forEach(function (il) {
                const option = document.createElement("option");
                option.value = il;
                option.text = il;
                ilSelect.add(option);
            });
        })
        .catch(function (error) {
            console.error("İl bilgileri alınamadı: ", error);
        });
}

function ilceSecenekleriniDoldur(il) {
    if (!il) {
        // Eğer il seçilmemişse, ilçe seçeneklerini temizle
        const ilceSelect = document.getElementById("ilce");
        ilceSelect.innerHTML = "<option value='' disabled selected>İlçe Seçiniz</option>";
        return;
    }

    axios.get(`/get-ilceler/${il}`)
        .then(function (response) {
            const ilceSelect = document.getElementById("ilce");
            ilceSelect.innerHTML = "<option value='' disabled selected>İlçe Seçiniz</option>";

            response.data.forEach(function (ilce) {
                const option = document.createElement("option");
                option.value = ilce;
                option.text = ilce;
                ilceSelect.add(option);
            });
        })
        .catch(function (error) {
            console.error("İlçe bilgileri alınamadı: ", error);
        });
}
