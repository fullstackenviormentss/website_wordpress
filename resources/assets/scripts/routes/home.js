import AOS from 'aos'

export default {
  init() {
    const os = navigator;

    AOS.init()

    $('#downloadModal').on('show.bs.modal', function () {
      $('#download')[0].click();
    })
    if (os.platform === "Win32") {
        $("#download, #downloadstepmob, #downloadstep").attr("href", "https://github.com/ridereceipts/ridereceipts/releases/download/v1.3.0/Ride.Receipts.Setup.1.3.0.exe")
    } else if (os.platform === "MacIntel") {
      $("#download, #downloadstepmob, #downloadstep").attr("href", "https://github.com/ridereceipts/ridereceipts/releases/download/v1.3.0/Ride.Receipts-1.3.0-mac.zip")
    } else {
      $("#download, #downloadstepmob, #downloadstep").attr("href", "https://github.com/ridereceipts/ridereceipts/releases/download/v1.3.0/ridereceipts-1.3.0-x86_64.AppImage")
    }
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
