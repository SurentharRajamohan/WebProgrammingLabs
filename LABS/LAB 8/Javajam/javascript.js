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