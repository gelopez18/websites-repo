import { list } from "../classes/tasks.js";
import { BaseElement } from "./base-element.js";

export class Table extends BaseElement{
    constructor(headers){
        super();
        this.headers = headers;
        this.data = list; 
        this.trTags = '';
    }
    addData(){

        for (let row of this.data) {
            this.trTags += `<tr>`;
                for (let property of this.headers) {
                    let field = row[property.toLowerCase()];
                    this.trTags += `<td class="mdl-data-table__cell--non-numeric">${field}</td>`;
                    }
                    this.trTags +=`</tr>`;
                }
        return this.trTags ;
      }  

    getElementString(){

        console.log(this.addData());
       
        let thTags = '';
                for (let h of this.headers) {
                    thTags += `<th class="mdl-data-table__cell--non-numeric">${h}</th>\n`;
                }

        return `
        <table class="table table-dark table-striped">
                <thead>
                    <tr>
                    ${thTags}
                    </tr>
                </thead>
                <tbody>
                    ${this.trTags}
                </tbody>
            </table>

        `;
    }
    
}