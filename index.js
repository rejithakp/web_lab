const year = document.getElementById("year");
const month = document.getElementById("month");
const btn = document.getElementById("btn");
const currentDateLabel = document.getElementById("current-date");
const calenderData = document.getElementById("calender-data");
console.log("helll",year.value)
const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "Auguest",
  "September",
  "October",
  "November",
  "December",
];

weaks = ` <li class="day">Sun</li>
<li class="day">Mon</li>
<li class="day">Tue</li>
<li class="day">Wed</li>
<li class="day">Thu</li>
<li class="day">Fri</li>
<li class="day">Sat</li>`;


const renderCalender = () => {

  if (year.value && month.value) {
 
    let li ='';
    calenderData.innerHTML = '';
    currentDateLabel.innerHTML = '';

    let lastDayOfMonth =new Date(year.value, month.value, 0).getDate(), // get last day of current month
    firstDayOfMonth = new Date(year.value,month.value-1,1).getDay(), // get first day of current month
    lastDayOfPrevMonth = new Date(year.value,month.value-1,0).getDate(); // get last day of last month
   
    console.log(firstDayOfMonth,lastDayOfMonth,lastDayOfPrevMonth);

    currentDateLabel.textContent = `${months[month.value - 1]} , ${year.value}`;

    for(let i = firstDayOfMonth; i > 0 ; i--){
   
        li += `<li class="last-month">${lastDayOfPrevMonth -i + 1}</li>`;
        console.log(i);
    }

    for( let i = 1 ; i <= lastDayOfMonth; i++){
        li += `<li>${i}</li>`;
        console.log(i);
    }

    calenderData.innerHTML += weaks+li;
  }
};
btn.addEventListener("click", renderCalender);


