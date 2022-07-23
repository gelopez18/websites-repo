import { customer } from "./Customer";
import { materials } from "./Materials";
import { extinguisher } from "./Extinguisher";
import { servicesProvided } from "./ServiceProvided";
import { taxes } from "./Taxes";



export class invoice extends customer {
    constructor(){
        super();
        let cus = new customer();
        let material = new materials();
        let exting  = new extinguisher();
        let svc = new servicesProvided();
        let tax = new taxes(city);
    }
}