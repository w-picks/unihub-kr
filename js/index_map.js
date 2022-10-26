window.initMap = function () {
  const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 37.4857, lng: 127.033 },
    zoom: 16,
  });
  //37.4857 / 127.033

  const marker = new google.maps.Marker({
    position: { lat: 37.4857, lng: 127.033 },
    // label: "아이디어허브(주)",
    map: map,
  });
};
