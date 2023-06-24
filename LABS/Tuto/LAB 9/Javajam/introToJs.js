//Q1

//while loop
console.log("while loop")
var i = 10;
 while(i<40){
    if(i % 2 != 0){
        console.log(i)
    }
    i++;
 }
 console.log("---------------------------------------------------")
 console.log("for loop")
 //for loop
 for (var j = 10; j < 40; j++){
    if(j % 2!= 0){
        console.log(j)
    }
 }

 
 console.log("---------------------------------------------------")
 console.log("q2")
 //q2
 var array = [1,2,3,4,5,6,7,8,9];
 printReversed(array);
 function printReversed(array){
    for(var i = array.length-1; i >= 0; i--){
        console.log(array[i]);
    }
 }

 //q3
 console.log("---------------------------------------------------")
 console.log("q3")
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