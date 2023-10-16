const amountData = [
  { day: "2023-06-01", amount: 200 },
  { day: "2023-06-01", amount: 500 },
  { day: "2023-06-01", amount: 700 },
  { day: "2023-06-01", amount: 200 },
  { day: "2023-06-01", amount: 100 },
  { day: "2023-06-01", amount: 100 },
  { day: "2023-06-01", amount: 100 },
  // ... more calendar data
];

function filterDate(startDate, endDate) {
  console.log(startDate, endDate);
  // const filteredData = calendarData.filter((event) => {
  //   const eventDate = new Date(event.date);
  //   return eventDate >= startDate && eventDate <= endDate;
  // });

  // return filteredData;
}

// Step 1: Retrieve calendar data (dummy example)
const btnFilter = document.getElementById("filterBtn");

btnFilter.addEventListener("click", function () {
  const startDate = new Date(document.getElementById("startDate").value);
  const endDate = new Date(document.getElementById("endDate").value);

  filterData(startDate, endDate);
});

const cxx = document.getElementById("myChart").getContext("2d");
new Chart(cxx, {
  type: "line",
  data: {
    labels: amountData.map((x) => new Date(x.day).toISOString().split("T")[0]),
    datasets: [
      {
        label: "Amount",
        data: amountData.map((x) => x.amount),
        borderColor: "red",
        borderWidth: 1,
        // fill: false,
      },
    ],
  },
  options: {
    responsive: true,
  },
});
