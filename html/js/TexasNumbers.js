texasConfirmedDeaths();
  function texasConfirmedDeaths(){
    var Texas = "Texas";
    var bodyData ={'placeValue': Texas};
    fetch('/api/texasData', {method: "POST",headers: {'Content-Type': 'application/json'},body: JSON.stringify(bodyData)})
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        console.log('TexasConfirmedDeaths-data ', data);
        var currentDate = new Date();
        var date = currentDate.getDate() - 1;
        var month = currentDate.getMonth() + 1;
        var year = ('' + currentDate.getFullYear()).slice(2,4);
        var i=1;
        while(i<= 31){
          if (date == 0) {
            date = 30;
            month = month -1;
            continue;
          }
        var dateStr = month + '/' + date + '/' + year;
        var texasConfirmedCasesCard = 0;
        var texasDeathCasesCard = 0;
        var countyColumnCard = [];
        var countyConfirmedCases = [];
        var dateStr2 = dateStr;

        for(i =0; i<data["texasDeathsCardRow"].length; i++){
          countyColumnCard.push(data["texasDeathsCardRow"][i].Admin2)
          countyConfirmedCases.push(data["texasDeathsCardRow"][i][dateStr])
        }
      }
        // console.log("harris", data);
        data["texasDataRows"].forEach(element => texasConfirmedCasesCard += parseInt(element[dateStr]));
        document.getElementById("TexasCases").innerHTML = "Cases : " +texasConfirmedCasesCard;
        console.log("confirmed ", texasConfirmedCasesCard );
        data["texasDeathsCardRow"].forEach(element => texasDeathCasesCard += parseInt(element[dateStr]));
        document.getElementById("TexasDeaths").innerHTML = "Fatality : " +texasDeathCasesCard;
        console.log("deaths ", texasDeathCasesCard );
        data["texasDataRows"].forEach(element => texasConfirmedCasesCard += parseInt(element[dateStr]));
  });
  }
