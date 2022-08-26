import { textfield } from "../UI/text-Field.js";
import { Button } from "../UI/button.js";
import { Page } from "../frameWork/page.js";
import { Hr } from "../UI/hr.js";
import { orderList, SalesSummary } from "../Classes/Sales-Summary.js";
import { Label } from "../UI/lables.js";
import { ComboField } from "../UI/combo-field.js";
import { citylist } from "../Classes/Cities.js";

export class clientSummary extends Page {
    constructor(){
        super('Sales Summary');
        
    }
    createElement(){
        super.createElement();

        let PageTitle = new Label('Sales Summary');
            PageTitle.appendToElement(this.element);

        let space = new Hr();
            space.appendToElement(this.element);

        let wknumb = new textfield('Week Number','wkNumb');
            wknumb.appendToElement(this.element);

        let SRO = new textfield('SRO','sro');
            SRO.appendToElement(this.element);

        let clientName = new textfield('Client','Client');
            clientName.appendToElement(this.element);

        let cities = new ComboField('Cities', citylist);
            cities.appendToElement(this.element);    

        let total = new textfield('Total Before Taxes','total');
            total.appendToElement(this.element);
            space.appendToElement(this.element);
            
        let Add = new Button("Add");
            let styleStringAdd = 'btn btn-success btn-lg col-lg-4 col-md-4 col-sm-4';
            Add.setStyleString(styleStringAdd);
            Add.setType('submit')
            Add.appendToElement(this.element);
                Add.element.click(()=>{
                    let salesOrder = new SalesSummary();
                        salesOrder.addOrderList();
                    console.log(orderList);


                })
        let emtybtn = new Button("");
            let styleStringEmpty = 'btn btn-link btn-lg col-lg-4 col-md-4 col-sm-4';
            emtybtn.setStyleString(styleStringEmpty);
            emtybtn.appendToElement(this.element);
        let remove = new Button('Turn in');
            let styleStringSave = 'btn btn-primary btn-lg col-lg-4 col-md-4 col-sm-4';
            remove.setStyleString(styleStringSave);      
            remove.appendToElement(this.element);
            let input ="";
            remove.element.click(()=>{
                input = prompt("Please enter the week number");


            })           
    }
    getElementString(){
        return`<form class="card-body" method="POST" action ="index.php"></form>`;
    }
}

