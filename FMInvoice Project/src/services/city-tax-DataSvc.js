
export class cityTaxDataSvc{
    constructor(cityTax){
        this.cityT =[];


    }

    loadCityData(cityT){
        console.log(cityT);
    }

    getcityTax(city, cityT){
        console.log(cityT.find(city));
    }
}


