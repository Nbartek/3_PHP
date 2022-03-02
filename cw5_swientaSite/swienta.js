window.onload = tillXmas();

function snowBTN() {
        jQuery(document).ready(function () {
                jQuery(".snow").append('<a title="stop animation" style="cursor:pointer;font-size: 14px;text-transform:uppercase;padding: 3px 5px 3px 10px;position:absolute;color: #ffffff;bottom: 1%;border-radius:4px;left:1%;background: #03A9F4;z-index: 999999;text-align: center;" class="stop-snow">▌▌animation</a>');
                jQuery('.stop-snow').on('click', function () {
                        jQuery('.snow').removeClass('snow');
                        jQuery('.stop-snow').hide();
                });
        });
}
function tillXmas() {
        today = new Date();

        xmas = new Date("December 24, 2022");
        //if (xmas.getYear() <= today.getYear()) {
          //      xmas = new Date("24.12" + today.getYear() + 1 + "");
        //} else {
                msPerDay = 24 * 60 * 60 * 1000;
                timeLeft = (xmas.getTime() - today.getTime());


                e_daysLeft = timeLeft / msPerDay;
                daysLeft = Math.floor(e_daysLeft);
                e_hrsLeft = (e_daysLeft - daysLeft) * 24;
                hrsLeft = Math.floor(e_hrsLeft);
                e_minsLeft = (e_hrsLeft - hrsLeft) * 60;
                minsLeft = Math.floor(e_minsLeft);
                e_secsLeft = (e_minsLeft - minsLeft)*60;
                secsLeft = Math.floor(e_secsLeft);

                //console.log(xmas.getYear());
                document.querySelector("#timer").innerHTML = daysLeft+" dni "+hrsLeft+" godzin "+minsLeft+" minut "+secsLeft+" sekund";
       // }

}
setInterval(tillXmas,1000);