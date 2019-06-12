var students = {
    "1":{
        "nom" : "Jhon",
        "prenom" : "Doe",
        "slug" : "jhondoe",
        "minidesc" : "Lorem Ipsum Dolor Lorem Ipsum Dolor Ipsum",
        "descript":"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus necessitatibus quia, quas excepturi consequatur nemo error magnam et. Voluptatem blanditiis nulla autem reiciendis eaque nostrum ad amet laborum! Neque, soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, natus deserunt laborum ab dolor aliquid officia aut omnis ut accusantium consequuntur tempore commodi obcaecati rerum tempora atque accusamus error officiis.",
        "tel":"898888",
        "mail":"jhon@doe.exe",
        "linkedin":"link/jhondoe",
        "facebook":"facebook/jhondoe",
        "instagram":"instalife/jhondoe",
        "twitter":"twitter/jhondado",
        "siteweb":"jhondoe.com",
        "specialisation":"Network",
        "bio":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptas consectetur, alias blanditiis eum quos, quibusdam, delectus accusantium sapiente iure perferendis beatae excepturi dolor? Deserunt vel ratione voluptates ut officiis.",
        "picfront":"img/john.png",
        "p1":"",
        "p2":"",
        "p3":"",
        "p4":"",
    },
    "2":{
        "nom" : "Jhon",
        "prenom" : "snow",
        "slug" : "knownothing",
        "minidesc" : "king of the north",
        "descript":"King of the north  on the fucking coolest north",
        "tel":"7834346",
        "mail":"jhon@snow.north",
        "linkedin":"link/jhonsnow",
        "facebook":"",
        "instagram":"instalife/jhonsnow",
        "twitter":"twitter/jsnow",
        "siteweb":"jhonsnow.com",
        "specialisation":"kill white walker",
        "bio":"born on south as king's son as eagon targaryan",
        "picfront":"img/snow.png",
        "p1":"",
        "p2":"",
        "p3":"",
        "p4":"",
    },
    "3":{
        "nom" : "Jane",
        "prenom" : "Doe",
        "slug" : "always on imitation",
        "minidesc" : "there for exemple",
        "descript":"King of web exemple template",
        "tel":"",
        "mail":"",
        "linkedin":"link/janeDoe",
        "facebook":"faceboo/janeDoe",
        "instagram":"instalife/janeDoe",
        "twitter":"twitter/janeDoe",
        "siteweb":"janeDoe.com",
        "specialisation":"skill to demonstration of exemple",
        "bio":"burn on collective imagination",
        "picfront":"img/jane.png",
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
