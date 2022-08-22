import { textfield } from "../UI/text-Field.js";
import { Button } from "../UI/button.js";
import { Page } from "../frameWork/page.js";
import { Hr } from "../UI/hr.js";
import { orderList, SalesSummary } from "../Classes/Sales-Summary.js";

export class clientSummary extends Page {
    constructor(){
        super('Sales Summary');
    }
    createElement(){
        super.createElement();
        let space = new Hr();
            space.appendToElement(this.element);
        let wknumb = new textfield('Week Number','wkNumb');
            wknumb.appendToElement(this.element);
        let SRO = new textfield('SRO','sro');
            SRO.appendToElement(this.element);
        let clientName = new textfield('Client','Client');
            clientName.appendToElement(this.element);
        let total = new textfield('Total Before Taxes','Client');
            total.appendToElement(this.element);
        let Add = new Button("Add");
            let styleStringAdd = 'btn btn-success btn-lg col-lg-4 col-md-4 col-sm-4';
            Add.setStyleString(styleStringAdd);
            
            Add.appendToElement(this.element);
                Add.element.click(()=>{
                    let salesOrder = new SalesSummary();
                        salesOrder.addTaskList();
                    console.log(orderList);
                })
        let emtybtn = new Button("");
            let styleStringEmpty = 'btn btn-link btn-lg col-lg-4  col-md-4 col-sm-4';
            emtybtn.setStyleString(styleStringEmpty);
            emtybtn.appendToElement(this.element);
        let save = new Button('Save');
            let styleStringSave = 'btn btn-primary btn-lg col-lg-4  col-md-4 col-sm-4';
            save.setStyleString(styleStringSave);
            save.setType('submit')
            save.appendToElement(this.element);
            
    }
    getElementString(){
        return`<form method='POST' action =''></form>`;
    }
}