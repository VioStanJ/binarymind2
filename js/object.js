var students = {
    "1":{
        "nom" : "Jhon",
        "prenom" : "snow",
        "slug" : "knownothing",
        "minidesc" : "king of the north",
        "descript":"King of the north  on the fucking coolest north",
        "tel":"7834346",
        "mail":"jhon@snow.north",
        "linkedin":"link/jhonsnow",
        "facebook":"faceboo/jhonsnow",
        "instagram":"instalife/jhonsnow",
        "twitter":"twitter/jsnow",
        "siteweb":"jhonsnow.com",
        "specialisation":"kill white walker",
        "bio":"born on south as king's son as eagon targaryan",
        "picfont":"http://www.premiere.fr/sites/default/files/styles/scale_crop_1280x720/public/2018-04/jon-snow_0.jpg",
        "p1":"",
        "p2":"",
        "p3":"",
        "p4":"",
    },
    "2":{
        "nom" : "Jane",
        "prenom" : "Doe",
        "slug" : "always on imitation",
        "minidesc" : "there for exemple",
        "descript":"King of web exemple template",
        "tel":"783434643",
        "mail":"jane@doe.north",
        "linkedin":"link/janeDoe",
        "facebook":"faceboo/janeDoe",
        "instagram":"instalife/janeDoe",
        "twitter":"twitter/janeDoe",
        "siteweb":"janeDoe.com",
        "specialisation":"skill to demonstration of exemple",
        "bio":"burn on collective imagination",
        "picfont":"img/jane.png",
        "p1":"",
        "p2":"",
        "p3":"",
        "p4":"",
    }
}

function studentSize() {
    var count = 0;

    for (var property in students) {
        if (Object.prototype.hasOwnProperty.call(students, property)) {
            count++;
        }
    }

    return count;
}
