//Prompt in form and ask for price until 0 is pressed
var calculate = document.querySelectorAll(".calculate");
var cost = [42, 42, 56, 69];
for (let i = 0; i < calculate.length; i++) {
    calculate[i].addEventListener("click", function showPrompt() {
        var message = prompt("Enter Coffee Bean ID(1-4)(0 to stop)\n1: Brazil Cerrado = RM42 \n2: Vanguard Blend = RM42 \n3: Organic Marcala = RM56 \n4: Taster Pack Trio = RM 69");
        var bill = 0;
        while (parseInt(message) !== 0) {
            if (message === null) {
                break;
            } else if (isNaN(Number(message))) {
                alert("Please enter a valid id");
            } else if (parseInt(message) < 1 || parseInt(message) > 4) {
                alert("Please enter a valid id");
            } else {
                bill += cost[parseInt(message) - 1];
            }
            message = prompt("Enter Coffee Bean ID(1-4)(0 to stop)\n1: Brazil Cerrado = RM42 \n2: Vanguard Blend = RM42 \n3: Organic Marcala = RM56 \n4: Taster Pack Trio = RM 69");
            if (message === "0") {
                break;
            }
        }
        if (message === null) {
            bill = 0;
        } else {
            alert("This is your bill:\nRM " + bill);
            bill = 0;
        }

    });
}


//the barista form

//Write codes for 3(a), 3(b), 3(c), 3(d)
var positions = [{ code: "ba", name: "Barista", scope: "Preparing and serving hot and cold drinks such as coffee, tea, artisan and speciality beverages." },
{ code: "ma", name: "Manager", scope: "Managing day-to-day operations of the cafe." },
{ code: "tr", name: "Trainee", scope: "Supporting daily operations of the cafe." }];

var i = 0;
document.write('<select id="position" class="form-control" name="position">');
while (i < positions.length) {
    document.write('<option value=' + positions[i].code + '>' + positions[i].name + '</option>');
    i++;
}
document.write('</select>');

var selectedJob = document.querySelector('#position');
var paragraph = document.querySelector('#jobScope');
var positions = [{ code: "ba", name: "Barista", scope: "Preparing and serving hot and cold drinks such as coffee, tea, artisan and speciality beverages." },
                        { code: "ma", name: "Manager", scope: "Managing day-to-day operations of the cafe." },
                        { code: "tr", name: "Trainee", scope: "Supporting daily operations of the cafe." }];

selectedJob.addEventListener('change', function(event){
    for (let index = 0; index < positions.length; index++) {
        if(positions[index].code === event.target.value){
            paragraph.textContent = positions[index].scope;
        }
        
    }

});


//////////////////class
class Movie{

    constructor(title, rating, hasWatched){
    this.title = title;
    this.rating = rating;
    this.hasWatched = hasWatched;
    }
    
        toString() {
            if (this.hasWatched) {
              return `You have watched "${this.title}" - ${this.rating} stars`;
            } else {
              return `You have not seen "${this.title}" - ${this.rating} stars`;
            }
          }
     }
    
     var movie1 = new Movie("In Bruges", 5, true);
     var movie2 = new Movie("Frozen", 4.5, false);
     var movie3 = new Movie("Mad Max Fury Road", 5, true);
     var movie4 = new Movie("Les Miserables", 3.5, false);
    
     var movies = [movie1, movie2, movie3, movie4];
    
    movies.forEach(element => {
        console.log(element.toString());
     });